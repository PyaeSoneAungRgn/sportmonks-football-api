<?php

it('can get probabilities', function () {
    expect(football()->prediction()->probabilities())->toBeArray();
});

it('can get probabilities by league id', function () {
    expect(football()->prediction()->probabilitiesByLeagueId(
        id: 1
    ))->toBeArray();
});

it('can get probabilities by fixture id', function () {
    expect(football()->prediction()->probabilitiesByFixtureId(
        id: 10336114
    ))->toBeArray();
});

it('can get value bets', function () {
    expect(football()->prediction()->valueBets())->toBeArray();
});

it('can get value bets by fixture id', function () {
    expect(football()->prediction()->valueBets(
        id: 10336114
    ))->toBeArray();
});
