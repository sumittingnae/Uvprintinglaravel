<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    //
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }
}
