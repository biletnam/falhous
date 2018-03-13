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
Route::get('/', [
    'uses' => 'HomePageController@welcome',
    'as' => 'home'
]);

/*Route::get('/welcome', [
    'uses' => 'HomePageController@welcome',
    'as' => 'home'
]);*/

Route::post('/success', [
    'uses' => 'HomePageController@addTask'
]);

Route::get('/showReport', [
    'uses' => 'HomePageController@generatePDF',
    'as' => 'report'
]);

Route::get('/pdf',[
    'uses' => 'HomePageController@pdf',
    'as' => 'pdf'
]);



