# Response Dto

## Update .env

```bash
SPORTMONKS_FOOTBALL_RETURN_TYPE=dto
```

## Available Methods

```php
use SportmonksFootballApi;

$fixtures = SportmonksFootballApi::fixture()->all();

$fixtures->response(); // return Laravel Http Response
$fixtures->collect(); // return Laravel Collection
$fixtures->collect('data'); // return Laravel Collection of $response->data

$fixtures->rateLimit()->resets_in_seconds; // 3600
$fixtures->rateLimit()->remaining; // 3000
$fixtures->rateLimit()->requested_entity; // Fixture

$fixtures->pagination()->count; // 25
$fixtures->pagination()->per_page; // 25
$fixtures->pagination()->current_page; // 1
$fixtures->pagination()->next_page; // https://api.sportmonks.com/v3/football/fixtures?timezone=UTC&page=2"
```

## Laravel Command Example

```php
<?php

namespace Modules\Football\Console\Commands;

use Illuminate\Console\Command;
use Modules\Football\Console\Actions\CreateLeagueAction;
use PyaeSoneAung\SportmonksFootballApi\Facades\SportmonksFootballApi;

class GetLeagueCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'football:get-league {--queue=sync}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get league from API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $queue = $this->option('queue');

        $page = 1;

        do {
            $this->info("Fetching League... Page: {$page}");

            $leagues = SportmonksFootballApi::league()
                ->setPage($page)
                ->all();

            $this->withProgressBar($leagues->collect('data'), function (array $league) use ($queue) {
                dispatch(fn () => app(CreateLeagueAction::class)->execute($league))
                    ->onQueue($queue)
                    ->name("Update League: {$league['name']}");
            });

            $page++;
        } while ($leagues->pagination()->has_more === true);
    }
}
```
