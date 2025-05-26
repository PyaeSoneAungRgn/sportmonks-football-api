<?php

it('can get team squads by team id', function () {
    expect(football()->teamSquad()->byTeamId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get team squads by team id and season id', function () {
    expect(football()->teamSquad()->byTeamIdAndSeasonId(
        teamId: 1,
        seasonId: 718
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get extended team squads by team id', function () {
    expect(football()->teamSquad()->extendedByTeamId(
        teamId: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
