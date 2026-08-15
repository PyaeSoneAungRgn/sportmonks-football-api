<?php

use Illuminate\Http\Client\Response;

it('can get my enrichments', function () {
    expect(football()->my()->enrichments())->toBeInstanceOf(Response::class);
});

it('can get my resources', function () {
    expect(football()->my()->resources())->toBeInstanceOf(Response::class);
});

it('can get my leagues', function () {
    expect(football()->my()->leagues())->toBeInstanceOf(Response::class);
});

it('can get my usage', function () {
    expect(football()->my()->usage())->toBeInstanceOf(Response::class);
});
