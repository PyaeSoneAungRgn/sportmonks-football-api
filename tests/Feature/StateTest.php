<?php

it('can get all states', function () {
    expect(football()->state()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get state by id', function () {
    expect(football()->state()->byId(
        id: 1
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
