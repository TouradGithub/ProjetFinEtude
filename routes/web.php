<?php
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FemmesController;
use App\Http\Controllers\DemandController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authweb;
use App\Http\Middleware\AutLogin;


use App\Http\Controllers\PhoneAuthController;
Route::get('TestTest',function(){
return view('test');
});

Route::get('phone-auth', [PhoneAuthController::class, 'index']);

Route::get('/admin/login', [AdminController::class, 'getLogin'])->name('getLogin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logoutAdmin');
Route::post('/loginAdmin', [AdminController::class, 'login'])->name('loginstore');

Route::group(['prefix' => 'femmes', 'middleware' => 'Authweb'], function () {
    Route::get('index', [FemmesController::class, 'index'])->name('fammes.index');
    Route::get('create', [FemmesController::class, 'create'])->name('fammes.create');
    Route::get('edit/{id}', [FemmesController::class, 'edit'])->name('fammes.edit');
    Route::post('store', [FemmesController::class, 'store'])->name('fammes.store');
    Route::post('update/{id}', [FemmesController::class, 'update'])->name('fammes.update');
    Route::post('delete/{id}', [FemmesController::class, 'delete'])->name('fammes.delete');
});

Route::group(['prefix' => 'demande', 'middleware' => 'Authweb'], function () {
    Route::get('index', [DemandController::class, 'index'])->name('demande.index');
    Route::get('create', [DemandController::class, 'create'])->name('demande.create');
    Route::post('accepter', [DemandController::class, 'accepter'])->name('demande.accepter');
    Route::get('edit/{id}', [DemandController::class, 'edit'])->name('demande.edit');
});


    // Route::group([ 'middleware' => 'AuthLogin'], function () {
        Route::get('/', [FrontController::class, 'getlogin'])->name('front.getlogin');
        Route::post('/login', [FrontController::class, 'login'])->name('front.login');
        Route::post('/register', [FrontController::class, 'register'])->name('front.register');
        Route::get('/register', [FrontController::class, 'getRegister'])->name('front.getRegister');
    // });

    // Route::group([ 'middleware' => 'checkAuth'], function () {
        Route::get('/logout', [FrontController::class, 'logout'])->name('front.logout');
        Route::get('/index', [FrontController::class, 'index'])->name('front.index');
        Route::post('/filter', [FrontController::class, 'filter'])->name('front.filter');
        Route::get('/demande/{id}', [FrontController::class, 'demand'])->name('front.demande');
    // });
