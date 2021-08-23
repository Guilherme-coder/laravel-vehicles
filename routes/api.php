<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Car\CarController;

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

Route::get('/', function() {
    return response()->json([
        [
            'id' => 1,
            'nome' => 'guilherme hendres'
        ],
        [
            'id' => 2,
            'nome' => 'joca jaburu'
        ],
        [
            'id' => 3,
            'nome' => 'balsa'
        ]
    ]);
});


// aqui são as rotas separadas

// Route::post('/cars', [CarController::class, 'store']);
// Route::get('/cars', [CarController::class, 'index']);
// Route::get('/cars/{id}', [CarController::class, 'show']);
// Route::put('/cars/{id}', [CarController::class, 'update']);
// Route::delete('/cars/{id}', [CarController::class, 'destroy']);

// Aqui é um recurso para unir as rotas ( o except() é usado para deixar de lado rotas que não são necessárias )

Route::resource('/cars', CarController::class)->except('create', 'edit');