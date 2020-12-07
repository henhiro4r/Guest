<?php

use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Auth\ActivationController;
use App\Http\Controllers\Creator\EventController as CreatorEventController;
use App\Http\Controllers\Creator\GuestController as CreatorGuestController;
use App\Http\Controllers\Creator\PageController as CreatorPageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\User\GuestController as UserGuestController;
use App\Http\Controllers\User\PageController as UserPageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', [PageController::class, 'index'])->name('web.index');

Route::get('activate', [ActivationController::class, 'activate'])->name('activate');

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('dashboard', [AdminPageController::class, 'dashboard'])->name('dashboard');
    Route::get('admin', [AdminUserController::class, 'admin'])->name('admin');
    Route::get('creator', [AdminUserController::class, 'creator'])->name('creator');

    Route::post('user/deactivate', [AdminUserController::class, 'deactivate'])->name('user.deactivate');
    Route::post('user/activate', [AdminUserController::class, 'activate'])->name('user.activate');

    Route::post('event/close', [AdminEventController::class, 'close'])->name('event.close');;
    Route::post('event/open', [AdminEventController::class, 'open'])->name('event.open');

    Route::resource('users', AdminUserController::class);
    Route::resource('events', AdminEventController::class)->except('create');
});

Route::group([
    'middleware' => 'creator',
    'prefix' => 'creator',
    'as' => 'creator.'
], function () {
    Route::get('dashboard', [CreatorPageController::class, 'dashboard'])->name('dashboard');

    Route::post('event/close', [CreatorEventController::class, 'close'])->name('event.close');
    Route::post('event/open', [CreatorEventController::class, 'open'])->name('event.open');

    Route::post('guests/{id}/approve', [CreatorGuestController::class, 'approve'])->name('guests.approve');
    Route::post('guests/{id}/decline', [CreatorGuestController::class, 'decline'])->name('guests.decline');

    Route::resource('guests', CreatorGuestController::class);
    Route::resource('events', CreatorEventController::class);
});

Route::group([
    'middleware' => 'user',
    'prefix' => 'user',
    'as' => 'user.'
], function () {
    Route::get('dashboard', [UserPageController::class, 'dashboard'])->name('dashboard');

    Route::resource('events', UserGuestController::class);
});
