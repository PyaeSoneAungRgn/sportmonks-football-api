<?php

it('can get all players', function () {
    expect(football()->player()->all())->toBeArray();
});

it('can get player by id', function () {
    expect(football()->player()->byId(
        id: 24
    ))->toBeArray();
});

it('can get players by country id', function () {
    expect(football()->player()->byCountryId(
        id: 1
    ))->toBeArray();
});

it('can get players by search by name', function () {
    expect(football()->player()->searchByName(
        search: 'Messi'
    ))->toBeArray();
});

it('can get last updated players', function () {
    expect(football()->player()->lastUpdated())->toBeArray();
});
