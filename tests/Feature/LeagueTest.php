<?php

it('can get all leagues', function () {
    expect(football()->league()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get league by id', function () {
    expect(football()->league()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get leagues by live', function () {
    expect(football()->league()->byLive())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get leagues by date', function () {
    expect(football()->league()->byFixtureDate(
        date: now()->toDateString()
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get leagues by country id', function () {
    expect(football()->league()->byCountryId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get leagues search by name', function () {
    expect(football()->league()->searchByName(
        search: 'Premier'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get all leagues by team id', function () {
    expect(football()->league()->allLeaguesByTeamId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get current leagues by team id', function () {
    expect(football()->league()->currentLeaguesByTeamId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
