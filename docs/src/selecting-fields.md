# Selecting fields

[Official Documentation](https://docs.sportmonks.com/football2/api/request-options/selecting-fields)

## Only select a specific field

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setSelect('name')
	->byId(18535517);
```

## Select a specific field on an include

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setInclude('lineups.player;lineups.player.country')
	->byId(18535517);
```