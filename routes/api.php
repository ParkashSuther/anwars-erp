<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/city', function(){
	$data = 
	[
		"California",
		"Croydon",
		"Eureka",
		"fdsfsd",
		"Fredonia",
		"Guildford",
		"Harlow",
		"Houston",
		"Hyderabad , Sindh",
		"ISB",
		"Kaachi",
		"Karachi",
		"Lola",
		"Luton",
		"New South wales",
		"Northern Ireland",
		"Sialkot",
		"South Australia",
		"Sydeny",
		"Test Customer City",
		"Texas",
		"Toronto",
		"United States",
		"USA",
		"Wales",
		"Washington",
		"Yates Center"
	];
return $data;
});


Route::get('/countries', function(){
	$country = 
	[
		"Pakistan",
		"China",
		"India",
		"Bangladesh",
		"Westindies",
		"Brazil",
		
	];
return $country;
});

