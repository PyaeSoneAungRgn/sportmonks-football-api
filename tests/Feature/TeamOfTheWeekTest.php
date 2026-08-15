<?php

use Illuminate\Http\Client\Response;

it('can get all team of the weeks', function () {
    expect(football()->teamOfTheWeek()->all())->toBeInstanceOf(Response::class);
});

it('can get team of the week by round id', function () {
    expect(football()->teamOfTheWeek()->byRoundId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get latest team of the week by league id', function () {
    expect(football()->teamOfTheWeek()->latestByLeagueId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});
