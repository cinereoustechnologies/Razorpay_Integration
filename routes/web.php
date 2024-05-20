<?php

use App\Http\Controllers\RazorpayController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('product',[RazorpayController::class,'index'])->name('product');
Route::post('razorpay-payment',[RazorpayController::class,'store'])->name('razorpay.payment.store');