<?php

use Illuminate\Http\Client\Response;

it('can get season statistics by participant', function () {
    expect(football()->statistics()->seasonStatisticsByParticipant(
        participant: 'players',
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get stage statistics by id', function () {
    expect(football()->statistics()->stageStatisticsById(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get round statistics by id', function () {
    expect(football()->statistics()->roundStatisticsById(
        id: 1
    ))->toBeInstanceOf(Response::class);
});
