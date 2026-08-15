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

## Laravel Boost Skill

This package ships a [Laravel Boost](https://github.com/laravel/boost) agent skill, `sportmonks-football-api-usage`, that helps AI coding agents use the package correctly — installation, configuration, resources, request options, and return types.

To enable it in a Laravel application:

1. Install Boost: `composer require laravel/boost --dev`
2. Run: `php artisan boost:install` (select the skills feature)

Already using Boost? Run `php artisan boost:update --discover` to pick up the new skill.

