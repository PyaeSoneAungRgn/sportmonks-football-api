<?php

it('can get all coaches', function () {
    expect(football()->coach()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get coach by id', function () {
    expect(football()->coach()->byId(
        id: 324
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get coaches by country id', function () {
    expect(football()->coach()->byCountryId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get coaches by search by name', function () {
    expect(football()->coach()->searchByName(
        search: 'Messi'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get last updated coaches', function () {
    expect(football()->coach()->lastUpdated())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
