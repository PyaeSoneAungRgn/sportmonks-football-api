<?php

it('can get all stages', function () {
    expect(football()->stage()->all())->toBeArray();
});

it('can get stage by id', function () {
    expect(football()->stage()->byId(
        id: 1183
    ))->toBeArray();
});

it('can get stages by season id', function () {
    expect(football()->stage()->bySeasonId(
        id: 718
    ))->toBeArray();
});

it('can get stages by search by name', function () {
    expect(football()->stage()->searchByName(
        search: '1st'
    ))->toBeArray();
});
