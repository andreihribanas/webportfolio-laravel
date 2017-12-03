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

// Authentication routes
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

// Pages routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::post('portfolio.getProject', 'HomeController@getProject')->name('portfolio.getProject');
Route::get('/contact', 'HomeController@getContact')->name('contact');
Route::post('/contact', 'HomeController@postContact')->name('contact.send');

// Admin routes - prefix it -- apply middleware auth
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/', 'HomeController@getAdmin')->name('admin.index');

    Route::resource('/projects', 'ProjectsController');
    Route::get('/projects/{project}/toggle', 'ProjectsController@toggleVisible')->name('projects.toggleVisible');
    Route::get('/projects/{id}/images', 'ProjectsController@showImages')->name('projects.images');
    Route::post('/projects/images', 'ProjectsController@uploadImages')->name('projects.images.upload');
    Route::DELETE('/projects/images/{image}', 'ProjectsController@deleteImage')->name('projects.image.delete');


    Route::get('/messages', 'MessagesController@index')->name('messages.index');
    Route::get('/messages/{id}', 'MessagesController@show')->name('messages.show');
    Route::post('/messages/{message}', 'MessagesController@reply')->name('messages.reply');
    Route::DELETE('/messages/{message}', 'MessagesController@destroy')->name('messages.destroy');

    Route::resource('/tags', 'TagsController', ['except' => ['create', 'show']]);

    Route::resource('/testimonials', 'TestimonialsController', ['except' => ['create']]);
    Route::get('/testimonials/{id}/toggle', 'TestimonialsController@toggleVisible')->name('testimonials.toggleVisible');
});
