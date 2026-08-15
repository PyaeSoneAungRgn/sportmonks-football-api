<?php

use Illuminate\Http\Client\Response;

it('can get all match facts', function () {
    expect(football()->matchFact()->all())->toBeInstanceOf(Response::class);
});

it('can get match facts by fixture id', function () {
    expect(football()->matchFact()->byFixtureId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get match facts by date range', function () {
    expect(football()->matchFact()->byDateRange(
        startDate: now()->toDateString(),
        endDate: now()->addDay()->toDateString()
    ))->toBeInstanceOf(Response::class);
});

it('can get match facts by league id', function () {
    expect(football()->matchFact()->byLeagueId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});
