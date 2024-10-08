<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManajemenDokumenBapernasController;
use App\Http\Controllers\PdoController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::prefix('internal')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');


    // permission
    Route::get('permissions', [PermissionController::class, 'index'])
        ->name('permissions');
    Route::get('permission/data', [PermissionController::class, 'data'])
        ->name('permissions.data');
    Route::post('permission/store', [PermissionController::class, 'store'])
        ->name('permission.store');
    Route::post('permission/destroy', [PermissionController::class, 'destroy'])
        ->name('permission.destroy');
    Route::get('permission/getDataById', [PermissionController::class, 'getDataById'])
        ->name('permission.getDataById');
    Route::post('permission/update', [PermissionController::class, 'update'])
        ->name('permission.update');



    // role
    Route::get('role', [RoleController::class, 'index'])
        ->name('role');
    Route::get('role/data', [RoleController::class, 'data'])
        ->name('role.data');
    Route::get('role/listPermission', [RoleController::class, 'listPermission'])
        ->name('role.listPermission');
    Route::post('role/store', [RoleController::class, 'store'])
        ->name('role.store');
    Route::post('role/destroy', [RoleController::class, 'destroy'])
        ->name('role.destroy');
    Route::post('role/update', [RoleController::class, 'update'])
        ->name('role.update');
    Route::get('role/listPermissionByRole', [RoleController::class, 'listPermissionByRole'])
        ->name('role.listPermissionByRole');
    Route::get('role/dataById', [RoleController::class, 'getDataById'])
        ->name('role.getDataById');



    // user
    Route::get('users', [UserController::class, 'index'])
        ->name('users');
    Route::get('users/data', [UserController::class, 'data'])
        ->name('users.data');
    Route::get('users/listRole', [UserController::class, 'listRole'])
        ->name('users.list_role');
    Route::post('users/store', [UserController::class, 'store'])
        ->name('users.store');
    Route::post('users/destroy', [UserController::class, 'destroy'])
        ->name('users.destroy');


    // manajemen dokumen
    Route::get('manajemen-dokumen-bapernas', [ManajemenDokumenBapernasController::class, 'index'])
        ->name('manajemen-dokumen-bapernas');
    Route::get('manajemen-dokumen-bapernas/create', [ManajemenDokumenBapernasController::class, 'create'])
        ->name('manajemen-dokumen-bapernas.create');
});




Route::get('pdo', [PdoController::class, 'index'])
    ->name('pdo');
Route::get('detail-pdo', [PdoController::class, 'detail_pdo'])
    ->name('detail_pdo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
