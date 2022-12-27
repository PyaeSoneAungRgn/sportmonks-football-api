<?php

it('can get all tv stations', function () {
    expect(football()->tvStation()->all())->toBeArray();
});

it('can get venue by id', function () {
    expect(football()->tvStation()->byId(
        id: 1
    ))->toBeArray();
});

it('can get tv stations by fixture id', function () {
    expect(football()->tvStation()->byFixtureId(
        id: 10336114
    ))->toBeArray();
});
