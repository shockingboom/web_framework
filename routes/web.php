<?php

use Illuminate\Support\Facades\Route;

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

// pertemuan 2

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Fajar Abdullah!';
});

Route::get('/user/{id}', function ($id) {
    return "User ID ". $id;
});

Route::get('/nama/{name?}', function ($name = 'Guest') {
    return "Hello, i'm ". $name;
});

Route::get('/profile', function () {
    return 'Ini adalah halaman profil.';
})->name('profile');

//buat manggil ke suatu route
Route::get('/redirect-to-profile', function () {
    return redirect()->route('profile');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/profile', function () {
        return 'Admin Profile';
    });
});

//verifikasi atau ngecek sesuatu
Route::get('/dashboard', function () {
    return 'Selamat datang di dashboard.';
})->middleware('auth');

Route::resource('posts','PostController');

//Tugas Pertemuan 2

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact/{name?}', function ($name = 'Guest') {
    return view('contact', ['name' => $name]);
})->name('contact');

Route::prefix('damin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});