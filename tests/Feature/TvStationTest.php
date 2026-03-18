<?php

use Illuminate\Http\Client\Response;

it('can get all tv stations', function () {
    expect(football()->tvStation()->all())->toBeInstanceOf(Response::class);
});

it('can get venue by id', function () {
    expect(football()->tvStation()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get tv stations by fixture id', function () {
    expect(football()->tvStation()->byFixtureId(
        id: 10336114
    ))->toBeInstanceOf(Response::class);
});
