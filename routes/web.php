<?php

use App\Http\Controllers\UploadDataController;
use App\Http\Controllers\StudentController;
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

Route::get('/',[UploadDataController::class,'uploadForm'])->name('home');
Route::post('student',[UploadDataController::class,'uploadData'])->name('generat.certifiacts');
Route::get('/student', [StudentController::class,'addStudent']);
Route::get('/success',  function () {
    return view('pages.success');
});
// Route::get('/student-pdf', [StudentController::class,'export']);

