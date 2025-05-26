<?php

it('can get all referees', function () {
    expect(football()->referee()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get referee by id', function () {
    expect(football()->referee()->byId(
        id: 105
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get referees by country id', function () {
    expect(football()->referee()->byCountryId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get referees by search by name', function () {
    expect(football()->referee()->searchByName(
        search: 'Messi'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
