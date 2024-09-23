<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Catalogos;
use App\Livewire\Configuracion;
use App\Livewire\Cte;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Modulo;
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

Route::get('/', function () {
    return view('welcome');
});

// Dashboard routes
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'dashboard'], function () {
    Route::get('/', Dashboard::class)->name('dashboard');
});

// Authentication routes
Route::group(['prefix' => 'auth'], function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
});

// Dashboard routes
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/modulo', Modulo::class)->name('modulo');
    Route::get('/configuracion', Configuracion::class)->name('configuracion');
    Route::get('/catalogos', Catalogos::class)->name('catalogos');
});
//
// Clientes routes
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'cte'], function () {
    Route::get('/', Cte::class)->name('cte');
    Route::get('/ctecategoria', Cte::class)->name('ctecategoria');
    Route::get('/ctegrupo', Cte::class)->name('ctegrupo');
    Route::get('/ctefamilia', Cte::class)->name('ctefamilia');
    Route::get('/cteae', Cte::class)->name('cteae');
    Route::get('/pais', Cte::class)->name('pais');
    Route::get('/departamento', Cte::class)->name('departamento');
    Route::get('/municipio', Cte::class)->name('municipio');
    // Route::get('/form', FormCte::class)->name('formCte');
});
