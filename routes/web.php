<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('kessai');
});

Route::get('/user/payment', 'User\PaymentController@getCurrentPayment')->name('user.payment');
Route::get('kessai', 'User\PaymentController@getPaymentForm')->name('kessai');
Route::post('/user/payment/store', 'User\PaymentController@storePaymentInfo')->name('user.payment.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
