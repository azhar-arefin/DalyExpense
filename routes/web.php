<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;







// Route Add Expense expenseSum
Route::get('/addexpense', function () {
    return view('pages.addExpense');
})->name('addexpense'); 
Route::post('/addexpense', [ExpenseController::class, 'addexpense'])->name('addexpense.submit');
Route::get('/expenselist',[ExpenseController::class,'expenselist'])->name('expenselist');



// Route Add Income
route::get('/addincome', function () {
    return view('pages.addIncome');
})->name('addincome');
Route::post('/addincome', [IncomeController::class, 'addincome'])->name('addincome.submit'); 
Route::get('/incomelist',[IncomeController::class,'incomelist'])->name('incomelist');


// User Controller
Route::group(['middleware'=>'guest'],function(){
// Registration
    route::get('/registration', [UserController::class,'registration'])->name('registration'); 
    Route::post('/registration',[UserController::class, 'signup'])->name('signup.submit')->middleware('throttle:5,1');

// Login
    Route::get('/login',[UserController::class, 'login'])->name('login');
    Route::post('/login',[UserController::class, 'signin'])->name('signin.submit')->middleware('throttle:5,1');
});

Route::group(['middleware'=>'auth'],function(){
    //Log Out
    Route::get('/logout', [UserController::class,'logout'])->name('logout');
    Route::get('/',[ReportController::class,'sum'])->name('/');

    // User pROFILE
});

Route::get('/profile',[UserController::class, 'profile'])->name('profile');


Route::get('/monthlyreport',[ReportController::class,'monthlyreport'])->name('monthlyreport'); 
Route::post('/monthlyreport', [ReportController::class, 'filterReport'])->name('report.filter');


Route::get('/sum',[ReportController::class,'sum'])->name('sum'); 


Route::get('/summary-report', [ReportController::class ,'allsummaryreport'])->name('summary-report');

Route::get('/calculator',[ReportController::class,'calculator'])->name('calculator');

Route::get('/calender',[ReportController::class,'calender'])->name('calender');

Route::get('/notes',[ReportController::class,'notes'])->name('notes');




Route::get('/summary-report', [ReportController::class ,'allsummaryreport'])->name('summary-report');

Route::get('/summary-report/pdf', [ReportController::class, 'pdfgenerate'])->name('summary-report.pdf');





