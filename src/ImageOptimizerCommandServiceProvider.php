<?php

namespace AbdelhamidErrahmouni\ImageOptimizerCommand;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AbdelhamidErrahmouni\ImageOptimizerCommand\Commands\ImageOptimizerCommandCommand;

class ImageOptimizerCommandServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('image-optimizer-command')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_image-optimizer-command_table')
            ->hasCommand(ImageOptimizerCommandCommand::class);
    }
}
