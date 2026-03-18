<?php

use Illuminate\Http\Client\Response;

it('can get topscorers by stage id', function () {
    expect(football()->topscorer()->byStageId(
        id: 1183
    ))->toBeInstanceOf(Response::class);
});

it('can get topscorers by season id', function () {
    expect(football()->topscorer()->bySeasonId(
        id: 718
    ))->toBeInstanceOf(Response::class);
});
