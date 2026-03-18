<?php

use Illuminate\Http\Client\Response;

it('can get inplay livescores', function () {
    expect(football()->livescore()->inplay())->toBeInstanceOf(Response::class);
});

it('can get all livescores', function () {
    expect(football()->livescore()->all())->toBeInstanceOf(Response::class);
});

it('can get latest updated Livescores', function () {
    expect(football()->livescore()->lastUpdated())->toBeInstanceOf(Response::class);
});
