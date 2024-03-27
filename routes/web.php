<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

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

Route::post('/step_1', [FormController::class, 'step_form_1'])->name('submit-memorial-form');
Route::get('/step_2', [FormController::class, 'step_form_2'])->name('step_two_form');
Route::post('/step_3', [FormController::class, 'step_form_3'])->name('step_3');
Route::post('/step_4', [FormController::class, 'step_form_4'])->name('step_4');
Route::post('/step_5', [FormController::class, 'step_form_5'])->name('step_5');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/resources', function () { return view('resources'); })->name('resources');
Route::get('/testimonials', function () { return view('testimonials'); })->name('testimonials');
Route::get('/plans', function () { return view('plans'); })->name('plans');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contactus');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
