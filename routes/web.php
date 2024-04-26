<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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

Route::post('/', [TeacherController::class, 'login'])->name('login');

Route::get('/man-hinh-chinh', function () {
    return view('home');
});

Route::get('/dang-xuat', [TeacherController::class, 'logout'])->name('logout');

Route::get('/danh-sach-lop', [SubjectController::class, 'listClass'])->name('listClass');

Route::get('/danh-sach-sinh-vien/{id}', [StudentController::class, 'listStudent'])->name('listStudent');

Route::put('/nhap-diem/{id}', [SubjectController::class, 'nhapdiem'])->name('nhapdiem');

Route::put('/thang-diem/{id}', [SubjectController::class, 'thangdiem'])->name('thangdiem');

Route::get('/danh-sach-sinh-vien-theo-dieu-kien/{subjectId}/{typeId}', [StudentController::class, 'listStudentByCondition'])->name('listStudentByCondition');

Route::get('/danh-sach-lop-ky-hoc/{courseID}/{teacherID}', [SubjectController::class, 'listClassInCourse'])->name('listClassInCourse');

Route::get('/quay-lai', function () {
    return redirect()->back();
});

Route::put('/danh-sach-sinh-vien-theo-tu-khoa/{subjectId}', [StudentController::class, 'listStudentByKey'])->name('listStudentByKey');

Route::get('/download-sample-diem/{id}', [StudentController::class, 'downloadSample'])->name('downloadSample');

Route::post('/import-diem', [StudentController::class, 'import'])->name('import');
