<?php

use Illuminate\Http\Client\Response;

it('can get all rivals', function () {
    expect(football()->rival()->all())->toBeInstanceOf(Response::class);
});
