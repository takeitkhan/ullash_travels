<?php

Route::group([
     'prefix'=> '/',
     'namespace'=> 'App\Http\Controllers\Frontend',
     'as' => 'frontend_',
     //'middleware' => ['auth', 'customer']
], function(){

     Route::get('/', 'HomeController@index')->name('index');
     Route::any('{term_type}/{slug}', 'HomeController@page')->name('page');
     Route::get('category/{term_taxonomy_type}/{slug}', 'HomeController@category')->name('category');
     Route::post('/contact', 'HomeController@contact')->name('contact');
});


