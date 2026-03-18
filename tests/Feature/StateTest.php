<?php

use Illuminate\Http\Client\Response;

it('can get all states', function () {
    expect(football()->state()->all())->toBeInstanceOf(Response::class);
});

it('can get state by id', function () {
    expect(football()->state()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});
