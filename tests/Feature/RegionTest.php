<?php

use Illuminate\Http\Client\Response;

it('can get all regions', function () {
    expect(football()->region()->all())->toBeInstanceOf(Response::class);
});

it('can get region by id', function () {
    expect(football()->region()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can search regions', function () {
    expect(football()->region()->search(
        name: 'bet'
    ))->toBeInstanceOf(Response::class);
});
