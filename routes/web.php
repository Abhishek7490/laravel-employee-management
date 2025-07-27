<?php
//admin controller
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

// Front Controller
use App\Http\Controllers\front\Homecontroller;

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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/',[Homecontroller::class,'home'])->name('home');
Route::get('/about-us',[Homecontroller::class,'about_us'])->name('about-us');
Route::get('/features',[Homecontroller::class,'features'])->name('features');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
     Route::resource('employees', EmployeeController::class);
});



require __DIR__.'/auth.php';
