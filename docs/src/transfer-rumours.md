# Transfer Rumours

## GET All Transfer Rumours

```php
use SportmonksFootballApi;

SportmonksFootballApi::transferRumour()->all();
```

## GET Transfer Rumour by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::transferRumour()->byId($id);
```

## GET Transfer Rumours Between Date Range

```php
use SportmonksFootballApi;

SportmonksFootballApi::transferRumour()->betweenDateRange('2022-12-28', '2022-12-31');
```

## GET Transfer Rumours by Team ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::transferRumour()->byTeamId($teamId);
```

## GET Transfer Rumours by Player ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::transferRumour()->byPlayerId($playerId);
```
