<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
    $title = 'Home Page';
    $featuredProducts = [1,2,3,4,5,6];
    $recomended = [1,3,2];
    $homeslider = [1,3,2];
    $tshirta = [1,2,3,4];
    $sunglasses = [3,2,1,4];
    $blazers = [1,4,3,2];
    $kids = [3,2,1,4];
    $poloshirts = [1,3,2,4];
    return view('home',compact('featuredProducts','recomended','tshirta','sunglasses','blazers','homeslider','kids','poloshirts'))->with('title',$title);
});

Route::get('/products',[ProductController::class,'index'])->name('products.list');

Route::get('/product-detail/{id}',[ProductController::class,'show'])->name('products.detail');

Route::get('/checkout',[ProductController::class,'checkOut'])->name('products.checkout');

Route::get('/cart',[ProductController::class,'cart'])->name('products.cart');

Route::get('/contact',[ContactController::class,'index'])->name('contact.us');

Route::get('/about',[ContactController::class,'aboutUs'])->name('about.us');

Route::get('/blog',[BlogController::class,'index'])->name('blog');

Route::get('/blog-detail/{id}',[BlogController::class,'show'])->name('blog.detail');

Route::get('/login',[UserController::class,'login'])->name('login');

Route::post('/login-user',[UserController::class,'loginUser'])->name('login.user');

Route::post('/register',[UserController::class,'registerUser'])->name('register.user');

Route::get('/admin',[AdminController::class,'index'])->name('admin');
