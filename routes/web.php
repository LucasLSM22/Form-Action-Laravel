<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/quemsomos', function () {
    return view('quemsomos');
});
Route::get('/contato', [ContactController::class, 'showForm']);
Route::post('/contato', [ContactController::class, 'submitForm']);