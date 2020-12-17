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

Route::get('/', function () {
    return view('welcome');//home page
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();//login

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('student','StudentdataController@index')->name('student');//enter student data
Route::post('student','StudentdataController@store')->name('student');




Route::get('teacherdata','TeacherdataController@index')->name('teacher');//enter teacher data
Route::post('teacherdata','TeacherdataController@store')->name('teacher');



Route::get('retrivestud','StudentdataController@index1')->name('retrivestud'); //retrivestudent


Route::get('studentedit/{id}','StudentdataController@edit'); // edit or update student data
Route::post('studentedit/{id}','StudentdataController@update');

Route::get('retrivestud/{id}','StudentdataController@destroy');//delete data


Route::get('retriveteach','TeacherdataController@index1')->name('retriveteach');//retrive student
	
Route::get('teacheredit/{id}','TeacherdataController@edit');// edit or update student data
Route::post('teacheredit/{id}','TeacherdataController@update');

Route::get('retriveteach/{id}','TeacherdataController@destroy');


Route::get('/sendemail', 'SendEmailController@index')->name('sendemail');     //contact us
Route::post('/sendemail/send', 'SendEmailController@send')->name('sendemail');  //contactus


Route::get('retrivefee','StudentdataController@index2')->name('retrivefee'); //fee related data



















