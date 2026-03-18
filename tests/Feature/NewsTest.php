<?php

use Illuminate\Http\Client\Response;

it('can get pre-matches news', function () {
    expect(football()->news()->preMatchNews())->toBeInstanceOf(Response::class);
});

it('can get pre-matches news by season id', function () {
    expect(football()->news()->preMatchNewsBySeasonId(
        id: 718
    ))->toBeInstanceOf(Response::class);
});

it('can get pre-matches news for upcoming fixtures', function () {
    expect(football()->news()->preMatchNewsForUpcomingFixtures())->toBeInstanceOf(Response::class);
});
