<?php

it('can get inplay livescores', function () {
    expect(football()->livescore()->inplay())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get all livescores', function () {
    expect(football()->livescore()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get latest updated Livescores', function () {
    expect(football()->livescore()->lastUpdated())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
