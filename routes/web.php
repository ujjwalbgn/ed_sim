<?php

//TODO get home page
Route::middleware('auth')->group(function() {
    Route::get('/', function () {
        return 'WELCOME EDSIME ------HOME PAGE';
    });
});


Route::middleware('auth')->group(function(){
    Route::get('sim','SimController@index');
    Route::get('/sim/searchPatients', 'SimController@searchPatients');
    Route::get('/sim/patient/{patient}', 'SimController@showPatient');
    Route::post('/sim/patient/{patient}/med','SimController@medCheck');
});

Route::middleware('auth','instructor'and'admin')->group(function (){
    Route::get('patients/{patient}/meds','MedPatientController@index');
    Route::patch('/patients/{patient}/med/{med}','MedPatientController@update');
    Route::delete('/patients/{patient}/med/{med}','MedPatientController@destroy');
    Route::get('/barcode', 'BarcodeController@index');
    Route::resource('patients','PatientsController');
    Route::resource('meds','MedsController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
