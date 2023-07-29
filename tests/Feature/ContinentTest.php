<?php

it('can get all continents', function () {
    expect(football()->continent()->all())->toBeArray();
});

it('can get continent by id', function () {
    expect(football()->continent()->byId(
        id: 1
    ))->toBeArray();
});
