<?php

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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth','role:admin'])->name('admin.')->prefix('admin')->group(function(){

});
Route::middleware(['auth','role:nurse'])->name('nurse.')->prefix('nurse')->group(function(){
Route::get('/',[\App\Http\Controllers\nurse\HomeController::class,'index']);
});
