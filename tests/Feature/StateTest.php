<?php

it('can get all states', function () {
    expect(football()->state()->all())->toBeArray();
});

it('can get state by id', function () {
    expect(football()->state()->byId(
        id: 1
    ))->toBeArray();
});
