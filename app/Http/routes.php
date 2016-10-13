<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('report', 'PdfController@generate');

Route::get('test', function() {
	$pdf = App::make('snappy.pdf.wrapper');
	$pdf->loadHTML('<h1>Test</h1>');
	
	return $pdf->inline();
});
