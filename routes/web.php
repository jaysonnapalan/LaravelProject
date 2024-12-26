<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\SportsController;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware('auth')->prefix('admin')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/users', [UsersController::class, 'index'])->name('users');
});

Route::get('/sports/register/{sport}', [SportsController::class, 'register'])->name('sports.register');
Route::post('/sports/store', [SportsController::class, 'store'])->name('sports.store');
Route::get('/sports', [SportsController::class, 'index'])->name('sports.index');
Route::get('/athletes/list', [SportsController::class, 'listAthletes'])->name('athletes.list');
// Edit athlete
Route::get('/athletes/{id}/edit', [SportsController::class, 'edit'])->name('athletes.edit');  // For the edit form (GET request)
// Update athlete
Route::put('/athletes/{id}', [SportsController::class, 'update'])->name('athletes.update');
// Delete athlete
Route::delete('/athletes/{id}', [SportsController::class, 'destroy'])->name('athletes.destroy');

