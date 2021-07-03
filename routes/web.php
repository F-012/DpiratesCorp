<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::get('/admin', [UserController::class,'index']);
Route::get('/edit/{id}', [UserController::class,'edit']);
Route::post('/register', [UserController::class,'store']);
Route::put('/edit/update/{id}', [UserController::class,'update']);
Route::delete('/delete/{id}', [UserController::class,'destroy']);