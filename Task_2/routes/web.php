<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\MyController;
use App\http\controllers\UserController;




Route::get('/',[MyController::class,'HomePage'])-> name('home');

Route::get('/about',[MyController::class,'AboutPage'])-> name('about');

Route::get('/teams',[MyController::class,'TeamsPage'])-> name('teams');

Route::get('/contact',[MyController::class,'ContactPage'])-> name('contact');
Route::POST('/contact',[MyController::class,'contactSubmit'])-> name('contact');

Route::get('/service',[MyController::class,'ServicePage'])-> name('service');

Route::get('/login', [UserController::class, 'signin'])->name('login');
Route::post('/login', [UserController::class, 'loginform'])->name('login');
Route::get('/registration',[UserController::class,'create'])->name('registration');
Route::post('/registration',[UserController::class,'createSubmit'])->name('registration');