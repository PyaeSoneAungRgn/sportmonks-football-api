<?php

use Illuminate\Http\Client\Response;

it('can get all supported time zones', function () {
    expect(football()->timezone()->all())->toBeInstanceOf(Response::class);
});
