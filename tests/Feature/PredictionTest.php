<?php

use Illuminate\Http\Client\Response;

it('can get probabilities', function () {
    expect(football()->prediction()->probabilities())->toBeInstanceOf(Response::class);
});

it('can get probabilities by league id', function () {
    expect(football()->prediction()->probabilitiesByLeagueId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get probabilities by fixture id', function () {
    expect(football()->prediction()->probabilitiesByFixtureId(
        id: 10336114
    ))->toBeInstanceOf(Response::class);
});

it('can get value bets', function () {
    expect(football()->prediction()->valueBets())->toBeInstanceOf(Response::class);
});
