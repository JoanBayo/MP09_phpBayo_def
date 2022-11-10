<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/',[TaskController::class, 'index']);

Route::get('/tasks',[TaskController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/contact', oller::class, 'contact']);

Route::get('/about', [PagesController::class, 'about']);
