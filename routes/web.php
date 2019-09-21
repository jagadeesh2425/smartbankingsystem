<?php

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

Route::get('/contact-us', function () {
    return view('pages/contact');
});

Route::get('/recharge-bill-dth', function () {
    return view('includes/recharge-bill-dth');
});

Route::get('/individual-business-loan', function () {
    return view('includes/individual-business-loan');
});

Route::get('/recharge-bill-broadband', function () {
    return view('includes/recharge-bill-broadband');
});

Route::get('/mutual-fund-and-other-investment-products', function () {
    return view('includes/mutual-fund');
});

Route::get('/bank-account-opening', function () {
    return view('includes/bank-account-opening');
});

Route::get('/recharge-bill-electricity', function () {
    return view('includes/recharge-bill-electricity');
});

Route::get('/recharge-bill-metro', function () {
    return view('includes/recharge-bill-metro');
});

Route::get('/recharge-bill-gas', function () {
    return view('includes/recharge-bill-gas');
});

Route::get('/recharge-bill-water', function () {
    return view('includes/recharge-bill-water');
});

Route::get('/cash-collection-and-bank-account-deposits', function () {
    return view('includes/cash-collection-and-bank-account-deposits');
});


