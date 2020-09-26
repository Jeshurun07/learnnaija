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


/*Route::get('/select', function () {//Controls the top nav
    return view('select');
});*/

Route::get('/select', function () {//Controls the top nav
    return view('select1');
});
Route::match(['get','post'],'/landing', 'QuesRetriever@questView');


Route::get('/score', 'QuesRetriever@resultView');

Route::post('/select', 'QuesRetriever@deleteSession');

Auth::routes();

