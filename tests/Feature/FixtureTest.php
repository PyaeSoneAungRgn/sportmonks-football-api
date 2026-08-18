<?php

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

it('can get all fixtures', function () {
    expect(football()->fixture()->all())->toBeInstanceOf(Response::class);
});

it('can get fixture by id', function () {
    expect(football()->fixture()->byId(
        id: 10336114
    ))->toBeInstanceOf(Response::class);
});

it('can get fixtures by ids', function () {
    expect(football()->fixture()->byMultipleIds(
        ids: [10336114]
    ))->toBeInstanceOf(Response::class);
});

it('can get fixtures by date', function () {
    expect(football()->fixture()->byDate(
        date: now()->toDateString()
    ))->toBeInstanceOf(Response::class);
});

it('can get fixtures by date range', function () {
    expect(football()->fixture()->byDateRange(
        startDate: now()->toDateString(),
        endDate: now()->addDay()->toDateString()
    ))->toBeInstanceOf(Response::class);
});

it('can get fixtures by date range for team', function () {
    expect(football()->fixture()->byDateRangeForTeam(
        startDate: now()->toDateString(),
        endDate: now()->addDay()->toDateString(),
        teamId: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get fixtures by head to head', function () {
    expect(football()->fixture()->byHeadToHead(
        teamA: 1,
        teamB: 2
    ))->toBeInstanceOf(Response::class);
});

it('can get fixtures by search by name', function () {
    expect(football()->fixture()->searchByName(
        search: 'Manchester'
    ))->toBeInstanceOf(Response::class);
});

it('can get upcoming fixtures by market id', function () {
    expect(football()->fixture()->upcomingByMarketId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get latest updated fixtures', function () {
    expect(football()->fixture()->lastUpdated())->toBeInstanceOf(Response::class);
});

it('can get upcoming fixtures by tv station id', function () {
    expect(football()->fixture()->upcomingByTvStationId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get past fixtures by tv station id', function () {
    expect(football()->fixture()->pastByTvStationId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get fixtures with cursor based pagination', function () {
    expect(football()->fixture()
        ->setCursor('WzEsMixbMTk3MTAxMDBdLFtbInNwb3J0cy5maXh0dXJlcy5pZCIsMV1dXQ')
        ->all()
    )->toBeInstanceOf(Response::class);
});

it('extracts the cursor token when next_cursor is a full url', function () {
    football()->fixture()
        ->setCursor('https://api.sportmonks.com/v3/football/fixtures?include=state&cursor=WzEsNTAsWzUwXSxbWyJzcG9ydHMuZml4dHVyZXMuaWQiLDBdXV0')
        ->all();

    Http::assertSent(fn ($request) => $request['cursor'] === 'WzEsNTAsWzUwXSxbWyJzcG9ydHMuZml4dHVyZXMuaWQiLDBdXV0');
});

it('drops per_page and page when a cursor is set', function () {
    football()->fixture()
        ->setPerPage(25)
        ->setCursor('WzEsMixbMTk3MTAxMDBdLFtbInNwb3J0cy5maXh0dXJlcy5pZCIsMV1dXQ')
        ->all();

    Http::assertSent(function ($request) {
        return $request['cursor'] === 'WzEsMixbMTk3MTAxMDBdLFtbInNwb3J0cy5maXh0dXJlcy5pZCIsMV1dXQ'
            && ! isset($request['per_page'])
            && ! isset($request['page']);
    });
});

it('drops the cursor when per_page or page is set afterwards', function () {
    football()->fixture()
        ->setCursor('WzEsMixbMTk3MTAxMDBdLFtbInNwb3J0cy5maXh0dXJlcy5pZCIsMV1dXQ')
        ->setPage(2)
        ->all();

    Http::assertSent(fn ($request) => $request['page'] === 2 && ! isset($request['cursor']));
});
