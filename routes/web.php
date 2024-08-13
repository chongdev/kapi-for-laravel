<?php

use App\Http\Controllers\QrPaymentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('qr-payment.index');
});

Route::get('/qr-payment', [QrPaymentController::class, 'index'])->name('qr-payment.index');
Route::get('/qr-payment/request', [QrPaymentController::class, 'request'])->name('qr-payment.request');