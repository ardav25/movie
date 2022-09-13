<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('beranda');
Route::get('/now-playing', [FrontController::class, 'nowPlaying'])->name('now-playing');
Route::get('/popular', [FrontController::class, 'popular'])->name('popular');
Route::get('/top-rated', [FrontController::class, 'topRated'])->name('top-rated');
Route::get('/up-coming', [FrontController::class, 'upComing'])->name('up-coming');
Route::get('/detail/{id}', [FrontController::class, 'detail'])->name('detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
