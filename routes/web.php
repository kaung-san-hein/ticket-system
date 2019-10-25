<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/blog','BlogController@index');
Route::get('/blog/{slug?}','BlogController@show');

//Tickets CRUD
Route::get('/contact','TicketsController@create');
Route::post('/contact','TicketsController@store');
Route::get('/tickets','TicketsController@index');
Route::get('/tickets/{slug?}','TicketsController@show');
Route::get('/tickets/{slug?}/edit','TicketsController@edit');
Route::post('/tickets/{slug?}/edit','TicketsController@update');
Route::post('/tickets/{slug?}/delete','TicketsController@destroy');

//Route::get('sendemail', function () {
//    $data = array(
//        'name' => "Learning Laravel",
//    );
//    Mail::send('emails.welcome', $data, function ($message) {
//        $message->from('kaungsanhein1234@gmail.com', 'Learning Laravel');
//        $message->to('kaungsanhein2019@gmail.com')->subject('Learning Laravel test email');
//    });
//    return "Your email has been sent successfully";
//});

//Comments
Route::post('/comment','CommentsController@newComment')->name('comment');

//Login
Route::get('/users/register','Auth\RegisterController@showRegistrationForm');
Route::post('/users/register','Auth\RegisterController@register');
Route::get('/users/logout','Auth\LoginController@logout');
Route::get('/users/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/users/login','Auth\LoginController@login');

//Users
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {

    //admin dashboard
    Route::get('/', 'PagesController@home');

    //users
    Route::get('users', 'UsersController@index');
    Route::get('users/{id?}/edit', 'UsersController@edit')->name('users.edit');
    Route::post('users/{id?}/edit','UsersController@update');

    //roles
    Route::get('roles', 'RolesController@index');
    Route::get('roles/create', 'RolesController@create');
    Route::post('roles/create', 'RolesController@store');

    //posts
    Route::get('posts','PostsController@index');
    Route::get('posts/create','PostsController@create');
    Route::post('posts/create','PostsController@store');
    Route::get('posts/{id?}/edit','PostsController@edit');
    Route::post('posts/{id?}/edit','PostsController@update');

    //categories
    Route::get('categories', 'CategoriesController@index');
    Route::get('categories/create', 'CategoriesController@create');
    Route::post('categories/create', 'CategoriesController@store');
});


