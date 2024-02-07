<?php

namespace AbdelhamidErrahmouni\ImageOptimizerCommand;

use AbdelhamidErrahmouni\ImageOptimizerCommand\Commands\OptimizerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ImageOptimizerCommandServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('image-optimizer-command')
            ->hasConfigFile()
            ->hasCommand(OptimizerCommand::class);
    }
}
