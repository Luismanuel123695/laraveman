<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'welcome';
});

Route::get('/test', function () {
     return view('test');
 });

// Route::get('/crud', function () {
//     return view('crud/index');
// });


Route::get('/crud', function () {
    
    $age = 20;
    $data = ['name' => 'luis', 'age' => $age];

    return view('crud/index', $data);
})->name('crudy');


Route::get('/contact', function () {
    return view('contact', ['name' => 'luis']);
})->name('contact');

Route::get('/contact2', function () {
    return view('contact2');
})->name('contact2');