<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClearanceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CodController;
use App\Http\Controllers\DeferementController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::get('student/dashboard', function () {
    return view('student.dashboard');
})->middleware(['auth:student', 'verified'])->name('student.dashboard');

require __DIR__.'/studentauth.php';

Route::get('cod/dashboard', function () {
    return view('cod.dashboard');
})->middleware(['auth:cod', 'verified'])->name('cod.dashboard');

require __DIR__.'/codauth.php';

Route::get('staff/dashboard', function () {
    return view('staff.dashboard');
})->middleware(['auth:staff', 'verified'])->name('staff.dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('Admission')->group(function () {
    Route::get('/Reporting', [ReportController::class, 'index'])->name('reporting.index');
    Route::get('/Reporting/Report', [ReportController::class, 'create'])->name('reporting.create');
    Route::post('/Reporting', [ReportController::class, 'store'])->name('reporting.store');
    Route::get('/Clearance/Clear', [ClearanceController::class, 'index'])->name('clearance.index');
    Route::post('/Clearance', [ClearanceController::class, 'store'])->name('clearance.store');
    Route::get('/Deferement', [DeferementController::class, 'index'])->name('deferement.index');    
    Route::get('/Deferement/Defer', [DeferementController::class, 'create'])->name('deferement.create');
    Route::post('/Deferement', [DeferementController::class, 'store'])->name('deferement.store');
});

Route::prefix('Academic')->group(function () {
    Route::get('/Units/Curriculum', [StudentController::class, 'units'])->name('student.units_curriculum');
    Route::get('/Examcard', [StudentController::class, 'examcard'])->name('student.examcard');
    Route::get('/Special_Exams', [StudentController::class, 'special_exams'])->name('student.special_exams');
    Route::get('/Supplementary_Exams', [StudentController::class, 'supplementary_exams'])->name('student.supplementary_exams');
    Route::get('/Transcript', [StudentController::class, 'transcript'])->name('student.transcript');
});
