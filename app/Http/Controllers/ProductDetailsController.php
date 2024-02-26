<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailsController extends Controller
{
    //
    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }
}
