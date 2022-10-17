<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JugadorController;
use App\Http\Controllers\API\JuezController;

//---------rutas jugador
Route::get('/index/{id}', [JugadorController::class,'index']);
Route::post('/add-jugador', [JugadorController::class,'store']);
Route::get('/listar-jugador',[JugadorController::class,'show']);
Route::put('/editar-jugador/{id}', [JugadorController::class,'update']);
Route::delete('/eliminar-jugador/{id}', [JugadorController::class,'destroy']);

//---------rutas juez
Route::get('/index', [JuezController::class,'index']);
Route::post('/add-juez', [JuezController::class,'store']);
Route::get('/listar-juez/{id}', [JuezController::class,'show']);
Route::put('/editar-juez/{id}', [JuezController::class,'update']);
Route::delete('/eliminar-juez/{id}', [JuezController::class,'destroy']);


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
Route::middleware('auth:api')->get('/user',function (Request $request) {
    return $request->user();
});