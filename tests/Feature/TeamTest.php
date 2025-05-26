<?php

it('can get all teams', function () {
    expect(football()->team()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get teams by id', function () {
    expect(football()->team()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get teams by country id', function () {
    expect(football()->team()->byCountryId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get teams by season id', function () {
    expect(football()->team()->bySeasonId(
        id: 718
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get teams by search by name', function () {
    expect(football()->team()->searchByName(
        search: 'Manchester'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
