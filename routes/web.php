<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Basic route
Route::get('/', function () {
    return view('home');
})->name('home');

// Named route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route dengan parameter opsional
Route::get('/contact/{name?}', function ($name = 'Guest') {
    return view('contact', ['name' => $name]);
})->name('contact');

// Route group dengan prefix
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('auth')->name('dashboard');
});

Route::get('/uts', [UtsController::class, 'index'])->name('uts.index');
Route::get('/uts/web', [UtsController::class, 'utsWeb'])->name('uts.web');
Route::get('/uts/database', [UtsController::class, 'utsDatabase'])->name('uts.database');



require __DIR__.'/auth.php';
