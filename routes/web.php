<?php

use App\Http\Controllers\UserDetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/user-details', [UserDetailsController::class, 'index'])->name(
        'user-details.index'
    );
    Route::get('/user-details/create', [UserDetailsController::class, 'create'])
        ->name(
            'user-details.create'
        );
    Route::get('/user-details/{id}/edit', [UserDetailsController::class, 'edit']
    )->name('user-details.edit');
});
