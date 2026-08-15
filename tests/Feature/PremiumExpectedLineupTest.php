<?php

use Illuminate\Http\Client\Response;

it('can get expected lineup by team id', function () {
    expect(football()->premiumExpectedLineup()->byTeamId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get expected lineups by player id', function () {
    expect(football()->premiumExpectedLineup()->byPlayerId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});
