<?php

use App\Http\Controllers\DatasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/tes', function () {
//     return view('welcome');
// });

Route::get('/', [DatasiswaController::class, 'index']);
Route::get('/input', [DatasiswaController::class, 'create']);
Route::post('/storedata', [DatasiswaController::class, 'store']);
Route::get('/delete/{id}', [DatasiswaController::class, 'destroy']);
Route::get('/update/{id}', [DatasiswaController::class, 'edit']);
Route::post('/updatedata/{id}', [DatasiswaController::class, 'update']);