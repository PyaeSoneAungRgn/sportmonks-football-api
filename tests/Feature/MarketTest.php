<?php

it('can get all markets', function () {
    expect(football()->market()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get market by id', function () {
    expect(football()->market()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can search markets', function () {
    expect(football()->market()->search(
        name: 'bet'
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
