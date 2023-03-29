<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
     return redirect('login');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard',[MainController::class, 'dashboard'])->name('dashboard');

    Route::get('/deposit',[MainController::class, 'deposit'])->name('deposit');

    Route::post('/deposit',[MainController::class, 'store'])->name('deposit-store');

    Route::get('/withdraw',[MainController::class, 'withdraw'])->name('withdraw');

    Route::post('/withdraw',[MainController::class, 'withdraw_store'])->name('withdraw-store');

    Route::get('/transfer',[MainController::class, 'transfer'])->name('transfer');

    Route::post('/transfer',[MainController::class, 'transfer_store'])->name('transfer-store');

    Route::get('/statement',[MainController::class, 'statement'])->name('statement');

});



//->middleware(['auth'])

require __DIR__.'/auth.php';
