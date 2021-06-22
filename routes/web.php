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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});



Route::get('/', function () {
    return view('mainpage/home');
});

    /*** Quotation ***/
    Route::get('/quotation', [QuotationController::class, 'create']);
    Route::post('/quotation', [QuotationController::class, 'store'])->name('quotation.store');


    /*** Contact Us ***/
    Route::get('/contact', [ContactUsController::class, 'create']);
    Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

    Route::get('/scalefusion', function () {
        return view('mainpage/scalefusion/scalefusion');
    });
        Route::get('/scalefusion/device-user-enrollment', function () {
            return view('mainpage/scalefusion/device-user-enrollment');
        });
        Route::get('/scalefusion/mobile-application-management', function () {
            return view('mainpage/scalefusion/mobile-application-management');
        });
        Route::get('/scalefusion/remote-support', function () {
            return view('mainpage/scalefusion/remote-support');
        });
        Route::get('/scalefusion/location-tracking', function () {
            return view('mainpage/scalefusion/location-tracking');
        });
        Route::get('/scalefusion/mobile-content-management', function () {
            return view('mainpage/scalefusion/mobile-content-management');
        });
        Route::get('/scalefusion/team-communication', function () {
            return view('mainpage/scalefusion/team-communication');
        });


// Route::get('/armor-x', function () {
//     return view('mainpage/armor-x');
// });
Route::get('/armor-x', [ArmorxController::class,'home_armor_x'])->name('armor-x');
Route::get('/armor-x/{id}/SearchProduct', [ArmorxController::class, 'get_causes_against_category']);
Route::post('/armor-x/filter', [ArmorxController::class, 'ArmorxFilter']);

// Route::get('/armor-x-product', function () {
//     return view('mainpage/armor-x-product');
// });
Route::get('/armor-x-product/{id}', [ArmorxController::class, 'ProductDetail']);

Route::get('/service', function () {
    return view('mainpage/service');
});

Route::get('/news-post', function () {
    return view('mainpage/news-post');
});
    Route::get('/news-post/news-detail', function () {
        return view('mainpage/news-detail');
    });

Route::get('/about', function () {
    return view('mainpage/about');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    /* admin */
    Route::get('/user-all', function () {
        return view('/admin/main-page/user-all');
    });
    Route::get('/product-category', function () {
        return view('/admin/main-page/product-category');
    });

    /* Query */
    Route::get('/admin/product-category', [ProductController::class,'product']);//แสดงข้อมูลในตาราง product-category.blade.php
    Route::get('/admin/brand', [BrandController::class,'brand']);
    Route::get('/admin/dealer', [DealerController::class,'dealer']);
    Route::get('/admin/product', [ProductAllController::class,'product']);
    Route::get('/admin/news', [NewsAllController::class,'news']);
    Route::get('/admin/slide', [SlideAllController::class,'slide']);

    /*Category*/
    Route::post('/admin/product-category/add',[ProductController::class,'store'])->name('addProductCate');
    Route::post('/admin/product-category/edit',[ProductController::class,'editProductCate'])->name('editProductCate');//update
    Route::get('/admin/product-category/{id}/editProductCategory', [ProductController::class, 'editProductCategory']);//edit
    Route::get('/admin/product/getBrand/{id}', [BrandController::class, 'getBrand']);

    /*Brand*/
    Route::post('/admin/brand/add',[BrandController::class,'store'])->name('addProductBrand');
    Route::post('/admin/brand/edit',[BrandController::class,'editProductBrand'])->name('editProductBrand');
    Route::get('/admin/product-brand/{id}/editBrand', [BrandController::class, 'editBrand']);//edit

    /*Product*/
    Route::post('/admin/product/add',[ProductAllController::class,'store'])->name('addProductAll');
    Route::post('/admin/product/edit',[ProductAllController::class,'editProductAll'])->name('editProductAll');
    Route::get('/admin/product/{id}/editProduct', [ProductAllController::class, 'editProduct']);
    Route::get('/admin/product/{id}/ImageProduct', [ProductAllController::class, 'ImageProduct']);
    Route::get('/admin/product/softdeleteImage/{id}',[ProductAllController::class,'softdeleteImage']);
    //Route::post('/admin/product/AddOptionList',[ProductAllController::class,'AddOptionList'])->name('addchoicelist');
    Route::post('/admin/product/ajaxRequestPost', [ProductAllController::class, 'ajaxRequestPost'])->name('ajaxRequestPost');
    Route::get('/admin/product/getCategory/{id}', [ProductController::class, 'getCategory']);


    /*Product Choice*/
    Route::post('/admin/product', [ProductAllController::class,'storePoductChoice'])->name('storePoductChoice');
    Route::get('/admin/product/{id}/ChoiceProduct', [ProductAllController::class, 'ChoiceProduct']);
    Route::get('/admin/product/{id}/ChoiceList', [ProductAllController::class, 'ChoiceList']);
    Route::get('/admin/product/{id}/ChoiceListDetails', [ProductAllController::class, 'ChoiceListDetails']);

    /*Dealer*/
    Route::post('/admin/dealer/add',[DealerController::class,'store'])->name('addProductDealer');
    Route::post('/admin/dealer/edit',[DealerController::class,'editProductDealer'])->name('editProductDealer');
    Route::get('/admin/dealer/{id}/editProductDealers', [DealerController::class, 'editProductDealers']);//edit

    /*News*/
    Route::post('/admin/news/add',[NewsAllController::class,'store'])->name('addNewsAll');//News
    Route::get('/admin/news/{id}/editNews', [NewsAllController::class, 'editNews']);
    Route::post('/admin/news/edit',[NewsAllController::class,'editNewsAll'])->name('editNewsAll');

    /*Slide*/
    Route::post('/admin/slide/add',[SlideAllController::class,'store'])->name('addSlideAll');//Slide
    Route::get('/admin/slide/{id}/editSlide', [SlideAllController::class, 'editSlide']);
    Route::post('/admin/slide/edit',[SlideAllController::class,'editSlideAll'])->name('editSlideAll');

    //Route::get('/admin/product/{id}',[ProductAllController::class,'editProduct'])->name('editProduct');


    /*CKeditor upload*/
    Route::get('ckeditor', [CkeditorController::class, 'index']);
    Route::post('ckeditor/upload',[CkeditorController::class, 'upload'])->name('ckeditor.upload');

});
