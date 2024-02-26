<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserregisterController;
// routes/api.php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDATAControllers;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ProductGetController;



use App\Http\Controllers\QuoteController;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Order;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/contact', [UserController::class, 'contact']);


Route::get('/messages', [MessageController::class, 'index']);


Route::post('/products', [ProductController::class, 'stores']);
// routes/api.php

// use App\Http\Controllers\ProductControllers;

Route::get('/products', [ProductDATAControllers::class, 'index']);

Route::get('/api/public/images/{filename}', function ($filename) {
    $path = public_path($filename);

    if (!file_exists($path)) {
        return response()->json(['error' => 'File not found'], 404);
    }

    return response()->download($path, null, [], 'inline');
})->where('filename', '.*');


Route::post('/register', [UserregisterController::class, 'register']);
Route::get('products/{name}', [ProductGetController::class, 'show']);
Route::get('order', [Order::class, 'index']);
// Route::get('/products/{productId}/images', [ProductControllers::class, 'getImage']);






Route::post('/submit-quote', [QuoteController::class, 'submitQuote']);

// Route::get('', 'ProductController@getImage');



// Route::get('/api/assets/images', [ProductControllers::class, 'show'])->where('filename', '.*');

