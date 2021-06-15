<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmorxController;

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
    return view('mainpage/home');
});

// Route::get('/armor-x', function () {
//     return view('mainpage/armor-x');
// });
Route::get('/armor-x', [ArmorxController::class,'home_armor_x']);

Route::get('/armor-x-product', function () {
    return view('mainpage/armor-x-product');
});
Route::get('/service', function () {
    return view('mainpage/service');
});

Route::get('/news-post', function () {
    return view('mainpage/news-post');
});

