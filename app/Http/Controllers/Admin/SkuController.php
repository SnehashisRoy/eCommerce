<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sku;
use Illuminate\Http\Request;

class SkuController extends Controller
{
    public function store(Request $r){

        $sku = Sku::create($r->all());

        return response()->json(['data' => $sku ]);

    }
}
