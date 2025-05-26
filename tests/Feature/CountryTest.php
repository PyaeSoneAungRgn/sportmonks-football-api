<?php

it('can get all countries', function () {
    expect(football()->country()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get country by id', function () {
    expect(football()->country()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can search countries', function () {
    expect(football()->country()->search(
        name: 'bet'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
