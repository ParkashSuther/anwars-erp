<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnwarsController;
use App\Http\Controllers\CustomerController;
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

Route::get('customers/view', [CustomerController::class, 'viewCustomers']);

Route::get('customers/disable/cid={cid}&aid={aid}', [CustomerController::class, 'disableAddress']);
Route::get('customers/enable/cid={cid}&aid={aid}', [CustomerController::class, 'enableAddress']);

Route::get('customers/add', [CustomerController::class, 'viewAddCustomer']);
Route::post('customers/add', [CustomerController::class, 'addCutomrer']);

// update customer
Route::get('customers/update={id}', [CustomerController::class, 'viewUpdateCustomer']);
Route::post('customers/update={id}', [CustomerController::class, 'updateCustomer']);

// update customer address
Route::post('customers/update/address', [CustomerController::class, 'updateCustomerAddress']);
// Route::post('customers/update={id}', [CustomerController::class, 'updateCustoemr']);

Route::get('customers/detail={id}', [CustomerController::class, 'detailCustomer']);
Route::post('customers/detail={id}', [CustomerController::class, 'addAddress']);



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
Route::get('extra', function () {
    return view('extra');
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



// Customers Routes 

Route::get('/page',[CustomerController::class,'test']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
