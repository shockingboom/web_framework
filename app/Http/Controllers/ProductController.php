<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // /product/{num}
    public function index(int $num)
    {
        // bebas: tambahkan angka berapa pun, mis. +7
        $result = $num + 7;

        return view('products.index', [
            'value' => $result,
            'original' => $num,
        ]);
    }
}
