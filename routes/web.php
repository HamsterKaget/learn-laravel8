<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WaifuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/waifu', [WaifuController::class, 'index']);
// Route::get('/waifu/{id}', [WaifuController::class, 'show']);
// Route::post('/waifu', [WaifuController::class, 'store']);
// Route::patch('/waifu/{id}', [WaifuController::class, 'update']);
// Route::delete('/waifu/{id}', [WaifuController::class, 'destroy']);

// New
Route::get('waifu/create', [WaifuController::class, 'create']);
Route::get('waifu/{id}/edit', [WaifuController::class, 'edit']);


