<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $r){

        $product = Product::create($r->except('token'));

        return response()->json(['data' => $product]);

    }
}
