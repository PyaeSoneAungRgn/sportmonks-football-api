<?php

it('can get all seasons', function () {
    expect(football()->season()->all())->toBeArray();
});

it('can get season by id', function () {
    expect(football()->season()->byId(
        id: 718
    ))->toBeArray();
});
