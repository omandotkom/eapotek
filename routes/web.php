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

use App\Supplier;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard/owner', function () {
    return view('dashboard.dashowner');
})->middleware('auth');
Route::get('/dashboard/branchhead', function() {
    return view('dashboard.dashbranchhead');
})->middleware('auth');

Route::get('/dashboard/branchworker', function() {
    return view('dashboard.dashbranchworker');
})->middleware('auth');

Route::get('/login/checklogin', 'Auth\LoginController@redirectTo')->name('dashboard');

Route::get('/input/obat', function() {
    return view('input.obat');
})->name('inputObat');
/*
  Route::get('/input/supplier',function(){
  return view('input.supplier');
  })->name('inputSupplier'); */
Route::get('/input/supplier', 'SupplierController@showInputSupplierView')->name('inputSupplier');
Route::get('/input/supplyobat', function() {
    return view('input.supplyobat');
})->name('inputSupplyObat');
Route::post('/supplier', function() {
    $data = $request->all();
    $supplier = new Supplier($data);
    $result = $transaction->isValid();
    echo $result;
})->name('storeSupplier');

Route::post('/supplier/store', 'SupplierControllerNew@store');

