<?php

use Illuminate\Http\Client\Response;

it('can get all stages', function () {
    expect(football()->stage()->all())->toBeInstanceOf(Response::class);
});

it('can get stage by id', function () {
    expect(football()->stage()->byId(
        id: 1183
    ))->toBeInstanceOf(Response::class);
});

it('can get stages by season id', function () {
    expect(football()->stage()->bySeasonId(
        id: 718
    ))->toBeInstanceOf(Response::class);
});

it('can get stages by search by name', function () {
    expect(football()->stage()->searchByName(
        search: '1st'
    ))->toBeInstanceOf(Response::class);
});
