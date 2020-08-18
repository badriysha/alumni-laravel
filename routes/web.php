<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'HomeController@index')
    ->name('home');
Route::get('/news', 'NewsController@index')
    ->name('news');
Route::get('/news-detail/{slug}', 'NewsDetailController@index')
    ->name('news-detail');
Route::get('/search', 'SearchController@index')
    ->name('search');
Route::get('/contact', 'ContactController@index')
    ->name('contact');
Route::post('logout', 'LoginController@logout');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['role:ADMIN'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
        Route::resource('user', 'UserController');
        Route::prefix('post')
            ->namespace('Post')
            ->group(function () {
                Route::resource('news', 'NewsController');
                Route::resource('job', 'JobController');
                Route::resource('event', 'EventController');
            });
    });

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Auth::routes(['verify' => 'true']);
