<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qutotion; // Import the Quote model if you have one

class QuoteController extends Controller
{
    public function submitQuote(Request $request)
    {
        // Validate the incoming request data
        $quote = Qutotion::create([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            //'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'wpb' => $request->input('wpb'),
            'size' => $request->input('size'),
            'material' => $request->input('material'),
            'qty' => $request->input('qty'),
 ]);
        return response()->json(['qutotion' => $quote, 'message' => 'User registered successfully']);

    

        
    }

}
