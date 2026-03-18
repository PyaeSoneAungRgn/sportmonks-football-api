<?php

use Illuminate\Http\Client\Response;

it('can get all odds', function () {
    expect(football()->inplayOdd()->all())->toBeInstanceOf(Response::class);
});

it('can get odds by fixture id', function () {
    expect(football()->inplayOdd()->byFixtureId(
        id: 10336114
    ))->toBeInstanceOf(Response::class);
});

it('can get odds by fixture id and bookmaker id', function () {
    expect(football()->inplayOdd()->byFixtureIdAndBookmakerId(
        fixtureId: 10336114,
        bookmakerId: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get odds by fixture id and market id', function () {
    expect(football()->inplayOdd()->byFixtureIdAndMarketId(
        fixtureId: 10336114,
        marketId: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get last updated odds', function () {
    expect(football()->inplayOdd()->lastUpdated())->toBeInstanceOf(Response::class);
});
