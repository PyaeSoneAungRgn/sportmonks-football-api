<?php

use Illuminate\Http\Client\Response;

it('can get all rivals', function () {
    expect(football()->rival()->all())->toBeInstanceOf(Response::class);
});

it('can get rivals by team id', function () {
    expect(football()->rival()->byTeamId(
        id: 1
    ))->toBeInstanceOf(Response::class);
});
