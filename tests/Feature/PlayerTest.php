<?php

it('can get all players', function () {
    expect(football()->player()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get player by id', function () {
    expect(football()->player()->byId(
        id: 24
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get players by country id', function () {
    expect(football()->player()->byCountryId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get players by search by name', function () {
    expect(football()->player()->searchByName(
        search: 'Messi'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get last updated players', function () {
    expect(football()->player()->lastUpdated())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
