<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('/tentang-kami', function () {return view('about');})->name('about');
Route::get('/saran', function () {return view('saran');})->name('saran');
Route::get('/pre-quiz', function () {return view('pre-quiz');})->name('pre-quiz');
Route::get('/quiz', function () {return view('quiz');})->name('quiz');
Route::get('/cond-quiz', function () {return view('cond-quiz');})->name('cond-quiz');
Route::get('/after-quiz', function () {return view('after-quiz');})->name('after-quiz');
Route::get('/result', function () {return view('result');})->name('result');
Route::get('/tips', function () {return view('tips');})->name('tips');
