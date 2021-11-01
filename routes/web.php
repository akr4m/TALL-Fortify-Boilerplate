<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Livewire\ApiTokenController;
use App\Http\Controllers\Livewire\UserProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware' => ['auth', 'verified']], function () {
    // User & Profile...
    Route::get('/user/profile', [UserProfileController::class, 'show'])
        ->name('profile.show');

    Route::get('/user/api-tokens', [ApiTokenController::class, 'index'])->name('api-tokens.index');
});
