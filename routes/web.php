<?php

use App\Http\Livewire\Bicicletas\CreateBicicletas;
use App\Http\Livewire\Bicicletas\DeleteBicicletas;
use App\Http\Livewire\Bicicletas\EditBicicletas;
use App\Http\Livewire\Bicicletas\IndexBicicletas;
use App\Http\Livewire\Bicicletas\ShowBicicletas;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
use App\Http\Livewire\Ventas\VentasCreate;
use App\Http\Livewire\Ventas\VentasDelete;
use App\Http\Livewire\Ventas\VentasIndex;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Login::class)->name("login");
Route::get('/login', Login::class)->name('login');
Route::get('/usuarios/create', CreateUsuario::class)->name("createUsuarios");


Route::group(['middleware' => 'auth'], function () {
    //BICICLETAS
    Route::get('/bicicleta', IndexBicicletas::class)->name("indexBicicletas");
    Route::get('/bicicleta/create', CreateBicicletas::class)->name("createBicicletas");
    Route::get('/bicicleta/{bicicleta}/edit', EditBicicletas::class)->name('editBicicletas');
    Route::get('/bicicleta/{bicicleta}/show', ShowBicicletas::class)->name('showBicicletas');
    Route::get('/bicicleta/{bicicleta}/delete', DeleteBicicletas::class)->name('deleteBicicletas');
    //USUARIOS
    Route::get('/usuarios', IndexUsuarios::class)->name("indexUsuarios");
    Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name("editUsuarios");
    Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name("showUsuarios");
    Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name("deleteUsuarios");
    //VENTAS
    Route::get('/ventas',VentasIndex::class)->name('indexVentas');
    Route::get('/ventas/create', VentasCreate::class)->name('createVentas');
    Route::get('/ventas/{venta}/delete', VentasDelete::class)->name("deleteVentas");
});
