<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\ProductController;
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
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/logout' ,[UserController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/register', [UserController::class, 'create'])->name('register');

Route::group(['middleware'=>'guest'],function(){
	Route::post('/register' ,[UserController::class, 'store'])->name('register.store');

	Route::get('/login', [UserController::class, 'loginForm'])->name('login.creata');
	Route::post('/login' ,[UserController::class, 'login'])->name('login');
	Route::get('/product' ,[ProductController::class, 'user'])->name('product');
});



Route::group(['middleware'=>'admin','prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('/' ,[MainController::class, 'index'])->middleware('admin')->name('admin');
	Route::get('/product' ,[ProductController::class, 'admin'])->name('product');
	Route::post('/create' ,[ProductController::class, 'create'])->name('product.create');
	Route::get('/edit/{id}' ,[ProductController::class, 'edit'])->name('product.edit');
	Route::put('/edit' ,[ProductController::class, 'editData'])->name('product.editdata');
	Route::delete('/delete' ,[ProductController::class, 'delete'])->name('product.delete');
	Route::get('/getchanges/{from}/{to}' ,[ProductController::class, 'getchanges'])->name('product.getchanges');
});


