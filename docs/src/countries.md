# Countries

## GET All Countries

```php
use SportmonksFootballApi;

SportmonksFootballApi::country()->all();
```

## GET Country by ID

```php
use SportmonksFootballApi;

SportmonksFootballApi::country()->byId($id);
```

## GET Countries by Search

```php
use SportmonksFootballApi;

SportmonksFootballApi::country()->search($name);
```