<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanoController;

Route::any('admin/planos/search', [PlanoController::class, 'search'])->name('planos.search');
Route::get('admin/planos', [PlanoController::class, 'index'])->name('planos.index');
Route::get('admin/plano/create', [PlanoController::class, 'create'])->name('plano.create');
Route::post('admin/plano', [PlanoController::class, 'store'])->name('plano.store');
Route::get('admin/plano/show/{id}', [PlanoController::class, 'show'])->name('plano.show');
Route::get('admin/plano/{id}/edit', [PlanoController::class, 'edit'])->name('plano.edit');
Route::put('admin/plano/{id}', [PlanoController::class, 'update'])->name('plano.update');
Route::delete('admin/plano/{id}', [PlanoController::class, 'destroy'])->name('plano.destroy');

Route::get('admin', [PlanoController::class, 'index'])->name('admin.index');

Route::get('/', function () {
    return view('welcome');
});