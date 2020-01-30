<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Article
Route::post('Contactos', 'Contactoscontroller@Createcontact')->name('Createcontact');
Route::get('Contactos', 'Contactoscontroller@Getallcontacts')->name('Getallcontacts');
Route::PUT('Contactos', 'Contactoscontroller@UpdateContact')->name('UpdateContact');
Route::delete('Contactos', 'Contactoscontroller@DeleteContact')->name('DeleteContact');