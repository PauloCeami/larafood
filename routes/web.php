<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanoController;

Route::get('admin/planos', [PlanoController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});