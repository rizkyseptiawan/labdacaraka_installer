<?php

namespace Labdacaraka\LabdacarakaInstaller;

use Labdacaraka\LabdacarakaInstaller\Commands\LabdacarakaInstallerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LabdacarakaInstallerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('labdacaraka-installer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_labdacaraka-installer_table')
            ->hasCommand(LabdacarakaInstallerCommand::class);
    }
}
