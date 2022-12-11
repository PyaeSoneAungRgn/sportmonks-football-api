<?php

namespace PyaeSoneAung\SportmonksFootballApi\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApiServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'PyaeSoneAung\\SportmonksFootballApi\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
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
