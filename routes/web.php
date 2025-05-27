<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Menu;
use App\Livewire\About;
use App\Livewire\Dashboard;

Route::view('/', 'welcome');
Route::get('/select', Menu::class)->name('select');
Route::get('/about', About::class)->name('about');

Route::get('/dashboard',Dashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
