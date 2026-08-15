<?php

use Illuminate\Http\Client\Response;

it('can get all team rankings', function () {
    expect(football()->teamRanking()->all())->toBeInstanceOf(Response::class);
});

it('can get team rankings by team id', function () {
    expect(football()->teamRanking()->byTeamId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get team rankings by date', function () {
    expect(football()->teamRanking()->byDate(
        date: now()->toDateString()
    ))->toBeInstanceOf(Response::class);
});
