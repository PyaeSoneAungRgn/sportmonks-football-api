<?php

it('can get all regions', function () {
    expect(football()->region()->all())->toBeArray();
});

it('can get region by id', function () {
    expect(football()->region()->byId(
        id: 1
    ))->toBeArray();
});

it('can search regions', function () {
    expect(football()->region()->search(
        name: 'bet'
    ))->toBeArray();
});
