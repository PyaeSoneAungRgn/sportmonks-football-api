<?php

it('can get all commentaries', function () {
    expect(football()->commentary()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get commentaries by fixture id', function () {
    expect(football()->commentary()->byFixtureId(
        id: 10336114
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
