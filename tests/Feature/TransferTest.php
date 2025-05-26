<?php

it('can get all transfers', function () {
    expect(football()->transfer()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get transfer by id', function () {
    expect(football()->transfer()->byId(
        id: 24
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get latest transfers', function () {
    expect(football()->transfer()->latestTransfers())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get transfers between date range', function () {
    expect(football()->transfer()->betweenDateRange(
        startDate: now()->toDateString(),
        endDate: now()->addDay()->toDateString()
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get transfers by team id', function () {
    expect(football()->transfer()->byTeamId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get transfers by player id', function () {
    expect(football()->transfer()->byPlayerId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
