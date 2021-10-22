<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPaymentController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminInvoiceController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\SchoolFeeController;
use App\Models\Student;
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

Route::view('/', 'welcome');

Route::view('apply', 'front.apply.firstRegisteration')->name('apply');
Route::post('apply/store', [ApplyController::class, 'store'])->name('apply.store');

Route::get('main/application', [ApplyController::class, 'index'])->name('apply.main');
Route::get('complete/application', [RegisterationController::class, 'index'])->name('complete.apply');
Route::post('complete/application/information', [RegisterationController::class, 'student'])->name('complete.apply.student');
Route::post('complete/application/update', [RegisterationController::class, 'store'])->name('complete.apply.store');
Route::get('application/', [ApplyController::class, 'index'])->name('get.apply.invoice');


Route::get('main/admission', [AdmissionController::class, 'index'])->name('admission.main');
Route::get('admission/status', [AdmissionController::class, 'status'])->name('admission.status');
Route::post('admission/status/check', [AdmissionController::class, 'statusCheck'])->name('admission.status.check');
Route::get('acceptance/fee', [AdmissionController::class, 'acceptance'])->name('admission.acceptance');
Route::post('acceptance/fee/invoice', [AdmissionController::class, 'invoice'])->name('admission.acceptance.invoice');
Route::get('admission/schoolfee', [AdmissionController::class, 'fee'])->name('admission.breakdown');
Route::post('admission/schoolfee/breakdown', [AdmissionController::class, 'breakdown'])->name('admission.breakdown.get');


Route::get('main/schoolfee', [SchoolFeeController::class, 'index'])->name('schoolfee.main');
Route::post('schoolfee/store', [SchoolFeeController::class, 'store'])->name('schoolfee.store');
Route::get('schoolfee/invoice', [SchoolFeeController::class, 'invoice'])->name('schoolfee.invoice');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/students', [AdminStudentController::class, 'index'])->name('students');
    Route::get('/students/completed/registeration', [AdminStudentController::class, 'registered'])->name('students.registed');
    Route::get('/students/provided/admission', [AdminStudentController::class, 'admission'])->name('students.admission');

    Route::get('/student/{student}/registered', [AdminStudentController::class, 'student'])->name('student');
    Route::get('/student/{student}/admission', [AdminStudentController::class, 'offer'])->name('giveAdmission');

    Route::get('/payments', [AdminPaymentController::class, 'index'])->name('payments');
    Route::get('/payments/registeration', [AdminPaymentController::class, 'registeration'])->name('payments.registeration');
    Route::get('/payments/acceptance', [AdminPaymentController::class, 'acceptance'])->name('payments.acceptance');
    Route::get('/payments/schoolfee', [AdminPaymentController::class, 'schoolfee'])->name('payments.schoolfee');

    Route::get('/invoices', [AdminInvoiceController::class, 'index'])->name('invoices');
    Route::get('/invoices/registeration', [AdminInvoiceController::class, 'registeration'])->name('invoices.registeration');
    Route::get('/invoices/acceptance', [AdminInvoiceController::class, 'acceptance'])->name('invoices.acceptance');
    Route::get('/invoices/schoolfee', [AdminInvoiceController::class, 'schoolfee'])->name('invoices.schoolfee');
});


require __DIR__.'/auth.php';

