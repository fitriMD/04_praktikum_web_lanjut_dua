<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('category') ->group(function () {
    Route::get('/{id}', [HomeController::class, 'products']);
});

Route::get('/news/{id?}', [HomeController::class, 'news']);

Route::prefix('programkerja') ->group(function () {
    Route::get('/{id}', [HomeController::class, 'program']);
});

Route::get('/about', [HomeController::class, 'about']);

Route::resource('/contact', HomeController::class);
