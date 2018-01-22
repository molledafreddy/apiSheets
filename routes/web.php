<?php

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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

//Route::name('sheets.index')->get('sheets/index', 'IndexController');
//Route::name('sheets.show')->get('/{spreadsheet_id}', 'ShowController');
//Route::name('sheets.sheet')->get('/{spreadsheet_id}/sheet/{sheet_id}', 'SheetController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::name('login')->get('login', 'LoginController@redirect');
Route::get('callback', 'LoginController@callback');
Route::name('logout')->post('logout', 'LoginController@logout');

//Route::view('/', 'welcome');
Route::middleware('auth')->prefix('home')->group(function () {


});
		Route::get('/get-sheet', 'SheetController@getSheets')->name('sheets');
    