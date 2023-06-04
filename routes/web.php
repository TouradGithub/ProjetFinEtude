<?php
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FemmesController;
use Illuminate\Support\Facades\Route;






Route::get('/admin/login', [AdminController::class, 'getLogin'])->name('getLogin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logoutAdmin');
Route::post('/loginAdmin', [AdminController::class, 'login'])->name('loginstore');

    Route::prefix('fammes')->group(function () {

        Route::get('index', [FemmesController::class, 'index'])->name('fammes.index');
        Route::get('create', [FemmesController::class, 'create'])->name('fammes.create');
        Route::get('edit/{id}', [FemmesController::class, 'edit'])->name('fammes.edit');
        Route::post('store', [FemmesController::class, 'store'])->name('fammes.store');
        Route::post('update/{id}', [FemmesController::class, 'update'])->name('fammes.update');
        Route::post('delete/{id}', [FemmesController::class, 'delete'])->name('fammes.delete');

    });



    Route::get('/', [FrontController::class, 'index'])->name('front.index');
    Route::get('/login', [FrontController::class, 'getlogin'])->name('front.getlogin');
    Route::post('/login', [FrontController::class, 'login'])->name('front.login');
    Route::post('/register', [FrontController::class, 'register'])->name('front.register');
    Route::get('/register', [FrontController::class, 'getRegister'])->name('front.getRegister');
    Route::get('/logout', [FrontController::class, 'logout'])->name('front.logout');

