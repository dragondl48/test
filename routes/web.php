<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
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
    $html='<h1>Dao Hong Phuc 2</h1>';
    return $html;
});

// Route::get('/hieu',[Controller::class, 'index']);
Route::get('/hieu', 'App\Http\SampleController@index');