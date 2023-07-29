<?php

it('can get all types', function () {
    expect(football()->type()->all())->toBeArray();
});

it('can get type by id', function () {
    expect(football()->type()->byId(
        id: 1
    ))->toBeArray();
});

it('can get type by entity', function () {
    expect(football()->type()->byEntity())->toBeArray();
});
