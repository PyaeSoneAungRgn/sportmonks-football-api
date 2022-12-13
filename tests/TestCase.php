<?php

namespace PyaeSoneAung\SportmonksFootballApi\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApiServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            SportmonksFootballApiServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
