<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/about', [WebController::class , 'about'])->name('web.about');
Route::get('/services', [WebController::class , 'services'])->name('web.services');
Route::get('/blog', [WebController::class , 'blog'])->name('web.blog');
Route::get('/contact', [WebController::class , 'contact'])->name('web.contact');
Route::get('/bookappointment', [WebController::class , 'bookappointment'])->name('web.bookappointment');
 Route::get('/student', [WebController::class , 'get_data'])->name('web.student');


