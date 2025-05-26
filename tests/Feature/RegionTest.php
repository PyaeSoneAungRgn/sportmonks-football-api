<?php

it('can get all regions', function () {
    expect(football()->region()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get region by id', function () {
    expect(football()->region()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can search regions', function () {
    expect(football()->region()->search(
        name: 'bet'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
