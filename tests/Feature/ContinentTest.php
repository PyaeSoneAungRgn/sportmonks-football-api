<?php

it('can get all continents', function () {
    expect(football()->continent()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get continent by id', function () {
    expect(football()->continent()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
