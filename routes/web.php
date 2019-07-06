<?php
  /*Route::get('/', function () {
    return view('welcome');
  });*/
//Route::get('/', function () { return redirect('/admin/home'); });
Route::get('/', 'LandingController@index')->name('landing');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('product_categories', 'Admin\ProductCategoriesController');
    Route::post('product_categories_mass_destroy', ['uses' => 'Admin\ProductCategoriesController@massDestroy', 'as' => 'product_categories.mass_destroy']);
    Route::resource('product_tags', 'Admin\ProductTagsController');
    Route::post('product_tags_mass_destroy', ['uses' => 'Admin\ProductTagsController@massDestroy', 'as' => 'product_tags.mass_destroy']);
    Route::resource('products', 'Admin\ProductsController');
    Route::post('products_mass_destroy', ['uses' => 'Admin\ProductsController@massDestroy', 'as' => 'products.mass_destroy']);
    Route::resource('services', 'Admin\ServicesController');
    Route::post('services_mass_destroy', ['uses' => 'Admin\ServicesController@massDestroy', 'as' => 'services.mass_destroy']);
    Route::post('services_restore/{id}', ['uses' => 'Admin\ServicesController@restore', 'as' => 'services.restore']);
    Route::delete('services_perma_del/{id}', ['uses' => 'Admin\ServicesController@perma_del', 'as' => 'services.perma_del']);
    Route::resource('galery1s', 'Admin\Galery1sController');
    Route::post('galery1s_mass_destroy', ['uses' => 'Admin\Galery1sController@massDestroy', 'as' => 'galery1s.mass_destroy']);
    Route::post('galery1s_restore/{id}', ['uses' => 'Admin\Galery1sController@restore', 'as' => 'galery1s.restore']);
    Route::delete('galery1s_perma_del/{id}', ['uses' => 'Admin\Galery1sController@perma_del', 'as' => 'galery1s.perma_del']);
    Route::resource('news', 'Admin\NewsController');
    Route::post('news_mass_destroy', ['uses' => 'Admin\NewsController@massDestroy', 'as' => 'news.mass_destroy']);
    Route::post('news_restore/{id}', ['uses' => 'Admin\NewsController@restore', 'as' => 'news.restore']);
    Route::delete('news_perma_del/{id}', ['uses' => 'Admin\NewsController@perma_del', 'as' => 'news.perma_del']);
    Route::resource('contacts', 'Admin\ContactsController');
    Route::post('contacts_mass_destroy', ['uses' => 'Admin\ContactsController@massDestroy', 'as' => 'contacts.mass_destroy']);
    Route::post('contacts_restore/{id}', ['uses' => 'Admin\ContactsController@restore', 'as' => 'contacts.restore']);
    Route::delete('contacts_perma_del/{id}', ['uses' => 'Admin\ContactsController@perma_del', 'as' => 'contacts.perma_del']);



 
});
