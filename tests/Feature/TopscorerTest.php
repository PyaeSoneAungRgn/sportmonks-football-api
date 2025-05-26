<?php

it('can get topscorers by stage id', function () {
    expect(football()->topscorer()->byStageId(
        id: 1183
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});

it('can get topscorers by season id', function () {
    expect(football()->topscorer()->bySeasonId(
        id: 718
    ))->toBeInstanceOf(\Illuminate\Http\Client\Response::class);
});
