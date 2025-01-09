<?php


use App\Http\Controllers\AddExpenseController;
use App\Http\Controllers\AddincomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');

// Route Add Expense
Route::get('/addexpense', function () {
    return view('pages.addExpense');
})->name('addexpense');
Route::post('/addexpense', [AddExpenseController::class, 'addexpense'])->name('addexpense.submit');


// Route Add Income
route::get('/addincome', function () {
    return view('pages.addIncome');
})->name('addincome');
Route::post('/addincome', [AddincomeController::class, 'addincome'])->name('addincome.submit');




