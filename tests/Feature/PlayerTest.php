<?php

use Illuminate\Http\Client\Response;

it('can get all players', function () {
    expect(football()->player()->all())->toBeInstanceOf(Response::class);
});

it('can get player by id', function () {
    expect(football()->player()->byId(
        id: 24
    ))->toBeInstanceOf(Response::class);
});

it('can get players by country id', function () {
    expect(football()->player()->byCountryId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get players by search by name', function () {
    expect(football()->player()->searchByName(
        search: 'Messi'
    ))->toBeInstanceOf(Response::class);
});

it('can get last updated players', function () {
    expect(football()->player()->lastUpdated())->toBeInstanceOf(Response::class);
});
