<?php

use App\Http\Controllers\Admin\CheckController;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarSize;
use App\Models\Category;
use App\Models\Check;
use App\Models\Client;
use App\Models\File;
use App\Models\OpenSaleOrderProducts;
use App\Models\Product;
use App\Models\PurchaseOrderProducts;
use App\Models\Technical;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

// Authentication Routes
Auth::routes(
    [
        'register' => false, // Registration Routes...
        'reset' => false,   // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]
);

// Dashboard Route
//Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function () {
//    Route::get('/admin', 'DashboardController@index') -> name('dashboard');
//});

Route::prefix('admin')->middleware('auth')->name('admin.')->namespace('Admin')->group(function (){
    Route::get('/', 'DashboardController@index') -> name('dashboard');
    Route::get('homePage', 'HomeController@index')->name('homePage.index');
    Route::get('get_slideShow_images', 'HomeController@get_slideShow_images')->name('home.get_slideShow_images');
    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::post('setting/update', 'SettingController@update')->name('setting.update');
    Route::get('get_category_images', 'CategoryController@get_category_images')->name('category.get_category_images');
    Route::post('upload_header_cover', 'DropzoneController@upload_header_cover')->name('dropzone.upload_header_cover');
    Route::post('upload', 'DropzoneController@upload')->name('dropzone.upload');
    Route::post('destroy/{id}', 'DropzoneController@destroy')->name('dropzone.destroy');
    Route::post('home_slideShow/upload', 'DropzoneController@home_slideShow_upload')->name('home.slideShow.upload');

    Route::resources([
        'users'                     => 'UserController',
        'categories'                => 'CategoryController',
        'subCategories'             => 'SubCategoryController',
    ]); // end of resources

}); // enf of group

