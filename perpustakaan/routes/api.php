<?php

use App\Http\Controllers\PustakawanController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Route untuk menampilkan data pustakawan
Route::get('/pustakawan', [PustakawanController::class, 'index']);
//add resources pustakawan
Route::post('/pustakawan', [PustakawanController::class, 'store']);
//get detail resource
Route::get('/pustakawan/{id}', [PustakawanController::class, 'show']);
// update pustakawan
Route::put('/pustakawan/{id}', [PustakawanController::class, 'update']);
//===================================//
// Get all Resources
Route::get('/books', [BookController::class, 'index']);

// add resources

Route::post('/books', [BookController::class, 'store']);

// all detail resources
Route::get('/books/{id}', [BookController::class, 'show']);
//Edit Resource
Route::put('/books/{id}', [BookController::class, 'update']);
// delete Resurce
Route::delete('/books/{id}', [BookController::class, 'destroy']);