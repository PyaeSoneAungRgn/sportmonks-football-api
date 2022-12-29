<?php

it('can get all odds', function () {
    expect(football()->preMatchOdd()->all())->toBeArray();
});

it('can get odds by fixture id', function () {
    expect(football()->preMatchOdd()->byFixtureId(
        id: 10336114
    ))->toBeArray();
});

it('can get odds by fixture id and bookmaker id', function () {
    expect(football()->preMatchOdd()->byFixtureIdAndBookmakerId(
        fixtureId: 10336114,
        bookmakerId: 1
    ))->toBeArray();
});

it('can get odds by fixture id and market id', function () {
    expect(football()->preMatchOdd()->byFixtureIdAndMarketId(
        fixtureId: 10336114,
        marketId: 1
    ))->toBeArray();
});

it('can get last updated odds', function () {
    expect(football()->preMatchOdd()->lastUpdated())->toBeArray();
});
