<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PrimerControlador::class, 'index'] ) ;

Route::get('otro/{post}/{otro}', [PrimerControlador::class, 'otro'] ) ;


Route::get('/test2', function () {
    return 'test2';
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


// Route::get('/contact', function () {
//     // return redirect('/contact2', 303);
//     // return redirect()->route('contact2');
//     // return to_route('contact2');
//     return view('contact', ['name' => 'luis']);
// })->name('contact');

// Route::get('/contact2', function () {
//     return view('contact2');
// })->name('contact2');

Route::resource('post', PostController::class);