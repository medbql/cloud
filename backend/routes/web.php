<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\CheklistController;
use App\Http\Controllers\CMController;

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
    return ['Laravel' => app()->version()];
});


Route::get('/missions',[MissionController::class, 'show'])
->middleware('auth')
->name('missions');

Route::post('checklist', [CheklistController::class, 'store'])
->middleware('auth')
->name('checklist.store');

Route::get('checklist/data', [CheklistController::class, 'show'])

->name('checklist.data');

Route::post('/message', [CMController::class, 'store'])
->middleware('auth')->name('message');
Route::get('/rapport', [CMController::class, 'show'])
->name('rapport');

require __DIR__.'/auth.php';
