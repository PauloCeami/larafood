<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanoController;

Route::get('admin/planos', [PlanoController::class, 'index'])
        ->name('planos.index');


Route::get('admin/planos/create', [PlanoController::class, 'create'])
        ->name('planos.create');


Route::post('admin/planos', [PlanoController::class, 'store'])
        ->name('planos.store');



Route::get('/', function () {
    return view('welcome');
});
