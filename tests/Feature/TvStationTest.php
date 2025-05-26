<?php

it('can get all tv stations', function () {
    expect(football()->tvStation()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get venue by id', function () {
    expect(football()->tvStation()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get tv stations by fixture id', function () {
    expect(football()->tvStation()->byFixtureId(
        id: 10336114
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
