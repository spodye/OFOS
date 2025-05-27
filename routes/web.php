<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Menu;
use App\Livewire\About;
use App\Livewire\Dashboard;
use \App\Livewire\Admin\ProductForm;

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


// Route::get('admin/products-create',ProductForm::class)->name('admin.products.create');
// Route::get('/admin',ProductForm::class)->name('admin.products.create');

