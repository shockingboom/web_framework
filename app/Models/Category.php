<?php

// app/Models/Category.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model {
    protected $fillable = ['name','description'];
    public function products(){ return $this->hasMany(Product::class); }
}

// app/Models/Product.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model {
    protected $fillable = ['name','category_id']; // tambah kolom lain hanya jika ADA di tabel
    public function category(){ return $this->belongsTo(Category::class); }
}
