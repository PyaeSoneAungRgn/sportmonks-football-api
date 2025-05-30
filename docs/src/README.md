# Installation

## Install Package

Download package via composer

```bash
composer require pyaesoneaung/sportmonks-football-api
```

Update `.env`

```env
SPORTMONKS_FOOTBALL_API_TOKEN=Your-Sportmonks-Api-Token
SPORTMONKS_FOOTBALL_TIMEZONE=UTC
SPORTMONKS_FOOTBALL_RETURN_TYPE=dto
```

## Return Type

By default, it returns an array. Other supported return types are `collection` and `response`. `collection` returns a [Laravel Collection](https://laravel.com/docs/12.x/collections) object, while `response` returns a [Laravel HTTP Response](https://laravel.com/docs/12.x/http-client#making-requests) object.
By default, it returns an array. Other supported return types are `collection`, `response`, and dto. `collection` returns a [Laravel Collection](https://laravel.com/docs/12.x/collections) object, `response` returns a [Laravel HTTP Response](https://laravel.com/docs/12.x/http-client#making-requests) object, and dto returns a [ResponseDto](https://sportmonks-football-api.pyaesoneaung.dev/response-dto.html) object.

