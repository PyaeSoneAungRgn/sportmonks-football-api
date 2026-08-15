<?php

use Illuminate\Http\Client\Response;

it('can get all premium odds', function () {
    expect(football()->premiumOdd()->all())->toBeInstanceOf(Response::class);
});

it('can get premium odds by fixture id', function () {
    expect(football()->premiumOdd()->byFixtureId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get premium odds by fixture id and bookmaker id', function () {
    expect(football()->premiumOdd()->byFixtureIdAndBookmakerId(
        fixtureId: 1,
        bookmakerId: 2
    ))->toBeInstanceOf(Response::class);
});

it('can get premium odds by fixture id and market id', function () {
    expect(football()->premiumOdd()->byFixtureIdAndMarketId(
        fixtureId: 1,
        marketId: 2
    ))->toBeInstanceOf(Response::class);
});

it('can get updated premium odds between time range', function () {
    expect(football()->premiumOdd()->updatedBetweenTimeRange(
        from: 1,
        to: 2
    ))->toBeInstanceOf(Response::class);
});

it('can get updated historical premium odds between time range', function () {
    expect(football()->premiumOdd()->historicalUpdatedBetweenTimeRange(
        from: 1,
        to: 2
    ))->toBeInstanceOf(Response::class);
});

it('can get all historical premium odds', function () {
    expect(football()->premiumOdd()->allHistorical())->toBeInstanceOf(Response::class);
});
