<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductAllController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SubscriptionEmailController;
use App\Http\Controllers\NewsAllController;
use App\Http\Controllers\SlideAllController;
use App\Http\Controllers\MobihubController;
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

    /*** Quotation ***/
    Route::get('/quotation', [QuotationController::class, 'create']);
    Route::post('/quotation', [QuotationController::class, 'store'])->name('quotation.store');


    /*** Contact Us ***/
    Route::get('/contact', [ContactUsController::class, 'create']);
    Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');


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

Route::get('/about', function () {
    return view('mainpage/about');
});
