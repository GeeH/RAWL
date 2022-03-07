<?php

namespace App\Console\Commands;

use App\Events\SomethingHappenedEvent;
use Illuminate\Console\Command;

class SomethingHappenedCommand extends Command
{
    protected $signature = 'something:happened';
    protected $description = 'Trigger example event from CLI';

    public function handle(): int
    {
        SomethingHappenedEvent::broadcast();
        return self::SUCCESS;
    }
}
