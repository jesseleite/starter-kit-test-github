<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Statamic\Console\RunsInPlease;

class AddPartial extends Command
{
    use RunsInPlease;

    protected $name = 'statamic:peak:add-partial';

    public function handle()
    {
        $check = $this->confirm('Would you like to add the partial?', true);

        $this->info('ADDING PARTIAL!');

        $this->info(app(\App\JasonService::class)->message());
    }
}
