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

Route::get('/discount', function () {
    return view('discount');
});

Route::post('/discount', function (Illuminate\Http\Request $request) {
    // if ($request->username == 'admin'
    //     && $request->password == 'admin') {
    //     return view('welcome_admin');
    // }
    // return view('login_error');

    $description = $request->description;
    $price = $request->price;
    $discount = $request->discount;
    $amount = $price * $discount * 0.01;
    $discount_price = $price - $amount;
    return view('view_discount', compact(['description', 'price', 'discount', 'discount_price', 'amount']));
});
