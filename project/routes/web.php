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
    return view('sidebar');
});
Route::get('/view', function () {
    return view('sidebar');
});
Route::get('full-calender', 'App\Http\Controllers\FullCalenderController@index');

Route::post('full-calender/action', 'App\Http\Controllers\FullCalenderController@action');

?>
