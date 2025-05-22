<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\PrimerControlador;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======


Route::get('/test', function () {
     return view('test');
 });



Route::get('/crud', function () {
    
    $age = 20;
    $data = ['name' => 'luis', 'age' => $age];

    return view('crud/index', $data);

})->name('crudy');




Route::resource('post', PostController::class);

})->name('crudy');

>>>>>>> c36cc86ea49e3aceb329a757d7072cbfff195e23
