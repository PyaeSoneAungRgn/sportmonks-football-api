<?php

use Illuminate\Http\Client\Response;

it('can get all coaches', function () {
    expect(football()->coach()->all())->toBeInstanceOf(Response::class);
});

it('can get coach by id', function () {
    expect(football()->coach()->byId(
        id: 324
    ))->toBeInstanceOf(Response::class);
});

it('can get coaches by country id', function () {
    expect(football()->coach()->byCountryId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get coaches by search by name', function () {
    expect(football()->coach()->searchByName(
        search: 'Messi'
    ))->toBeInstanceOf(Response::class);
});

it('can get last updated coaches', function () {
    expect(football()->coach()->lastUpdated())->toBeInstanceOf(Response::class);
});
