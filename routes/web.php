<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\RegisterationController;
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

Route::get('complete/application', [RegisterationController::class, 'index'])->name('complete.apply');
Route::post('complete/application/update', [RegisterationController::class, 'store'])->name('complete.apply.store');

Route::view('admission', 'front.admission.index')->name('admission');
Route::post('admission/store', [AdmissionController::class, 'store'])->name('admission.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

