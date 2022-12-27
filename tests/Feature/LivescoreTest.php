<?php

it('can get inplay livescores', function () {
    expect(football()->livescore()->inplay())->toBeArray();
});

it('can get all livescores', function () {
    expect(football()->livescore()->all())->toBeArray();
});

it('can get latest updated Livescores', function () {
    expect(football()->livescore()->lastUpdated())->toBeArray();
});
