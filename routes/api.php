<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('/categoria', CategoriaController::class);
// Route::apiResource('/video', VideoController::class);

Route::get('/categoria',[CategoriaController::class,'index'])->name('categoria.index');
Route::get('/categoria/{id}',[CategoriaController::class,'show'])->name('categoria.show');
Route::post('/categoria',[CategoriaController::class,'store'])->name('categoria.store');
Route::put('/categoria/{id}',[CategoriaController::class,'update'])->name('categoria.update');
Route::delete('/categoria/{id}',[CategoriaController::class,'destroy'])->name('categoria.destroy');

Route::get('/video',[VideoController::class,'index'])->name('video.index');
Route::get('/video/{id}',[VideoController::class,'show'])->name('video.show');
Route::post('/video',[VideoController::class,'store'])->name('video.store');
Route::put('/video/{id}',[VideoController::class,'update'])->name('video.update');
Route::delete('/video/{id}',[VideoController::class,'destroy'])->name('video.destroy');
Route::get('/video/pesquisar/{parametro}',[VideoController::class,'search'])->name('video.search');
