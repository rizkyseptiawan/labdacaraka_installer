<?php

namespace Labdacaraka\LabdacarakaInstaller;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Labdacaraka\LabdacarakaInstaller\Commands\LabdacarakaInstallerCommand;

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
