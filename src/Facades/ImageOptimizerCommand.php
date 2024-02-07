<?php

namespace AbdelhamidErrahmouni\ImageOptimizerCommand\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AbdelhamidErrahmouni\ImageOptimizerCommand\ImageOptimizerCommand
 */
class ImageOptimizerCommand extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AbdelhamidErrahmouni\ImageOptimizerCommand\ImageOptimizerCommand::class;
    }
}
