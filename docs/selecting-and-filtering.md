# Selecting and filtering

[Official Documentation](https://docs.sportmonks.com/football2/api/request-options/selecting-fields#only-select-a-specific-field)

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setInclude('events:player_name,related_player_name,minute')
	->setFilter('eventTypes:18,14')
	->byId(18535517);
```