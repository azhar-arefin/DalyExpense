<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('/');



// Pages 

route::get('/addexpense', function () {
    return view('pages.addExpense');
})->name('addexpense');


route::get('/addIncome', function () {
    return view('pages.addIncome');
})->name('addIncome');





