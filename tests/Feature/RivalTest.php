<?php

it('can get all rivals', function () {
    expect(football()->rival()->all())->toBeArray();
});

it('can get rivals by team id', function () {
    expect(football()->rival()->byTeamId(
        id: 1
    ))->toBeArray();
});
