<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('contact/update/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::get('contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');
Route::post('contact', [ContactController::class, 'save'])->name('contact.save');

Route::get('/', function () {
    return view('welcome');
});
