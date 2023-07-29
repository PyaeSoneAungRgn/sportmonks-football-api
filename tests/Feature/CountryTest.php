<?php

it('can get all countries', function () {
    expect(football()->country()->all())->toBeArray();
});

it('can get country by id', function () {
    expect(football()->country()->byId(
        id: 1
    ))->toBeArray();
});

it('can search countries', function () {
    expect(football()->country()->search(
        name: 'bet'
    ))->toBeArray();
});
