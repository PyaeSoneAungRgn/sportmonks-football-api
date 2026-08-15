<?php

use Illuminate\Http\Client\Response;

it('can get all seasons', function () {
    expect(football()->season()->all())->toBeInstanceOf(Response::class);
});

it('can get season by id', function () {
    expect(football()->season()->byId(
        id: 718
    ))->toBeInstanceOf(Response::class);
});

it('can get season by search by name', function () {
    expect(football()->season()->searchByName(
        search: 'Premier'
    ))->toBeInstanceOf(Response::class);
});

it('can get seasons by team id', function () {
    expect(football()->season()->byTeamId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get brackets by season id', function () {
    expect(football()->season()->bracketsBySeasonId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});
