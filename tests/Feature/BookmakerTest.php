<?php

use Illuminate\Http\Client\Response;

it('can get all bookmakers', function () {
    expect(football()->bookmaker()->all())->toBeInstanceOf(Response::class);
});

it('can get bookmaker by id', function () {
    expect(football()->bookmaker()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can search bookmakers', function () {
    expect(football()->bookmaker()->search(
        name: 'bet'
    ))->toBeInstanceOf(Response::class);
});

it('can get bookmakers by fixture id', function () {
    expect(football()->bookmaker()->byFixtureId(
        id: 10336114
    ))->toBeInstanceOf(Response::class);
});
