<?php

it('can get all standings', function () {
    expect(football()->standing()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get standings by season id', function () {
    expect(football()->standing()->bySeasonId(
        id: 718
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get standings by round id', function () {
    expect(football()->standing()->byRoundId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get standing correction by season id', function () {
    expect(football()->standing()->standingCorrectionBySeasonId(
        id: 718
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get standing correction by league id', function () {
    expect(football()->standing()->liveStandingsByLeagueId(
        id: 2
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
