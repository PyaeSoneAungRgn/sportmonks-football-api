<?php

it('can get all venues', function () {
    expect(football()->venue()->all())->toBeArray();
});

it('can get venue by id', function () {
    expect(football()->venue()->byId(
        id: 1
    ))->toBeArray();
});

it('can get venues by season id', function () {
    expect(football()->venue()->bySeasonId(
        id: 718
    ))->toBeArray();
});

it('can get venues by search by name', function () {
    expect(football()->venue()->searchByName(
        search: 'Etihad'
    ))->toBeArray();
});
