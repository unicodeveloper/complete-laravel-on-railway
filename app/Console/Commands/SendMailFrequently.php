<?php

namespace App\Console\Commands;

use App\Mail\TalkSubmitted;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMailFrequently extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email frequently';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('random@thisperson.com')->send(new TalkSubmitted);
    }
}
