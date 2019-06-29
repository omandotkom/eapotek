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
    
    /*
    Route::get('/input/supplier',function(){
    return view('input.supplier');
    })->name('inputSupplier'); */
    Route::get('/input/supplier', 'SupplierController@showInputSupplierView')->name('inputSupplier');
    Route::get('/view/supplier/branch/{branch_id}','SupplierController@showSupplierbyBranch')->name('viewSupplier');
    Route::get('/view/supplier/search/branch/{branch_id}/{namasupplier}','SupplierController@searchName')->name('viewSupplierByName');
    Route::get('/view/supplier/search/branch/{branch_id}','SupplierController@loadData');
    Route::post('/supplier/store', 'SupplierController@store');
    Route::post('/input/supplier/update','SupplierController@update');
    Route::post('/input/supplier/delete','SupplierController@delete');

    Route::get('/input/obat', 'MedicineController@showInputObatView')->name('inputObat');
    //Route::get('/view/obat', 'MedicineController@showAllMedicine')->name('viewObat');
    Route::post('/input/obat/store', 'MedicineController@store')->name('storeObat');
    Route::get('/view/obat/branch/{branch_id}','MedicineController@showSupplierbyBranch')->name('viewObat');
    Route::get('/view/obat/search/branch/{branch_id}','MedicineController@loadData');
    Route::get('/view/obat/search/branch/{branch_id}/{namaobat}','MedicineController@searchName')->name('viewObatByName');
    
    Route::get('/input/karyawan', 'WorkerController@showWorkerView' )->name('inputKaryawan');
    //Route::get('/view/karyawan', 'WorkerController@showAllWorker')->name('viewKaryawan');
    Route::get('/view/karyawan/branch/{branch_id}','WorkerController@showWorkerbyBranch')->name('viewKaryawan');
    Route::post('/input/karyawan/store','WorkerController@store');
    Route::get('/view/karyawan/search/branch/{branch_id}/{namaworker}','WorkerController@searchName')->name('viewObatByName');
    
    Route::get('/input/supplyobat', 'NoteSupplierController@showNoteSupplierView')->name('inputSupplyObat');
    Route::get('/view/supplyobat/branch/{branch_id}', 'NoteSupplierController@showNoteSupplierbyBranch')->name('viewSupplyObat');
    Route::post('/input/supplyobat/store','NoteSupplierController@store');
    Route::get('/input/supplyobat/searchbyid/{branch_id}/{id}','NoteSupplierController@search');
    Route::post('/input/supplyobat/update', 'NoteSupplierController@update');
    Route::get('/input/supplyobat/delete/{id}','NoteSupplierController@delete');

    Route::post('/absensi/store','AttendanceController@store');
    Route::get('/absensi', 'AttendanceController@showAttendanceView')->name('absensi');
    
    Route::get('/transaction/add','TransactionController@showTransactionPage')->name("transactionAdd");
    Route::post('/transaction/add/save','TransactionController@store');

    Route::get('/input/salary/{branch_id}', 'SalaryController@showSalaryInputView')->name('inputSalary');
    Route::get('/view/slipgaji','SalaryController@showCetakSlipGajiView')->name('slipGaji');
    Route::post('/input/salary/update','SalaryController@updateSalary');
    
   
Route::get('/sample', function(){
    return view('transaction.sample');
});