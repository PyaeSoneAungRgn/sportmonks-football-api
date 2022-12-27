<?php

it('can get topscorers by stage id', function () {
    expect(football()->topscorer()->byStageId(
        id: 1183
    ))->toBeArray();
});

it('can get topscorers by season id', function () {
    expect(football()->topscorer()->bySeasonId(
        id: 718
    ))->toBeArray();
});
