<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//........user

Route::get('/',[HomeController::class,'userDashboard'])->name('user.dashboard');
Route::match(['get','post'],'/userregister',[AuthController::class,'userSignin'])->name('user.signin');
Route::match(['get','post'],'/userlogin',[AuthController::class,'userLogin'])->name('user.login');
Route::get('/logout',[AuthController::class,'Logout'])->name("logout");

Route::get('/manage/user',[HomeController::class,'user_List'])->name('manage.user');
//.....admin

Route::match(["get","post"],'/admin/register',[AuthController::class,'adminSignin'])->name('admin.register');
Route::match(["get","post"],'/admin/login',[AuthController::class,'adminLogin'])->name('admin.login');
 Route::get('/admin/logout',[AuthController::class,'adminLogout'])->name('admin.logout');
Route::prefix('admin')->middleware('auth:admin')->group( function(){
  

    Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
    Route::get('/manage/user',[AuthController::class,'index'])->name('manageuser.admin');
    Route::get('/insert/user',[AuthController::class,'create'])->name('user.create');
    Route::post('/user/store',[AuthController::class,'store'])->name('store.user');
    Route::get('/update/user/{id}',[AuthController::class,'edit'])->name('user.edit');
    Route::post('/update/user/{id}',[AuthController::class,'update'])->name('user.update');
    Route::get('/remove/user/{id}',[AuthController::class,'destroy'])->name('user.remove');
   
});