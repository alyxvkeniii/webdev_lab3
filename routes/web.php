<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {
    $data = request()->all();
    Mail::to('mingkai103019@gmail.com')->send(new ContactMe($data));
    return redirect('/contact')->with('flash', 'Message Sent Successfully');
});