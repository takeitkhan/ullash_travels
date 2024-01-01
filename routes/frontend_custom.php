<?php

Route::group([
    'prefix' => '/',
    'namespace' => 'App\Http\Controllers\Frontend',
    'as' => 'frontend_',
    //'middleware' => ['auth', 'customer']
], function () {
    Route::get('/search', 'TravelController@search')->name('search');
    Route::get('/book_now', 'TravelController@book_now')->name('book_now');
    Route::get('/cart', 'TravelController@cart')->name('cart');
    Route::post('/checkout', 'TravelController@checkout')->name('checkout');
    Route::post('/paynow', 'TravelController@paynow')->name('paynow');
});

?>
