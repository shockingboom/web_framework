<?php

// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    // SESUAIKAN kolom sesuai tabel kamu
    protected $fillable = ['name','category_id']; // tambahkan kolom lain yang memang ada

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

