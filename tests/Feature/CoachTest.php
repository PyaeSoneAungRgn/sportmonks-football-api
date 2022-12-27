<?php

it('can get all coaches', function () {
    expect(football()->coach()->all())->toBeArray();
});

it('can get coach by id', function () {
    expect(football()->coach()->byId(
        id: 324
    ))->toBeArray();
});

it('can get coaches by country id', function () {
    expect(football()->coach()->byCountryId(
        id: 1
    ))->toBeArray();
});

it('can get coaches by search by name', function () {
    expect(football()->coach()->searchByName(
        search: 'Messi'
    ))->toBeArray();
});

it('can get last updated coaches', function () {
    expect(football()->coach()->lastUpdated())->toBeArray();
});
