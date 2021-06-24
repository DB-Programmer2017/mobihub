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
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\Import_Export_Controller ;


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



// Route::get('/', function () {
//     return view('mainpage/home');
// });
    Route::get('/', [ArmorxController::class, 'index_slide']);
    // Route::get('/', [ArmorxController::class, 'news_slide']);

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
        Route::get('/scalefusion/deepdrive', function () {
            return view('mainpage/scalefusion/deepdrive');
        });
        Route::get('/scalefusion/report', function () {
            return view('mainpage/scalefusion/report');
        });


// Route::get('/armor-x', function () {
//     return view('mainpage/armor-x');
// });
Route::get('/armor-x', [ArmorxController::class,'home_armor_x'])->name('armor-x');
Route::get('/armor-x/{id}/SearchProduct', [ArmorxController::class, 'get_causes_against_category']);
Route::post('/armor-x/filter', [ArmorxController::class, 'ArmorxFilter']);
Route::get('/armor-x-product/{id}', [ArmorxController::class, 'ProductDetail']);

Route::get('/otterbox', [ArmorxController::class,'home_otterbox'])->name('otterbox');
Route::post('/otterbox/filter', [ArmorxController::class, 'OtterBoxFilter']);
Route::get('/otterbox-product/{id}', [ArmorxController::class, 'ProductOtterBoxDetail']);

Route::get('/rammounts', [ArmorxController::class,'home_rammounts'])->name('rammounts');
Route::post('/rammounts/filter', [ArmorxController::class, 'RamMountsFilter']);
Route::get('/rammounts-product/{id}', [ArmorxController::class, 'ProductRamMountsDetail']);

// Route::get('/armor-x-product', function () {
//     return view('mainpage/armor-x-product');
// });


Route::get('/service', function () {
    return view('mainpage/service');
});

Route::get('/news-post', [MobihubController::class,'news']);
Route::get('/news-detail/{id}', [MobihubController::class, 'ShowDetail']);//show detail

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

    /*Brand*/
    Route::post('/admin/brand/add',[BrandController::class,'store'])->name('addProductBrand');
    Route::post('/admin/brand/edit',[BrandController::class,'editProductBrand'])->name('editProductBrand');
    Route::get('/admin/product-brand/{id}/editBrand', [BrandController::class, 'editBrand']);//edit
    Route::get('/admin/product/getBrand/{id}', [BrandController::class, 'getBrand']);

    /*Category*/
    Route::post('/admin/product-category/add',[ProductController::class,'store'])->name('addProductCate');
    Route::post('/admin/product-category/edit',[ProductController::class,'editProductCate'])->name('editProductCate');//update
    Route::get('/admin/product-category/{id}/editProductCategory', [ProductController::class, 'editProductCategory']);//edit
    Route::get('/admin/product/getCategory/{id}', [ProductController::class, 'getCategory']);
    //Route::post('fileImport', [Import_Export_Controller::class, 'fileImport'])->name('fileImport');
    Route::post('file-import', [Import_Export_Controller::class, 'fileImport'])->name('file-import');
    Route::get('file-export', [Import_Export_Controller::class, 'fileExport'])->name('file-export');


    /*Sub Category*/
    Route::get('/admin/sub-category', [SubCategoryController::class, 'index']);
    Route::get('/admin/sub-category/{id}/editSubCategory', [SubCategoryController::class, 'editSubCategory']);

    Route::post('/admin/sub-category/add', [SubCategoryController::class, 'store'])->name('sub-category.store');
    Route::post('/admin/sub-category/edit', [SubCategoryController::class, 'update'])->name('sub-category.update');
    // Route::get('/admin/sub-category/getBrand/{id}', [BrandController::class, 'getBrand']);
    // Route::get('/admin/sub-category/getCategory/{id}', [ProductController::class, 'getCategory']);
    Route::get('/admin/product/getSubCategory/{id}', [SubCategoryController::class, 'getSubCategory']);

    /*Product*/
    Route::post('/admin/product/add',[ProductAllController::class,'store'])->name('addProductAll');
    Route::post('/admin/product/edit',[ProductAllController::class,'editProductAll'])->name('editProductAll');
    Route::get('/admin/product/{id}/editProduct', [ProductAllController::class, 'editProduct']);
    Route::get('/admin/product/{id}/ImageProduct', [ProductAllController::class, 'ImageProduct']);
    Route::get('/admin/product/softdeleteImage/{id}',[ProductAllController::class,'softdeleteImage']);
    //Route::post('/admin/product/AddOptionList',[ProductAllController::class,'AddOptionList'])->name('addchoicelist');
    Route::post('/admin/product/ajaxRequestPost', [ProductAllController::class, 'ajaxRequestPost'])->name('ajaxRequestPost');

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

    Route::get('/admin/sortable', [SlideAllController::class,'sortable']);
    Route::get('/admin/sortable/update/{id}',[SlideAllController::class,'sortableUpdate']);

    /*CKeditor upload*/
    Route::get('ckeditor', [CkeditorController::class, 'index']);
    Route::post('ckeditor/upload',[CkeditorController::class, 'upload'])->name('ckeditor.upload');

    Route::get('/admin/sortable', [SlideAllController::class,'sortable']);
    Route::get('/admin/sortable/update/{id}',[SlideAllController::class,'sortableUpdate']);
});


Route::get("/storage-link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . 'storage';
    dd($linkFolder);
    symlink($targetFolder, $linkFolder);
    return 'DONE';
});
