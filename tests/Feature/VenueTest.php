<?php

use Illuminate\Http\Client\Response;

it('can get all venues', function () {
    expect(football()->venue()->all())->toBeInstanceOf(Response::class);
});

it('can get venue by id', function () {
    expect(football()->venue()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get venues by season id', function () {
    expect(football()->venue()->bySeasonId(
        id: 718
    ))->toBeInstanceOf(Response::class);
});

it('can get venues by search by name', function () {
    expect(football()->venue()->searchByName(
        search: 'Etihad'
    ))->toBeInstanceOf(Response::class);
});
