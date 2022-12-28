<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Task;

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

Route::get('/', function () {
    return view('welcome', ['tasks' => Task::with('user')->get()]);
});

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('create')->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'])->name('pass')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/task/create', [TaskController::class, 'create'])->name('task-create')->middleware('auth');
Route::post('/task/store', [TaskController::class, 'store'])->name('task-store')->middleware('auth');
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('task-edit')->middleware('auth');
Route::post('/task/update/{id}', [TaskController::class, 'update'])->name('task-update')->middleware('auth');
Route::post('/task/destroy/{id}', [TaskController::class, 'destroy'])->name('task-destroy')->middleware('auth');


