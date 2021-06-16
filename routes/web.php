<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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

Route::view('admin', 'admins');

Route::post('adduser', [AdminController::class, 'addadmin']);


Route::get('fetch', [adminController::class, 'getdata']);

Route::get('delete/{id}',[adminController::class,'delete']);

Route::get('edit/{id}', [adminController::class, 'edit']);

Route::post('/update', [adminController::class, 'update']);