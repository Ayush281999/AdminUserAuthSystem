<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\categoryController;
use App\http\Controllers\subcategoryController;
use App\http\Controllers\productController;
use App\http\Controllers\listController;
use App\http\Controllers\sublistController;
use App\http\Controllers\productlistController;
use App\http\Controllers\MailController;
use App\http\Controllers\ContactController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::namespace('Auth')->group(function(){
       //login route
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
        // Route::get('login','AuthenticatedSessionController@create1')->name('login');
        // Route::post('login','AuthenticatedSessionController@store1')->name('adminlogin');
        
    });
    Route::get('dashboard','Homecontroller@indexx')->name('dashboard');
});
Route::get('category','categoryController@create1')->name('category');
// Route::post('category','categoryController@adddata')->name('category');
Route::post('category',[categoryController::class,'adddata']);
Route::get('list','listController@list')->name('list');
Route::get('delete/{id}','listController@delete')->name('delete');

Route::get('subcategory','subcategoryController@creat2')->name('subcategory');
Route::post('subcategory',[subcategoryController::class,'addsubdata']);
Route::get('sublist','sublistController@sublist')->name('sublist');
Route::get('delete/{id}','sublistController@delete')->name('delete');

Route::get('product','productController@creat3')->name('product');
Route::post('product',[productController::class,'addproduct']);
Route::get('productlist','productlistController@productlist')->name('productlist');
Route::get('delete/{id}','productlistController@delete')->name('delete');

// Route::post('product',[productController::class,'addsubdata']);

//send mail
Route::get('/send-email',[MailController::class,'sendEmail']);
Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

