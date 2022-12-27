<?php

it('can get all referees', function () {
    expect(football()->referee()->all())->toBeArray();
});

it('can get referee by id', function () {
    expect(football()->referee()->byId(
        id: 105
    ))->toBeArray();
});

it('can get referees by country id', function () {
    expect(football()->referee()->byCountryId(
        id: 1
    ))->toBeArray();
});

it('can get referees by search by name', function () {
    expect(football()->referee()->searchByName(
        search: 'Messi'
    ))->toBeArray();
});
