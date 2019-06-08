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
    Route::post('/supplier', function() {
        $data = $request->all();
        $supplier = new Supplier($data);
        $result = $transaction->isValid();
        echo $result;
    })->name('storeSupplier');
    Route::post('/supplier/store', 'SupplierController@store');

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

    Route::get('/input/supplyobat', 'NoteSupplierController@showNoteSupplierView')->name('inputSupplyObat');
    Route::get('/view/supplyobat/branch/{branch_id}', 'NoteSupplierController@showNoteSupplierbyBranch')->name('viewSupplyObat');
    Route::post('/input/supplyobat/store','NoteSupplierController@store');

    Route::post('/absensi/store','AttendanceController@store');
    Route::get('/absensi', 'AttendanceController@showAttendanceView')->name('absensi');
    
    Route::get('/transaction/add','TransactionController@showTransactionPage')->name("transactionAdd");
    Route::get('/input/salary', 'SalaryController@showSalaryInputView')->name('inputSalary');
    Route::get('/view/slipgaji','SalaryController@showCetakSlipGajiView')->name('slipGaji');
    
   
Route::get('/sample', function(){
    return view('transaction.sample');
});