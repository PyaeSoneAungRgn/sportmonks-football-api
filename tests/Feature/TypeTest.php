<?php

use Illuminate\Http\Client\Response;

it('can get all types', function () {
    expect(football()->type()->all())->toBeInstanceOf(Response::class);
});

it('can get type by id', function () {
    expect(football()->type()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});

it('can get type by entity', function () {
    expect(football()->type()->byEntity())->toBeInstanceOf(Response::class);
});
