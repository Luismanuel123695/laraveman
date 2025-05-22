<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\PostController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function () {
     return view('test');
 });



Route::get('/crud', function () {
    
    $age = 20;
    $data = ['name' => 'luis', 'age' => $age];

    return view('crud/index', $data);

})->name('crudy');




Route::get('/crud/create', function () {
    return view('crud/create');
})->name('crud.create');

Route::resource('post', PostController::class);