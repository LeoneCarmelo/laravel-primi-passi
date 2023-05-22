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
    $paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam unde excepturi sunt placeat laboriosam officiis soluta eum consequatur. Iusto explicabo repudiandae ratione.';
    return view('about', compact('paragraph'));
})->name('about');

Route::get('/contact', function(){
    $contacts= [
        'email' => 'example@laravel.it',
        'phone' => '123456789',
    ];
    return view('contact', ['contacts' => $contacts]);
})->name('contact');
