<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
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
    return view('index', ['title' => 'Home']);
});

Route::get('/designs', [DesignController::class, 'indexAll']);
Route::get('/design/{design}', [DesignController::class, 'show']);
Route::get('/create-design', [DesignController::class, 'create'], ['middleware' => 'auth']);
Route::post('/create-design', [DesignController::class, 'store'], ['middleware' => 'auth']);
Route::get('/edit-design/{design}', [DesignController::class, 'edit'], ['middleware' => 'auth']);
Route::post('/edit-design/{design}', [DesignController::class, 'update'], ['middleware' => 'auth']);
Route::delete('/delete-design/{design}', [DesignController::class, 'destroy'], ['middleware' => 'auth']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'], ['middleware' => 'auth']);

Route::get('/profile', [DesignController::class, 'index'], ['middleware' => 'auth']);

Route::get('/transactions', [TransactionController::class, 'index'], ['middleware' => 'auth']);
Route::get('/create-transaction/{design}', [TransactionController::class, 'create'], ['middleware' => 'auth']);
Route::get('/pay-transaction/{transaction}', [TransactionController::class, 'pay'], ['middleware' => 'auth']);
Route::delete('/delete-transaction/{transaction}', [TransactionController::class, 'destroy'], ['middleware' => 'auth']);