<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\crudController;

Route::get('/', [crudController::class, 'template']);
Route::post('add', [crudController::class, 'add_phone']);
Route::get('phone_list', [crudController::class, 'phone_list']);