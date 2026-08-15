<?php

use Illuminate\Http\Client\Response;

it('can get expected by team', function () {
    expect(football()->expected()->byTeam())->toBeInstanceOf(Response::class);
});

it('can get expected by player', function () {
    expect(football()->expected()->byPlayer())->toBeInstanceOf(Response::class);
});
