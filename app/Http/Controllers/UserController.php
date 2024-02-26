<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function contact(Request $request){
        $user=User::create([
             'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'address' => $request->input('address'),
            'message' => $request->input('message'),
        ]);
        return response()->json(['user' => $user, 'message' => 'User registered successfully']);

    }
}
