<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('employee', [App\Http\Controllers\EmployeeController::class, 'index']);

Route::get('employee/{id}', [App\Http\Controllers\EmployeeController::class, 'show']);

Route::post('employee', [App\Http\Controllers\EmployeeController::class, 'store']);

Route::put('employee', [App\Http\Controllers\EmployeeController::class, 'store']);

Route::delete('employee/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy']);

