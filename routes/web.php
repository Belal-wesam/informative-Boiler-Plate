<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\HomeController;
use App\Http\Controllers\Landing\AboutController;
use App\Http\Controllers\Landing\ArticleController;
use App\Http\Controllers\Landing\ContactController;
use App\Http\Controllers\Landing\ProjectController;
use App\Http\Controllers\Landing\ServiceController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#localization middlewares and prefixing
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect']], function () {
    #add localized routes here


    Route::group(["as" => "landing."], function () {
        Route::get('/', HomeController::class)->name('index');

        Route::controller(ServiceController::class)->group(function () {
            Route::get('/services', 'index')->name('services');
            Route::get('/services/{slug}', 'show')->name('services.show');
        });


        Route::controller(ProjectController::class)->group(function () {
            Route::get('/projects', 'index')->name('projects');
            Route::get('/projects/{slug}', 'show')->name('projects.show');
        });

        Route::get('/about-us', AboutController::class)->name('about');



        Route::controller(ContactController::class)->group(function () {
            Route::get('/contact-us', 'index')->name('contact');
            Route::post('/send-message', 'send_message')->name('contact.send_message');
        });


        Route::controller(ArticleController::class)->group(function () {
            Route::get('/blog', 'index')->name('blog');
            Route::get('/article/{slug}', 'article')->name('blog.article');
        });
    });
});
