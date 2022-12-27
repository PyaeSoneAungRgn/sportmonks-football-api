<?php

it('can get pre-matches news', function () {
    expect(football()->news()->preMatchNews())->toBeArray();
});

it('can get pre-matches news by season id', function () {
    expect(football()->news()->preMatchNewsBySeasonId(
        id: 718
    ))->toBeArray();
});

it('can get pre-matches news for upcoming fixtures', function () {
    expect(football()->news()->preMatchNewsForUpcomingFixtures())->toBeArray();
});
