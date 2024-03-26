<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route::get('/', [EmployeeController::class, 'index']);

Route::get('/employee', [EmployeeController::class, 'createView']);
Route::post('/employee', [EmployeeController::class, 'createLogic']);

Route::get('/employee/{id}', [EmployeeController::class, 'updateView']);
Route::post('/employee/{id}', [EmployeeController::class, 'updateLogic']);