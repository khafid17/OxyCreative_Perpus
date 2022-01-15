<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboarAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

    // Route::get('/', function () {
    //     return view('welcome');
    // });


    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/error', [App\Http\Controllers\HomeController::class, 'error'])->name('error');
    Route::get('/master', [HomeController::class, 'master']);
    Route::get('/home', [DashboarAdminController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => 'user'], function(){

        Route::get('/perpus/user', [PenulisController::class, 'perpususer']);
        Route::get('/user', [UserController::class, 'index'])->name('user');
    });


    Route::group(['middleware' => 'admin'], function(){

        Route::resource('/perpus', PenulisController::class);
        Route::resource('/user', UserController::class);

        Route::get('/superadmin', [AdminController::class, 'index'])->name('admin');
    });

  

        Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
            [\UniSharp\LaravelFilemanager\Lfm::routes()];
        });

        Route::get('/', [BerandaController::class, 'index']);
