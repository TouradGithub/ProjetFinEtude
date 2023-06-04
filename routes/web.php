<?php
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
//use Illuminate\
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/login', function () {
    return view('login');
});*/
Route::get('/', function () {
    return view('front.index');
});

Route::get('/loginfront', function () {
    return view('front.login');
});
Route::get('/login', [FrontController::class, 'register'])->name('frontlogin');
Route::get('/register', [FrontController::class, 'login'])->name('frontregister');
Route::get('/registerfront', function () {
    return view('front.register');
});

Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('femmes','FemmesController');
});

Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/logout', function () {
        return view('login');
    });
});
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/login', function () {
        return view('login');
    });
});
