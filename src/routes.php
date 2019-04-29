<?php 


Route::group(['namespace' => 'Neher\Inquiry\Http\Controllers', 'middleware' => 'web'], function() {
	Route::resource('inquries', 'InquriesController');
});
