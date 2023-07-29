<?php

it('can get all markets', function () {
    expect(football()->market()->all())->toBeArray();
});

it('can get market by id', function () {
    expect(football()->market()->byId(
        id: 1
    ))->toBeArray();
});

it('can search markets', function () {
    expect(football()->market()->search(
        name: 'bet'
    ))->toBeArray();
});
