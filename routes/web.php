<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\StudentController;
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

//Route::get('/', [EventController::class, 'index'])->name('index');
//Route::get('edit/{event}', [EventController::class, 'edit'])->name('event.edit');
//
//Route::view('add','event.addEvent')->name('addEvent');
//Route::post('add', [EventController::class, 'store'])->name('event.store');
//
//Route::patch('update/{event}', [EventController::class, 'update'])->name('event.update');
//Route::delete('delete/{event}', [EventController::class, 'destroy'])->name('event.delete');
Route::get('/', function () {
    return redirect()->route('event.index');
});

Route::resource('event', EventController::class);


//Route::get('/', [StudentController::class, 'index'])->name('index');
//Route::get('student/{student}', [StudentController::class, 'edit'])->name('student.edit');
//Route::patch('update/{student}', [StudentController::class, 'update'])->name('student.update');
//Route::delete('delete/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
//
//Route::view('addStudent', 'student.addStudent')->name('student.create');
//Route::post('create', [StudentController::class, 'store'])->name('student.store');

Route::resource('student', StudentController::class);
