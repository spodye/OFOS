<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Menu;
use App\Livewire\About;
use App\Livewire\Dashboard;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\Orders as AdminOrders;
use App\Livewire\Admin\ProductForm as PF;
use App\Livewire\Checkout;



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

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/orders',AdminOrders::class)->name('admin.orders');
    Route::get('/admin/products/create', PF::class)->name('admin.products.create');
    Route::get('/admin/products/edit/{id}', PF::class, 'edit')->name('admin.products.edit');  
});


Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', Checkout::class)->name('checkout');
});


// Route::get('admin/products-create',ProductForm::class)->name('admin.products.create');
// Route::get('/admin',ProductForm::class)->name('admin.products.create');

