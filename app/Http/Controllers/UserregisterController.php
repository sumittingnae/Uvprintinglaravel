<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class UserregisterController extends Controller
{
    //

    function register(Request $request)
    {
         $user = Register::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password'))
            
        ]);
        return response()->json(['user' => $user, 'message' => 'User registered successfully']);

    }
    }

    

