<?php

namespace App\Jobs;

use App\Models\Talk;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AddDatatoDB implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        User::factory()
        ->has(Talk::factory()->count(5))
        ->create([
            'name' => 'Jemine Eyinmisan',
            'email' => 'jemine@gmail.com',
        ]);
    }
}
