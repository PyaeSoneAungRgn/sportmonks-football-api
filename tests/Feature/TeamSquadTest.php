<?php

it('can get team squads by team id', function () {
    expect(football()->teamSquad()->byTeamId(
        id: 1
    ))->toBeArray();
});

it('can get team squads by team id and season id', function () {
    expect(football()->teamSquad()->byTeamIdAndSeasonId(
        teamId: 1,
        seasonId: 718
    ))->toBeArray();
});
