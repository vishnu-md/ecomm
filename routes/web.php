<?php

use Illuminate\Support\Facades\Route;

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
 

use App\Http\Controllers\ProductController;
 
Route::resource('admin',ProductController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/productlist', function () {
    return view('admin.productlist');
});
Route::get('/product', function () {
    return view('admin.productform');
});
Route::post('/product', function () {
    return view('admin.productform');
});
Route::get('/categorylist', function () {
    return view('admin.categorylist');
});
Route::get('/category', function () {
    return view('admin.categoryform');
});
Route::post('/category', function () {
    return view('admin.categoryform');
});
