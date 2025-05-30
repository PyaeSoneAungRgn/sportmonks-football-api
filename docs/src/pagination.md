# Pagination

[Official Documentation](https://docs.sportmonks.com/football2/tutorials-and-guides/tutorials/introduction/pagination)

## Set Page

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setPage(2)
	->all();
```

## Set Per Page

```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setPerPage(15)
	->all();
```
