<?php

use Illuminate\Http\Client\Response;

it('can get all referees', function () {
    expect(football()->referee()->all())->toBeInstanceOf(Response::class);
});

it('can get referee by id', function () {
    expect(football()->referee()->byId(
        id: 105
    ))->toBeInstanceOf(Response::class);
});

it('can get referees by country id', function () {
    expect(football()->referee()->byCountryId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get referees by search by name', function () {
    expect(football()->referee()->searchByName(
        search: 'Messi'
    ))->toBeInstanceOf(Response::class);
});
