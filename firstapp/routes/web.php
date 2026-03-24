<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\App\Models\Student;

// Route::get('/', function () {
//     return view('index');
// });

// database migration 

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/about', [WebController::class , 'about'])->name('web.about');
Route::get('/services', [WebController::class , 'services'])->name('web.services');
Route::get('/blog', [WebController::class , 'blog'])->name('web.blog');
Route::get('/contact', [WebController::class , 'contact'])->name('web.contact');
Route::get('/bookappointment', [WebController::class , 'bookappointment'])->name('web.bookappointment');
Route::get('/student', [WebController::class , 'get_data'])->name('web.student');
Route::get('/add', [WebController::class, 'newData'])->name('web.student');
Route::get('/dataUpdate', [WebController::class, 'updateData'])->name('web.student');
Route::get('/delete', [WebController::class, 'dropData'])->name('web.student');

// appointment Data
 Route::get('/appointment', [WebController::class, 'appointmentData'])->name('web.appointmentData');
 Route::get('/appointData',[WebController::class,'appointmentNewData'])->name('web.appointmentData');
 