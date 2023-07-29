# With Queries

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->withQueries(['foo' => 'bar'])
	->all();

// https://api.sportmonks.com/v3/football/fixtures?foo=bar
```