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


Route::get('/product', function () {
    return view('product');
});



Route::post('/product', function (Illuminate\Http\Request $request) {
    $productDescription =$request->input('name');
    $listPrice =$request->input('price');
    $discountPercent =$request->input('discountPercent');
    $discountAmount =   $listPrice  * $discountPercent * 0.01;
    $discountPrice = $listPrice - $discountAmount;



   return view('show', compact('productDescription', 'listPrice', 'discountPercent', 'discountAmount', 'discountPrice'));

});
