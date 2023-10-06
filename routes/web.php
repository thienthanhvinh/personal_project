<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home.index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('/post/list', [PostController::class, 'list']);
Route::get('/product/sale', [ProductController::class, 'sale']);
Route::get('/product/1', [ProductController::class, 'detail']);
Route::get('/page/about', [PageController::class, 'about']);
Route::get('/page/contact', [PageController::class, 'contact']);
Route::get('/account/login', [UserController::class, 'login']);
Route::get('/account/register', [UserController::class, 'register']);
Route::get('/account/passwordRecovery', [UserController::class, 'passwordRecovery']);
Route::get('/cart/detail', [CartController::class, 'detail']);
