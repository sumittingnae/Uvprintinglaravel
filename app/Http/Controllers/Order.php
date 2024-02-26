<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qutotion;

class Order extends Controller
{
    //
    public function index()
    {
        $quto =Qutotion ::all();
        return response()->json($quto);
    }
}
