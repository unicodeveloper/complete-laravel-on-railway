<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetDetailsFromConsole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-details-from-console';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("You are here!");
        $this->info("Reason to work at Railway");
    }
}
