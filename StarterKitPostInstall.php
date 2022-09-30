<?php

class StarterKitPostInstall
{
    public $registerCommands = [
        \App\Console\Commands\AddPartial::class,
    ];

    public function handle($console)
    {
        if ($console->confirm('Do you like Australia?', false)) {
            $console->info('What about the spiders though?');
        }

        $console->call('statamic:peak:add-partial');

        $console->info('DONEEEEE!');
    }
}
