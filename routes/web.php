<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\crud;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['prefix'=>'offers'],function (){

    Route::get('create',[crud::class,'create']);
    Route::post('store',[crud::class,'store'])->name('offers.store');


});


require __DIR__.'/auth.php';
