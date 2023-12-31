<?php

use App\Http\Controllers\TaskController;
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

Route::get('/tasks', [TaskController::class, 'index'])->name('task');
Route::post('/tasks', [TaskController::class, 'store'])->name('task');
Route::get('/tasks/edit/{id}', [TaskController::class, 'show'])->name('task.edit');
Route::patch('/tasks/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('task.destroy');