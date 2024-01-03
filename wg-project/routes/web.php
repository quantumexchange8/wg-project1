<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/',[UserController::class, 'index'])->name('index');
Route::get('about',[UserController::class, 'about'])->name('about');
Route::get('faq',[UserController::class, 'faq'])->name('faq');
Route::get('contact',[UserController::class, 'contact'])->name('contact');
Route::get('service',[UserController::class, 'service'])->name('service');
Route::get('about/team',[UserController::class, 'team'])->name('about.team');
Route::get('about/approach',[UserController::class, 'approach'])->name('about.approach');
Route::get('service/wealth', [UserController::class, 'wealth'])->name('service.wealth');
