<?php
//'middleware' => ['admin']
Route::group([
    'prefix'=> 'admin/',
    'namespace'=> 'App\Http\Controllers\Admin',
    'as' => 'admin_',
    'middleware' => ['auth', 'user']
], function(){

    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('adminMenu','DashboardController@menu')->name('adminMenu');

    //Media
    Route::get('media/all', 'MediaController@index')->name('media_index');
    Route::post('media/store', 'MediaController@store')->name('media_store');
    Route::post('media/store/noajax', 'MediaController@storeMedia')->name('media_store_noajax');
    Route::get('media/get', 'MediaController@getMedia')->name('media_get');
    Route::get('media/delete/{id}', 'MediaController@destroy')->name('media_delete');


    /**
     * Dynamic Post Type && Term Taxonomy
     */
    //Post
    Route::get('term_type={type}/all', 'PostController@index')->name('term_type_index');
    Route::get('term_type={type}/create', 'PostController@form')->name('term_type_form');
    Route::post('term_type={type}/store', 'PostController@store')->name('term_type_store');
    Route::get('term_type={type}/edit/{id}', 'PostController@form')->name('term_type_edit');
    Route::post('term_type={type}/update', 'PostController@update')->name('term_type_update');
    Route::get('term_type={type}/delete/{id}', 'PostController@destroy')->name('term_type_delete');
    Route::get('term_type={type}/all/taxonomy={taxonomy}/category={categoryid}', 'PostController@index')->name('term_type_index_by_category');
    /** Custom field Data Store */
    Route::post('term_type={type}/field/store', 'PostController@customFieldDataStore')->name('term_type_custom_field_data_store');

    //Categories
    Route::get('term_type={type}/taxonomy={taxonomy}/all', 'CategoryController@index')->name('taxonomy_type_index');
    Route::post('term_type={type}/taxonomy={taxonomy}/store', 'CategoryController@store')->name('taxonomy_type_store');
    Route::get('term_type={type}/taxonomy={taxonomy}/edit/{id}', 'CategoryController@index')->name('taxonomy_type_edit');
    Route::post('term_type={type}/taxonomy={taxonomy}/update', 'CategoryController@update')->name('taxonomy_type_update');
    Route::get('term_type={type}/taxonomy={taxonomy}/delete/{id}', 'CategoryController@destroy')->name('taxonomy_type_delete');


    /* -------------------------------
    ----------- Settings -------------
    ----------------------------------*/

    // Frontend Settings
    Route::get('seetings/fronend/view', 'FrontendSettingsController@index')->name('frontend_settings_index');
    Route::post('seetings/fronend/update', 'FrontendSettingsController@update')->name('frontend_settings_update');



    /**
     * User
     */
    Route::get('user', 'UserController@userIndex')->name('user_index');
    Route::post('user/store', 'UserController@userStore')->name('user_store');
    Route::get('user/edit/{id}', 'UserController@userIndex')->name('user_edit');
    Route::post('user/update', 'UserController@userUpdate')->name('user_update');
    Route::get('user/delete/{datefilter}', 'UserController@userDestroy')->name('user_delete');



    /** Role */
    Route::group(['key' => 'Role', 'prefix' => 'role', 'as' => 'role_'], function(){
        Route::get('/manage', ['uses'=>'RoleController@index', 'title' =>'Manage Roles', 'show' => 'Yes', 'position' => 'Left'])->name('index');
        Route::get('/create', ['uses'=>'RoleController@create', 'title' => 'Add', 'show' => 'Yes', 'position' => 'Left'])->name('create');
        Route::post('/store', 'RoleController@store')->name('store');
        Route::get('/edit/{id}', ['uses'=>'RoleController@edit', 'title'=>'Edit'])->name('edit');
        Route::post('/update', 'RoleController@update')->name('update');
        Route::delete('/delete/{id}', ['uses'=>'RoleController@destroy','title'=> 'Delete'])->name('destroy');
    });

    include 'product.php';


});

?>
