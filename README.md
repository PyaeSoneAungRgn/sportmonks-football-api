# Sportmonks Football Api

Laravel package for [Sportmonks Football Api(V3)](https://www.sportmonks.com/football-api-3-0-docs/)

- ⚡️ Simple & Powerful
- 🤝 Support All Football Endpoints
- 👨‍💻 Active Development

## Installation

```bash
composer require pyaesoneaung/sportmonks-football-api
```

`.env`

```env
SPORTMONKS_FOOTBALL_API_TOKEN=Your-Sportmonks-Api-Token
SPORTMONKS_FOOTBALL_TIMEZONE=Asia/Yangon
```

## Documentation

📚 Read the full documentation at [pyaesoneaungrgn.github.io/sportmonks-football-api](https://pyaesoneaungrgn.github.io/sportmonks-football-api)

## Basic Usage

#### Get All Fixtures
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->all();
```

#### Get Fixture by ID
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()->byId($id);
```

#### Get All Fixtures With Request Options
```php
use SportmonksFootballApi;

SportmonksFootballApi::fixture()
	->setSelect('name')
	->setInclude('events.type')
	->setFilter('eventTypes:18,14')
	->setPage(2)
	->all();
```
And more...

📚 Checkout the full documentation at [pyaesoneaungrgn.github.io/sportmonks-football-api](https://pyaesoneaungrgn.github.io/sportmonks-football-api)

## Testing

Edit Sportmonks api token at `tests/Pest.php`

```bash
composer test
```
