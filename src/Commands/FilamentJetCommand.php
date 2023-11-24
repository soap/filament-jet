<?php

namespace Soap\FilamentJet\Commands;

use Illuminate\Console\Command;

class FilamentJetCommand extends Command
{
    public $signature = 'filament-jet';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
