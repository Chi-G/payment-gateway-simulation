<?php

use App\Http\Controllers\PaymentGController;
use Illuminate\Http\Request;
use App\Http\Controllers\PaymentHomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('paymentG', [PaymentGController::class, 'index'])->name('paymentG');

Route::post('/add-personal-details', [PaymentGController::class, 'personal_details']);
Route::post('/add-card-details', [PaymentGController::class, 'card_details']);
Route::post('/success-payment', [PaymentGController::class, 'success']);

Route::post('store-personal', [PaymentGController::class, 'store_personal']);
Route::post('store-card', [PaymentGController::class, 'store_card']);

// Route::get('/fail-payment', [PaymentGController::class, 'fail']);

// Route::put('update-payment/{id}', [PaymentGController::class, 'update']);

// Route::get('delete-payment/{id}', [PaymentGController::class, 'delete']);

