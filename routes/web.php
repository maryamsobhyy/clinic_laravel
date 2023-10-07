<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\homecontroller;
use App\Http\Controllers\front\authcontroller;
use App\Http\Controllers\front\doctorcontroller;
use App\Http\Controllers\front\contactscontroller;
use App\Http\Controllers\front\majorcontroller;
use App\Http\Controllers\admin\indexcontroller;
use App\Models\Major;
use App\Models\admin\Index;
use App\Http\Controllers\admin\maincontroller;
use App\Http\Controllers\admin\usercontroller;





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
route::get('/dashboard',[maincontroller::class,'index'])->name('admin.index');
route::get('/dashboard/majors',[indexcontroller::class,'index']);
route::get('/dashboard/users',[usercontroller::class,'index']);
Route::get('/',[homecontroller::class,'index'])->name('home.index');
Route::get('/login',[authcontroller::class,'index_login'])->name('login.index');
Route::get('/register',[authcontroller::class,'index_register'])->name('register.index');
Route::get('/majors',[majorcontroller::class,'index'])->name('majors.index');
Route::get('/contacts',[contactscontroller::class,'index'])->name('contacts.index');
Route::get('/doctors',[doctorcontroller::class,'index'])->name('doctor.index');
?>
<!-- // Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
// require __DIR__.'/front/routes.php'; -->
