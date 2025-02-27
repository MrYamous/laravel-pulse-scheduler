<?php

namespace Yamous\PulseScheduler\Commands;

use Illuminate\Console\Command;

class PulseSchedulerCommand extends Command
{
    public $signature = 'pulse-scheduler';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
