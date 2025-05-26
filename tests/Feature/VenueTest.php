<?php

it('can get all venues', function () {
    expect(football()->venue()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get venue by id', function () {
    expect(football()->venue()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get venues by season id', function () {
    expect(football()->venue()->bySeasonId(
        id: 718
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get venues by search by name', function () {
    expect(football()->venue()->searchByName(
        search: 'Etihad'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
