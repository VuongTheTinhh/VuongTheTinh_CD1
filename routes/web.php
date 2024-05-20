<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\Product_detailController;

Route::get("/",[HomeController::class,'index'])->name('user.index');//trang chu
Route::get("san-pham",[ProductController::class,'index']);//san pham
Route::get("chi-tiet-san-pham",[Product_detailController::class,'index']);//chi tiet san pham
Route::get("lien-he",[ContactController::class,'index']);//lien he
