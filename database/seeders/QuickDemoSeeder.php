<?php

// database/seeders/QuickDemoSeeder.php
// database/seeders/QuickDemoSeeder.php
use Illuminate\Support\Facades\Schema;
// ...
$cat = \App\Models\Category::firstOrCreate(
    ['name' => 'Umum'],
    ['description' => 'Kategori umum']
);

// HANYA seed product kalau tabelnya ada
if (Schema::hasTable('products')) {
    \App\Models\Product::firstOrCreate(
        ['name' => 'Produk Demo'], // jangan pakai env()/config() di sini
        ['category_id' => $cat->id]
    );
}

