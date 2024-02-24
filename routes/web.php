<?php

use App\Models\Fruit;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;


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
Route::get('home/{user}', function ($user) {
    return view('home', ['username' => $user]);
});
Route::get('/fruits',function(){
    return Fruit::all();
});

Route::get('/fruit',[FruitController::class,'getFruit']);