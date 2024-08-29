<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\NumberController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Auth\AuthController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "admin" middleware group. Make something great!
|
*/

#localization middlewares and prefixing
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect']], function () {
    #add localized routes here and the prexfix them with admin keyword
    Route::prefix('admin')->group(function () {
        #auth routes
        Route::view('login', 'admin.auth.login')->name('admin.login_form')->middleware('guest:admin');
        Route::post('login', [AuthController::class, 'login'])->name('admin.login')->middleware('guest:admin');
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth:admin');

        #routes that need authetication to interact with
        Route::group(['middleware' => 'auth:admin', 'as' => 'admin.'], function () {
            #placeholder route
            Route::view('/', 'admin.pages.index')->name('index');



            #roles routes (prefix is stand alone because of overlapping)
            Route::prefix('roles')->group(function () {
                Route::group(['as' => 'roles.', 'controller' => RoleController::class, 'middleware' => ['can:see roles']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/', 'update')->name('update');
                    Route::get('/role-users', 'getRoleUsers')->name('role_users'); // get role users for datatable
                });
            });


            #admins crud routes (prefix is stand alone because of overlapping)
            Route::prefix('admins')->group(function () {
                Route::group(['as' => 'admins.', 'controller' => AdminController::class, 'middleware' => ['can:see admins']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/', 'update')->name('update');
                    Route::delete('/', 'destroy')->name('delete');
                    Route::get('/admins-list', 'getAdminsList')->name('admins_list'); // get role users for datatable
                });
            });


            #categories crud routes (prefix is stand alone because of overlapping)
            Route::prefix('categories')->group(function () {
                Route::group(['as' => 'categories.', 'controller' => CategoryController::class, 'middleware' => ['can:see categories']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/', 'update')->name('update');
                    Route::delete('/', 'destroy')->name('delete');
                    Route::get('/categories-list', 'getCategoriesList')->name('categories_list'); // get role users for datatable
                });
            });



            #banners crud routes (prefix is stand alone because of overlapping)
            Route::prefix('banners')->group(function () {
                Route::group(['as' => 'banners.', 'controller' => BannerController::class, 'middleware' => ['can:see banners']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::get('/edit/{id}', 'edit')->name('edit');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/', 'update')->name('update');
                    Route::delete('/', 'destroy')->name('delete');
                    Route::get('/banners-list', 'getBannersList')->name('banners_list'); // get banners for datatable
                });
            });

            #services crud routes (prefix is stand alone because of overlapping)
            Route::prefix('services')->group(function () {
                Route::group(['as' => 'services.', 'controller' => ServiceController::class, 'middleware' => ['can:see services']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/', 'update')->name('update');
                    Route::delete('/', 'destroy')->name('delete');
                    Route::get('/services-list', 'getServicesList')->name('services_list'); // get services for datatable
                });
            });
            #about crud routes (prefix is stand alone because of overlapping)
            Route::prefix('about')->group(function () {
                Route::group(['as' => 'about.', 'controller' => AboutController::class, 'middleware' => ['can:see about']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::patch('/', 'update')->name('update');
                });
            });


            #projects crud routes (prefix is stand alone because of overlapping)
            Route::prefix('projects')->group(function () {
                Route::group(['as' => 'projects.', 'controller' => ProjectController::class, 'middleware' => ['can:see projects']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::get('/edit/{id}', 'edit')->name('edit');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/{id}', 'update')->name('update');
                    Route::delete('/', 'destroy')->name('delete');
                    Route::get('/projects-list', 'getProjectsList')->name('projects_list'); // get projects for datatable
                });
            });

            #faq crud routes (prefix is stand alone because of overlapping)
            Route::prefix('faq')->group(function () {
                Route::group(['as' => 'faq.', 'controller' => FaqController::class, 'middleware' => ['can:see faq']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/', 'update')->name('update');
                    Route::delete('/', 'destroy')->name('delete');
                    Route::get('/faq-list', 'getFaqList')->name('faq_list'); // get faq for datatable
                });
            });


            #reviews crud routes (prefix is stand alone because of overlapping)
            Route::prefix('reviews')->group(function () {
                Route::group(['as' => 'reviews.', 'controller' => ReviewController::class, 'middleware' => ['can:see reviews']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/', 'update')->name('update');
                    Route::delete('/', 'destroy')->name('delete');
                    Route::get('/reviews-list', 'getReviewsList')->name('reviews_list'); // get reviews for datatable
                });
            });


            #numbers crud routes (prefix is stand alone because of overlapping)
            Route::prefix('numbers')->group(function () {
                Route::group(['as' => 'numbers.', 'controller' => NumberController::class, 'middleware' => ['can:see numbers']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::patch('/', 'update')->name('update');
                });
            });

            #partners crud routes (prefix is stand alone because of overlapping)
            Route::prefix('partners')->group(function () {
                Route::group(['as' => 'partners.', 'controller' => PartnerController::class, 'middleware' => ['can:see partners']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/', 'update')->name('update');
                    Route::delete('/', 'destroy')->name('delete');
                    Route::get('/partners-list', 'getPartnersList')->name('partners_list'); // get partners for datatable
                });
            });

            #articles crud routes (prefix is stand alone because of overlapping)
            Route::prefix('articles')->group(function () {
                Route::group(['as' => 'articles.', 'controller' => ArticleController::class, 'middleware' => ['can:see articles']], function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::get('/edit/{id}', 'edit')->name('edit');
                    Route::post('/', 'store')->name('store');
                    Route::patch('/{id}', 'update')->name('update');
                    Route::delete('/', 'destroy')->name('delete');
                    Route::get('/articles-list', 'getArticlesList')->name('articles_list'); // get articles for datatable
                });
            });
        });
    });
});
