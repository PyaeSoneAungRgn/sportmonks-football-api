<?php

it('can get all cities', function () {
    expect(football()->city()->all())->toBeArray();
});

it('can get city by id', function () {
    expect(football()->city()->byId(
        id: 1
    ))->toBeArray();
});

it('can search cities', function () {
    expect(football()->city()->search(
        name: 'bet'
    ))->toBeArray();
});
