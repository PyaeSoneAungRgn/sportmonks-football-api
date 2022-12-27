<?php

it('can get all rounds', function () {
    expect(football()->round()->all())->toBeArray();
});

it('can get round by id', function () {
    expect(football()->round()->byId(
        id: 25181
    ))->toBeArray();
});

it('can get rounds by season id', function () {
    expect(football()->round()->bySeasonId(
        id: 718
    ))->toBeArray();
});

it('can get rounds by search by name', function () {
    expect(football()->round()->searchByName(
        search: '1'
    ))->toBeArray();
});
