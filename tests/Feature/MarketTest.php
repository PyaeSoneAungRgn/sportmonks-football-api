<?php

use Illuminate\Http\Client\Response;

it('can get all markets', function () {
    expect(football()->market()->all())->toBeInstanceOf(Response::class);
});

it('can get market by id', function () {
    expect(football()->market()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can search markets', function () {
    expect(football()->market()->search(
        name: 'bet'
    ))->toBeInstanceOf(Response::class);
});
