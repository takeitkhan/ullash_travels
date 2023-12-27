<?php

//Products
Route::get('product/all', 'ProductController@index')->name('product_index');
Route::get('product/create', 'ProductController@form')->name('product_create');
Route::post('product/store', 'ProductController@store')->name('product_store');
Route::get('product/{id}', 'ProductController@form')->name('product_edit');
Route::post('product/update', 'ProductController@update')->name('product_update');
Route::get('product/{id}/delete', 'ProductController@destroy')->name('product_delete');
Route::get('product-category/{id}/product', 'ProductController@index')->name('category_by_product');
Route::get('product-brand/{brandId}/product', 'ProductController@index')->name('brand_by_product');

//Product category
Route::get('product-category/all', 'ProductCategoryController@index')->name('product_category_index');
Route::post('product-category/store', 'ProductCategoryController@store')->name('product_category_store');
Route::get('product-category/{id}', 'ProductCategoryController@index')->name('product_category_edit');
Route::post('product-category/update', 'ProductCategoryController@update')->name('product_category_update');
Route::get('product-category/{id}/delete', 'ProductCategoryController@destroy')->name('product_category_delete');
Route::get('ajaxget/product-category/{id}', 'ProductCategoryController@ajaxCategory')->name('product_category_ajax_get');

/*
//Product Order
Route::get('manage/order', 'ProductOrderController@index')->name('product_order_index');
Route::get('order/create', 'ProductOrderController@create')->name('product_order_create');
Route::get('order/store', 'ProductOrderController@store')->name('product_order_store');
Route::get('order/view/{id}', 'ProductOrderController@view')->name('product_order_view');
Route::get('order/delete/{id}', 'ProductOrderController@destroy')->name('product_order_delete');
Route::get('manage/order/filter', 'ProductOrderController@index')->name('product_order_filter');

//Status Chage
Route::post('order/payment-status/', 'ProductOrderController@changePaymentStatus')->name('order_change_payment_status');
Route::post('order/delivery-status/', 'ProductOrderController@changeDeliveryStatus')->name('order_change_delivery_status');
*/
/*
//Brand
Route::get('product-brand/all', 'ProductBrandController@index')->name('product_brand_index');
Route::post('product-brand/store', 'ProductBrandController@store')->name('product_brand_store');
Route::get('product-brand/{id}', 'ProductBrandController@index')->name('product_brand_edit');
Route::post('product-brand/update', 'ProductBrandController@update')->name('product_brand_update');
Route::get('product-brand/{id}/delete', 'ProductBrandController@destroy')->name('product_brand_delete');

//Coupon
Route::get('coupon/all', 'CouponController@index')->name('product_coupon_index');
Route::post('coupon/store', 'CouponController@store')->name('product_coupon_store');
Route::get('coupon/{id}', 'CouponController@index')->name('product_coupon_edit');
Route::post('coupon/update', 'CouponController@update')->name('product_coupon_update');
Route::get('coupon/{id}/delete', 'CouponController@destroy')->name('product_coupon_delete');
*/
//Attribute
Route::get('attribute/all', 'AttributeController@index')->name('product_attribute_index');
Route::post('attribute/store', 'AttributeController@store')->name('product_attribute_store');
Route::get('attribute/{id}', 'AttributeController@index')->name('product_attribute_edit');
Route::post('attribute/update', 'AttributeController@update')->name('product_attribute_update');
Route::get('attribute/{id}/delete', 'AttributeController@destroy')->name('product_attribute_delete');

//Attribute
Route::get('attribute-value/all', 'AttributeController@valueindex')->name('product_attribute_value_index');
Route::post('attribute-value/store', 'AttributeController@valuestore')->name('product_attribute_value_store');
Route::get('attribute-value/{id}', 'AttributeController@valueindex')->name('product_attribute_value_edit');
Route::post('attribute-value/update', 'AttributeController@valueupdate')->name('product_attribute_value_update');
Route::get('attribute-value/{id}/delete', 'AttributeController@valuedestroy')->name('product_attribute_value_delete');
