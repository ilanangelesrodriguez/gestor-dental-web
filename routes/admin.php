<?php

// RUTAS PARA EL ADMINISTRADOR

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CitaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\OdontologoController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProveedorController;
use App\Http\Controllers\Admin\PurchaseController;
use App\Http\Controllers\Admin\TreatmentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ServiceController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

// Ruta para los usuarios
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

// Ruta para los roles
Route::resource('roles', RoleController::class)->names('admin.roles');

// Ruta para las categorias
// Usando todos los métodos excepto la de show
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

// Ruta para los proveedores
Route::resource('proveedores', ProveedorController::class)->names('admin.proveedores');

// Ruta para los productos
Route::resource('products', ProductController::class)->names('admin.products');

// Ruta para los pacientes
Route::resource('patients', PatientController::class)->names('admin.patients');

// Ruta para los tratamientos
Route::resource('treatments', TreatmentController::class)->names('admin.treatments');

// Ruta para las compras
Route::resource('purchase', PurchaseController::class)->names('admin.purchase');

// Ruta para cambiar el estado de una compra
Route::post('cambiar-estado/{id}', [PurchaseController::class, 'cambiarEstado'])->name('admin.purchase.cambiar-estado');

// Ruta para los servicios
Route::resource('service', ServiceController::class)->names('admin.service');

// Ruta para los odontologos
Route::resource('odontologo', OdontologoController::class)->names('admin.odontologo');

//Ruta para las citas

Route::resource('cita', CitaController::class)->names('admin.citas');
