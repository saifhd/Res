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

//Event Routes
Route::get('all/event','EventController@index')->name('event');
Route::post('register/event','EventController@register')->name('event.register');

Route::get('all/event/form','EventController@formregister')->name('event.form');
Route::post('register/event/all','EventController@registerevent')->name('event.register.all');


//Newsletter
Route::post('store/newsletter','NewsletterController@storeEmail')->name('store.newsletter');
