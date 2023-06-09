<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
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

Route::get('/', [SiteController::class, 'home']);

Route::get('/login', [SiteController::class, 'loginForm'])->name('login');
Route::post('/login',[SiteController::class, 'login']);

Route::get('/users/Create',[UserController::class,'create']);
Route::post('/',[UserController::class, 'store']);

Route::group(['middleware'=>'auth'], function(){

    Route::post('/logout', [SiteController::class, 'logout']);
    Route::get('/companies', [CompanyController::class,'index']);
    Route::get('/companies/create',[CompanyController::class,'create']);
    Route::post('/companies',[CompanyController::class, 'store']);
    Route::get('/companies/edit/{company}', [CompanyController::class, 'edit']);
    Route::put('/companies/{company}', [CompanyController::class, 'update']);


    Route::get('/members', [MemberController::class, 'index']);
    Route::get('/members/create', [MemberController::class, 'create']);
    Route::post('/members', [MemberController::class, 'store']);
    Route::get('/members/edit/{member}', [MemberController::class, 'edit']);
    Route::put('/members/{member}', [MemberController::class, 'update']);


});
