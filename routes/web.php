<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\UsersSecondController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('first viev');
});

Route::get('users', [UsersSecondController::class, 'index']);
Route::post('users', [UsersSecondController::class, 'store']);
Route::get('users/{user}', [UsersSecondController::class, 'show']);
Route::put('users/{user}', [\UsersSecondController::class, 'update']);
Route::delete('users/{user}', [\UsersSecondController::class, 'destroy']);