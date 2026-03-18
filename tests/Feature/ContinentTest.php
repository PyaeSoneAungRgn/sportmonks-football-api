<?php

use Illuminate\Http\Client\Response;

it('can get all continents', function () {
    expect(football()->continent()->all())->toBeInstanceOf(Response::class);
});

it('can get continent by id', function () {
    expect(football()->continent()->byId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});
