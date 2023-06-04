<?php
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FemmesController;
use Illuminate\Support\Facades\Route;




// Route::get('/frontlogin', [FrontController::class, 'register'])->name('frontlogin');

Route::get('/admin/login', [AdminController::class, 'getLogin'])->name('getLogin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logoutAdmin');
Route::post('/loginAdmin', [AdminController::class, 'login'])->name('loginstore');
// Route::get('/frontregister', [FrontController::class, 'login'])->name('frontregister');

    Route::prefix('fammes')->group(function () {

        Route::get('index', [FemmesController::class, 'index'])->name('fammes.index');
        Route::get('create', [FemmesController::class, 'create'])->name('fammes.create');
        Route::get('edit/{id}', [FemmesController::class, 'edit'])->name('fammes.edit');
        Route::post('store', [FemmesController::class, 'store'])->name('fammes.store');
        Route::post('update/{id}', [FemmesController::class, 'update'])->name('fammes.update');
        Route::post('delete/{id}', [FemmesController::class, 'delete'])->name('fammes.delete');

    });
// Route::prefix('adm')->middleware('auth')->group(function () {
//     Route::get('/home', function () {
//         return view('home');
//     });
    // Route::resource('femmes','FemmesController');
// });

// Route::prefix('')->middleware('auth')->group(function () {
//     Route::get('/logout', function () {
//         return view('login');
//     });
// });
// Route::prefix('admin')->middleware('auth')->group(function () {
//     Route::get('/login', function () {
//         return view('login');
//     });
// });
