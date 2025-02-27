<?php

namespace Yamous\PulseScheduler\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yamous\PulseScheduler\PulseScheduler
 */
class PulseScheduler extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Yamous\PulseScheduler\PulseScheduler::class;
    }
}
