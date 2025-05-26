<?php

it('can get all rivals', function () {
    expect(football()->rival()->all())->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
