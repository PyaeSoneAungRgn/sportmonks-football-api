<?php

use Illuminate\Http\Client\Response;

it('can get schedules by season id', function () {
    expect(football()->schedule()->bySeasonId(
        id: 718
    ))->toBeInstanceOf(Response::class);
});

it('can get schedules by team id', function () {
    expect(football()->schedule()->byTeamId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get schedules by season id and team id', function () {
    expect(football()->schedule()->bySeasonIdAndTeamId(
        seasonId: 718,
        teamId: 1
    ))->toBeInstanceOf(Response::class);
});
