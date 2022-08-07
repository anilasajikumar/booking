<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\BookingController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route to for booking venue
Route::post('/booking', [BookingController::class, 'booking'])->name('venue.booking');
// Route to get avilable time rank for venue
Route::get('/venuescategorise', [BookingController::class, 'venuescategoriserank'])->name('venue.venuescategorise');
