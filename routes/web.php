<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

use App\Http\Controllers\CreateAccountController;

Route::get('/accountCreate', function(){
    return view('auth.createAccount');
})->name('accountCreate');

Route::get('/forgetPass', function(){
    return view('auth.forgetPassoword');
})->name('forgetPass');

