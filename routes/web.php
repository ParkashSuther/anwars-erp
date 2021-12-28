<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnwarsController;
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
    return view('welcome');
});
// Products rotes

Route::get('products/view', function () {
    return view('products.view');
});

Route::get('products/add', function () {
    return view('products.add');
});


Route::get('products/detail', function () {
    return view('products.detail');
});

//customers routes

Route::get('customers/add', function () {
    return view('customers.add');
});

Route::post('customers/add', [AnwarsController::class, 'add_customer']);


Route::get('customers/view', function () {
    return view('customers/view');
});

Route::get('customers/detail', function () {
    return view('customers/detail');
});

// Venders routes

Route::get('vendors/add', function () {
    return view('vendors/add');
});


Route::get('vendors/view', function () {
    return view('vendors/view');
});


Route::get('vendors/detail', function () {
    return view('vendors/detail');
});
Route::get('vendors/extra', function () {
    return view('vendors/extra');
});

/*Login Routes*/

Route::get('login', function () {
    return view('login');
});
/*Register Routes*/

Route::get('register', function () {
    return view('register');
});

/*History Routes*/
Route::get('history/login_history', function () {
    return view('history/login_history');
});

Route::get('history/page_access_history', function () {
    return view('history/page_access_history');
});


