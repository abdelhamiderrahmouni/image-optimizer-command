<?php

namespace AbdelhamidErrahmouni\ImageOptimizerCommand\Commands;

use Illuminate\Console\Command;

class ImageOptimizerCommandCommand extends Command
{
    public $signature = 'image-optimizer-command';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
