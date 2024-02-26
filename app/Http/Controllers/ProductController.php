<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function stores(Request $request) // corrected method name to 'store'
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // corrected validation rule
        ]);

        // Move the image to the storage folder
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        // Create a new product instance
        $product = new Product([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category' => $request->category,
            'image' => '/images/' . $imageName, // Store the image path in the database
        ]);

        // Save the product
        $product->save();

        // Return a JSON response with the saved product data
        return response()->json([
            'product' => $product,
            'message' => 'Product created successfully',
        ]);
    }
}
