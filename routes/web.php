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

Route::get('/', function () {return view('welcome');});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['reset' => false,'verify' => false]);

Route::resource('users', 'UserController')->only(['index', 'show']);

Route::post('/tickets/{id}/pedirTicket', 'TicketController@pedirTicket')->name('tickets.pedirTicket');
Route::group(['middleware' => 'isAdmin'], function(){
    Route::resource('tickets', 'TicketController', ['except' => ['index']]);
});
