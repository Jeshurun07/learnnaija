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

Route::get('/select', function () {
    return view('select');
});

Route::get('/newlogin', function () {
    return view('loginNew');
});
#Route::resource('select_index', ['uses' => 'QuesRetriever@questView']);

Route::post('select_index', 'QuesRetriever@questView');

Route::post('/landing','QuesRetriever@questView');//Having issues loading this 


Route::get('/quest',function(){
 return view('questions');
});

Auth::routes();

