<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:pre-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle($event): void
    {
        if (app()->environment(['production'])) {
            if ($event->command == 'migrate:fresh') {
                $this->output = $event->output;
                $this->info('Nope. Not running.');
                die();
            }
        }
    }
}
