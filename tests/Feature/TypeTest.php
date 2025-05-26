<?php

it('can get all types', function () {
    expect(football()->type()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get type by id', function () {
    expect(football()->type()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get type by entity', function () {
    expect(football()->type()->byEntity())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
