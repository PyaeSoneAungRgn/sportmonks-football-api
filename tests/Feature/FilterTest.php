<?php

use Illuminate\Http\Client\Response;

it('can get all entity filters', function () {
    expect(football()->filter()->all())->toBeInstanceOf(Response::class);
});
