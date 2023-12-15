<?php

namespace Traineratwot\MoreInputsColumn\Commands;

use Illuminate\Console\Command;

class MoreInputsColumnCommand extends Command
{
    public $signature = 'more-inputs-column';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
