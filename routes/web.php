<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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

Route::get('/',[MyController::class, 'index']);
Route::get('/add',[MyController::class, 'Add']);
Route::post('/send',[MyController::class, 'AddCont']);
Route::post('/update',[MyController::class, 'update']);
Route::get('delete/{id}',[MyController:: class, 'delete'])->name('delete');
Route::get('edit/{id}',[MyController:: class, 'edit'])->name('edit');