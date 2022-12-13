<?php

namespace PyaeSoneAung\SportmonksFootballApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SportmonksFootballApiServiceProvider extends PackageServiceProvider
{
    public function boot()
    {
        $this->app->singleton(
            abstract: SportmonksFootballApi::class,
            concrete: fn () => new SportmonksFootballApi(
                baseUrl: config('sportmonks-football-api.base_url'),
                apiToken: config('sportmonks-football-api.api_token'),
                timezone: config('sportmonks-football-api.timezone')
            ),
        );
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('sportmonks-football-api')
            ->hasConfigFile();
    }
}
