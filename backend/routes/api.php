<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\CheklistController;
use App\Http\Controllers\CMController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum,admin'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/missions',[MissionController::class, 'show'])
->name('missions');

Route::post('checklist', [CheklistController::class, 'store'])
->middleware('auth')
->name('checklist.store');

Route::get('checklist/data', [CheklistController::class, 'show'])
->name('checklist.data');

Route::post('/message', [CMController::class, 'store'])->name('message');
Route::get('/rapport', [CMController::class, 'show'])->name('rapport');

require __DIR__.'/auth.php';
