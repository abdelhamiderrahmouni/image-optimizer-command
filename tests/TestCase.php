<?php

namespace AbdelhamidErrahmouni\ImageOptimizerCommand\Tests;

use AbdelhamidErrahmouni\ImageOptimizerCommand\ImageOptimizerCommandServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'AbdelhamidErrahmouni\\ImageOptimizerCommand\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ImageOptimizerCommandServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_image-optimizer-command_table.php.stub';
        $migration->up();
        */
    }
}
