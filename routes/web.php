<?php
Route::group(['middleware'=>'web'], function(){
  Route::match(['get', 'post'], '/', ['uses'=>'LandingController@index', 'as'=>'home']);
//  Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);

//  Route::auth();
});
//Route::get('/', 'LandingController@index')->name('landing');

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

  Route::resource('menus', 'Admin\MenusController');
  Route::post('menus_mass_destroy', ['uses' => 'Admin\MenusController@massDestroy', 'as' => 'menus.mass_destroy']);
  Route::post('menus_restore/{id}', ['uses' => 'Admin\MenusController@restore', 'as' => 'menus.restore']);
  Route::delete('menus_perma_del/{id}', ['uses' => 'Admin\MenusController@perma_del', 'as' => 'menus.perma_del']);

  Route::resource('slides', 'Admin\SlidesController');
  Route::post('slides_mass_destroy', ['uses' => 'Admin\SlidesController@massDestroy', 'as' => 'slides.mass_destroy']);
  Route::post('slides_restore/{id}', ['uses' => 'Admin\SlidesController@restore', 'as' => 'slides.restore']);
  Route::delete('slides_perma_del/{id}', ['uses' => 'Admin\SlidesController@perma_del', 'as' => 'slides.perma_del']);

  Route::resource('advantages', 'Admin\AdvantagesController');
  Route::post('advantages_mass_destroy', ['uses' => 'Admin\AdvantagesController@massDestroy', 'as' => 'advantages.mass_destroy']);
  Route::post('advantages_restore/{id}', ['uses' => 'Admin\AdvantagesController@restore', 'as' => 'advantages.restore']);
  Route::delete('advantages_perma_del/{id}', ['uses' => 'Admin\AdvantagesController@perma_del', 'as' => 'advantages.perma_del']);

  Route::resource('catalogs', 'Admin\CatalogsController');
  Route::post('catalogs_mass_destroy', ['uses' => 'Admin\CatalogsController@massDestroy', 'as' => 'catalogs.mass_destroy']);
  Route::post('catalogs_restore/{id}', ['uses' => 'Admin\CatalogsController@restore', 'as' => 'catalogs.restore']);
  Route::delete('catalogs_perma_del/{id}', ['uses' => 'Admin\CatalogsController@perma_del', 'as' => 'catalogs.perma_del']);

    Route::resource('contacts', 'Admin\ContactsController');
    Route::post('contacts_mass_destroy', ['uses' => 'Admin\ContactsController@massDestroy', 'as' => 'contacts.mass_destroy']);
    Route::post('contacts_restore/{id}', ['uses' => 'Admin\ContactsController@restore', 'as' => 'contacts.restore']);
    Route::delete('contacts_perma_del/{id}', ['uses' => 'Admin\ContactsController@perma_del', 'as' => 'contacts.perma_del']);



 
});
