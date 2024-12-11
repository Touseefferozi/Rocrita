<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\uploadController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[productController::class,'welcome']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/best', function () {
    return view('best');
});

Route::get('/bundles', function () {
    return view('bundles');
});

Route::get('/glueless', function () {
    return view('glueless');
});

Route::get('/login', function () {
    return view('login');
});

Route::post("/login",[loginController::class,'login']);

Route::get("/login",[productController::class,'login']); // dobra

// Route::get("/login",[productController::class,'login']); // dobra


// Route::get('/add/{product}', 'productController@add')->name('add-cart'); // dobra

Route::get("/add",[productController::class,'add']); // dobra

// Route::get('/add', function () {
//     return view('add');
// });



Route::get('/new', function () {
    return view('new');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/return', function () {
    return view('return');
});

Route::get('/sale', function () {
    return view('sale');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/wig', function () {
    return view('wig');
});



Route::get('/about', [NewController::class, 'about']);

Route::get('/services', [NewController::class, 'services']);

Route::get('/contact/{id}', [NewController::class, 'contact']);


Route::view("upload","upload");  //Simple Route


// Upload Controllers

Route::post('upload',[uploadController::class,'index']);

// product Controllers

Route::get('products',[productController::class,'products']);
Route::get('create',[productController::class,'create']);
Route::post('store',[productController::class,'store']);


Route::get('/products/{id}/edit',[productController::class,'edit']); // Edit mein sy first products hatya hai

Route::put('/{id}/update',[productController::class,'update']);  // update

Route::delete('/products/{id}/delete',[productController::class,'destroy']);  // Delete



