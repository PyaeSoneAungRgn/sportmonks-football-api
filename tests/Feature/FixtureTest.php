<?php

it('can get all fixtures', function () {
    expect(football()->fixture()->all())->toBeArray();
});

it('can get fixture by id', function () {
    expect(football()->fixture()->byId(
        id: 10336114
    ))->toBeArray();
});

it('can get fixtures by ids', function () {
    expect(football()->fixture()->byMultipleIds(
        ids: [10336114]
    ))->toBeArray();
});

it('can get fixtures by date', function () {
    expect(football()->fixture()->byDate(
        date: now()->toDateString()
    ))->toBeArray();
});

it('can get fixtures by date range', function () {
    expect(football()->fixture()->byDateRange(
        startDate: now()->toDateString(),
        endDate: now()->addDay()->toDateString()
    ))->toBeArray();
});

it('can get fixtures by date range for team', function () {
    expect(football()->fixture()->byDateRangeForTeam(
        startDate: now()->toDateString(),
        endDate: now()->addDay()->toDateString(),
        teamId: 1
    ))->toBeArray();
});

it('can get fixtures by head to head', function () {
    expect(football()->fixture()->byHeadToHead(
        teamA: 1,
        teamB: 2
    ))->toBeArray();
});

it('can get fixtures by search by name', function () {
    expect(football()->fixture()->searchByName(
        search: 'Manchester'
    ))->toBeArray();
});

it('can get upcoming fixtures by market id', function () {
    expect(football()->fixture()->upcomingByMarketId(
        id: 1
    ))->toBeArray();
});

it('can get latest updated fixtures', function () {
    expect(football()->fixture()->lastUpdated())->toBeArray();
});
