<?php

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

Route::get('/', function () {
    $home = 'Home';
    $about = 'About';
    $contact = 'Contact';
    return view('home', compact('home', 'about', 'contact'));
});

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/contact', function(){
    $contacts= [
        'email' => 'example@laravel.it',
        'phone' => '123456789',
    ];
    return view('contact');
})->name('contact', ['contacts' => $contacts]);
