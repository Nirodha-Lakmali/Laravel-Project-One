<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AssignStudentsController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\BybitController;

Route::get('assign-students',[AssignStudentsController::class, 'index'])->name('assign-students');
Route::post('assign-students',[AssignStudentsController::class, 'store']);
Route::get('assign-students/{id}',[AssignStudentsController::class, 'fetch']);
Route::post('assign-students/{id}',[AssignStudentsController::class, 'fetch']);

Route::get('courses', [CourseController::class, 'index'])->name('add-course');
Route::get('categories', [CategoryController::class, 'index'])->name('add-category');
Route::get('students', [StudentController::class, 'index'])->name('add-student');

Route::post('courses', [CourseController::class, 'store']);
Route::post('categories', [CategoryController::class, 'store']);
Route::post('students', [StudentController::class, 'store']);


Route::get('/',function(){
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('api', [ApiController::class, 'list'])->name('api');
Route::post('api', [ApiController::class, 'leverageChange'])->name('leverage');
//binance
Route::get('trade-buy', [ApiController::class, 'buyBinanceTradeView'])->name('buy');
Route::get('trade-sell', [ApiController::class, 'sellBinanceTradeView'])->name('sell');
Route::post('trade-buy', [ApiController::class, 'buyBinanceTrade']);
Route::post('trade-sell', [ApiController::class, 'sellBinanceTrade']);


//bybit
Route::get('trade-buy-bybit', [BybitController::class, 'buyTrade'])->name('buyBybit');
Route::post('trade-buy-bybit', [BybitController::class, 'buyTrade']);
Route::get('trade-sell-bybit', [BybitController::class, 'sellTrade'])->name('sellBybit');
Route::post('trade-sell-bybit', [BybitController::class, 'sellTrade']);