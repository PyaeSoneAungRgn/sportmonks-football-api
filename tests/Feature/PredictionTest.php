<?php

it('can get probabilities', function () {
    expect(football()->prediction()->probabilities())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get probabilities by league id', function () {
    expect(football()->prediction()->probabilitiesByLeagueId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get probabilities by fixture id', function () {
    expect(football()->prediction()->probabilitiesByFixtureId(
        id: 10336114
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get value bets', function () {
    expect(football()->prediction()->valueBets())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
