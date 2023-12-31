<?php

namespace Soap\FilamentJet;

use Soap\FilamentJet\Commands\FilamentJetCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentJetServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-jet')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-jet_table')
            ->hasCommand(FilamentJetCommand::class);
    }
}
