<?php

use Illuminate\Http\Client\Response;

it('can get all transfer rumours', function () {
    expect(football()->transferRumour()->all())->toBeInstanceOf(Response::class);
});

it('can get transfer rumour by id', function () {
    expect(football()->transferRumour()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get transfer rumours between date range', function () {
    expect(football()->transferRumour()->betweenDateRange(
        startDate: now()->toDateString(),
        endDate: now()->addDay()->toDateString()
    ))->toBeInstanceOf(Response::class);
});

it('can get transfer rumours by team id', function () {
    expect(football()->transferRumour()->byTeamId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get transfer rumours by player id', function () {
    expect(football()->transferRumour()->byPlayerId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});
