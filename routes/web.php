<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddDebtorController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CelulaController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DebtorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagosController;
use App\Models\Debtor;
use App\View\Components\AddDebtor;

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
    return view('app');
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/debtors', [DebtorController::class, 'index'])->name('debtors');
Route::get('/debtors/create', [DebtorController::class, 'create'])->name('debtor.create');
Route::post('/debtors/create', [DebtorController::class, 'store'])->name('debtor.store');
Route::get('/debtor/{debtor}', [DebtorController::class, 'show'])->name('debtor.show');
Route::put('/debtor/{debtor}/edit', [DebtorController::class, 'edit'])->name('debtor.edit');
Route::get('/debtor/{debtor}/account/{account}', [AccountController::class, 'show'])->name('account.show');

Route::put('/pago/{pago}/edit', [PagosController::class, 'update'])->name('pago.update');

Route::get('/config', [ConfigController::class, 'index'])->name('config');

Route::post('/create/business', [BusinessController::class, 'store'])->name('business.store');

Route::post ('/create/celula', [CelulaController::class, 'store'])->name('celula.store');

Route::get('/pagos-masivos', [PagosController::class, 'index'])->name('pagos.masivos');




