<?php

it('can get all leagues', function () {
    expect(football()->league()->all())->toBeArray();
});

it('can get league by id', function () {
    expect(football()->league()->byId(
        id: 1
    ))->toBeArray();
});

it('can get leagues by live', function () {
    expect(football()->league()->byLive())->toBeArray();
});

it('can get leagues by date', function () {
    expect(football()->league()->byFixtureDate(
        date: now()->toDateString()
    ))->toBeArray();
});

it('can get leagues by country id', function () {
    expect(football()->league()->byCountryId(
        id: 1
    ))->toBeArray();
});

it('can get leagues search by name', function () {
    expect(football()->league()->searchByName(
        search: 'Premier'
    ))->toBeArray();
});

it('can get all leagues by team id', function () {
    expect(football()->league()->allLeaguesByTeamId(
        id: 1
    ))->toBeArray();
});

it('can get current leagues by team id', function () {
    expect(football()->league()->currentLeaguesByTeamId(
        id: 1
    ))->toBeArray();
});
