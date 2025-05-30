# Response Dto

## Update .env

```bash
SPORTMONKS_FOOTBALL_RETURN_TYPE=dto
```

## Available Method

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
