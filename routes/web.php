<?php

//TODO get home page
Route::middleware('auth')->group(function() {
    Route::get('/', function () {
        return view('welcome');
    });
});

//All authenticated user can view these
Route::middleware('auth')->group(function(){
    Route::get('sim','SimController@index');
    Route::get('/sim/searchPatients', 'SimController@searchPatients');
    Route::get('/sim/patient/{patient}', 'SimController@showPatient');
    Route::post('/sim/patient/{patient}/med','SimController@medCheck');
});

//Instructor can view these Routers
Route::middleware('auth')->group(function (){
    Route::get('patients/{patient}/meds','MedPatientController@index');
    Route::patch('/patients/{patient}/med/{med}','MedPatientController@update');
    Route::delete('/patients/{patient}/med/{med}','MedPatientController@destroy');
    Route::get('/barcode', 'BarcodeController@index');
    Route::resource('patients','PatientsController');
    Route::resource('meds','MedsController');
});

//Admin can only view this
Route::middleware('auth')->group(function () {
    Route::resource('users', 'UserController');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
