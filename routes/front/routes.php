<?php
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\front\homecontroller;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\front\authcontroller;
use app\Http\Controllers\front\doctorcontroller;
use app\Http\Controllers\front\contactscontroller;
use app\Http\Controllers\front\majorcontroller;
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
Route::get('/',[homecontroller::class,'index'])->name('home.index');
Route::get('/login',[authcontroller::class,'index_login'])->name('login.index');
Route::get('/register',[authcontroller::class,'index_register'])->name('register.index');
Route::get('/majors',[majorcontroller::class,'index'])->name('majors.index');
Route::get('/contacts',[contactscontroller::class,'index'])->name('contacts.index');
Route::get('/doctors',[doctorcontroller::class,'index'])->name('doctor.index');
?>
