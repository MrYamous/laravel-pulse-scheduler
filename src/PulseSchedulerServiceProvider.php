<?php

namespace Yamous\PulseScheduler;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yamous\PulseScheduler\Commands\PulseSchedulerCommand;

class PulseSchedulerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('pulse-scheduler')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_pulse_scheduler_table')
            ->hasCommand(PulseSchedulerCommand::class);
    }
}
