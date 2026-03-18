<?php

use Illuminate\Http\Client\Response;

it('can get all commentaries', function () {
    expect(football()->commentary()->all())->toBeInstanceOf(Response::class);
});

it('can get commentaries by fixture id', function () {
    expect(football()->commentary()->byFixtureId(
        id: 10336114
    ))->toBeInstanceOf(Response::class);
});
