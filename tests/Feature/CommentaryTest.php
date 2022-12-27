<?php

it('can get all commentaries', function () {
    expect(football()->commentary()->all())->toBeArray();
});

it('can get commentaries by fixture id', function () {
    expect(football()->commentary()->byFixtureId(
        id: 10336114
    ))->toBeArray();
});
