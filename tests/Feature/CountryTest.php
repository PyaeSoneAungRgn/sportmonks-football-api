<?php

use Illuminate\Http\Client\Response;

it('can get all countries', function () {
    expect(football()->country()->all())->toBeInstanceOf(Response::class);
});

it('can get country by id', function () {
    expect(football()->country()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can search countries', function () {
    expect(football()->country()->search(
        name: 'bet'
    ))->toBeInstanceOf(Response::class);
});
