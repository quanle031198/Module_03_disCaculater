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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/display-discount', function (\Illuminate\Http\Request $request) {
    $describe = $request->describe;
    $price = $request->price;
    $discount = $request->discount;
    $discountAmount = $price * $request->discount * 0.01;
    $discountPrice = $price - $discountAmount;
    return view('display-discount', compact(['discountPrice', 'discountAmount', 'describe', 'price', 'discount']));
});
