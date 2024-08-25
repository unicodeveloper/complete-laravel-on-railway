<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TalkController;
use App\Jobs\AddDatatoDB;
use App\Jobs\SendNotification;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('talks/create', [TalkController::class, 'create'])->name('talks.create');
    Route::post('talks', [TalkController::class, 'store'])->name('talks.store');

    
});

Route::get('/jobs', function() {

    /** 
     * Test Jobs are working...
     * dispatch SendNotification and AddDataToDB Job
     */

    echo "Your jobs are being dispatching....";
    Bus::chain([
        new AddDatatoDB,
        new SendNotification
    ])->dispatch();
});

Route::get('/cache', function() {

    /**
     * Testing your cache infra is working...
     */
    echo "Storing inside the redis cache...\n";
    Cache::store('redis')->put('bar', 'baz', 600); // 10 Minutes
    Cache::put('paas', 'railway'); // store indefinitely

    $value = Cache::get('bar');
    $deployment = Cache::get('paas');
    echo "This is the result from the cache for bar...{$value} \n";
    echo "This is the result from the cache for paas...{$deployment}";
    
});

require __DIR__.'/auth.php';
