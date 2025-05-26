<?php

it('can get all fixtures', function () {
    expect(football()->fixture()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get fixture by id', function () {
    expect(football()->fixture()->byId(
        id: 10336114
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get fixtures by ids', function () {
    expect(football()->fixture()->byMultipleIds(
        ids: [10336114]
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get fixtures by date', function () {
    expect(football()->fixture()->byDate(
        date: now()->toDateString()
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get fixtures by date range', function () {
    expect(football()->fixture()->byDateRange(
        startDate: now()->toDateString(),
        endDate: now()->addDay()->toDateString()
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get fixtures by date range for team', function () {
    expect(football()->fixture()->byDateRangeForTeam(
        startDate: now()->toDateString(),
        endDate: now()->addDay()->toDateString(),
        teamId: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get fixtures by head to head', function () {
    expect(football()->fixture()->byHeadToHead(
        teamA: 1,
        teamB: 2
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get fixtures by search by name', function () {
    expect(football()->fixture()->searchByName(
        search: 'Manchester'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get upcoming fixtures by market id', function () {
    expect(football()->fixture()->upcomingByMarketId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get latest updated fixtures', function () {
    expect(football()->fixture()->lastUpdated())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
