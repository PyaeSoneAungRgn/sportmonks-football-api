<?php

it('can get all rivals', function () {
    expect(football()->rival()->all())->toBeArray();
});
