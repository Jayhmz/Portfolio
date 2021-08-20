<?php

use App\Http\Controllers\ContactController;
use App\Mail\PortfolioMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
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

// portfolio
Route::get('/', function () {
    return view('portfolio');
});
Route::post('portfolio', [ContactController::class, 'SendMessage'])->name('sendMessage');

// email
Route::get('mail-respose', function(){
  
})->name('sendmail');