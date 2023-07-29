<?php

it('can get all bookmakers', function () {
    expect(football()->bookmaker()->all())->toBeArray();
});

it('can get bookmaker by id', function () {
    expect(football()->bookmaker()->byId(
        id: 1
    ))->toBeArray();
});

it('can search bookmakers', function () {
    expect(football()->bookmaker()->search(
        name: 'bet'
    ))->toBeArray();
});

it('can get bookmakers by fixture id', function () {
    expect(football()->bookmaker()->byFixtureId(
        id: 10336114
    ))->toBeArray();
});
