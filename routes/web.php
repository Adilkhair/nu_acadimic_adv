<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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



Route::get('/t', function () {
    return view('t');
})->middleware('auth')->name('t');


Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

 

Route::get('/gide', function () {
    return view('auth/show_gide');
})->name('show_gide');


Route::get('/daleel', function () {
    return view('auth/daleel');
})->name('daleel');


Route::post('/test',   [StudentController::class,'test'])->name('test');


 Route::post('/reg_action',   [StudentController::class,'reg_action'])->middleware('auth')->name('reg_action');

Route::get('/', function () {return view('home');})->middleware('auth')->name('welcome');
Route::get('/home', function () {return view('home');})->middleware('auth')->name('home');

Route::get('/users',   [StudentController::class,'users'])->middleware('auth')->name('users');

Route::get('/students',   [StudentController::class,'students'])->middleware('auth')->name('students');
Route::get('/user_forms/{form_id}',   [StudentController::class,'user_forms'])->middleware('auth')->name('user_forms');
Route::get('/other_forms/{form_id}',   [StudentController::class,'other_forms'])->middleware('auth')->name('other_forms');

Route::get('/student_forms/{id}',   [StudentController::class,'student'])->middleware('auth')->name('student');
Route::get('/add_student', function () {return view('morshid_add_student');})->middleware('auth')->name('add_student');
Route::get('/add_user', function () {return view('morshid_add_user');})->middleware('auth')->name('add_user');

Route::post('/create_student',   [StudentController::class,'create'])->name('create_student');
Route::post('/create_user',   [StudentController::class,'create_user'])->middleware('auth')->name('create_user');

Route::get('/getFormsTemplate/{std_id}',   [StudentController::class,'getFormsTemplate'])->middleware('auth')->name('getFormsTemplate');
Route::get('/showtForms',   [StudentController::class,'showtForms'])->middleware('auth')->name('showtForms');
Route::get('/showtForm/{id}',   [StudentController::class,'showtForm'])->middleware('auth')->name('showtForm');

Route::get('/getFormTemplate/{std_id}/{id}',   [StudentController::class,'getFormTemplate'])->middleware('auth')->name('getFormTemplate');

Route::post('/save_std_quest',   [StudentController::class,'save_std_quest'])->middleware('auth')->name('save_std_quest');
Route::get('/answers/{std_id}/{quesr_id}/{form_name}',   [StudentController::class,'answers'])->middleware('auth')->name('answers');
 
Route::post('/search_std',   [StudentController::class,'search_std'])->middleware('auth')->name('search_std');
Route::get('/delete_form/{id}',   [StudentController::class,'delete_form'])->middleware('auth')->name('delete_form');
Route::get('/delete_user/{id}',   [StudentController::class,'delete_user'])->middleware('auth')->name('delete_user');



//
 
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home');
})->name('dashboard');

 

