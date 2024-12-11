<?php




use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('faculty', function () {
    return view('faculty');
})->middleware(['auth', 'verified'])->name('faculty');
