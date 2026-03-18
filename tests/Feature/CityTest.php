<?php

use Illuminate\Http\Client\Response;

it('can get all cities', function () {
    expect(football()->city()->all())->toBeInstanceOf(Response::class);
});

it('can get city by id', function () {
    expect(football()->city()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can search cities', function () {
    expect(football()->city()->search(
        name: 'bet'
    ))->toBeInstanceOf(Response::class);
});
