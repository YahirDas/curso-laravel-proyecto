<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\ProductosController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('inicial', function () {
    return view('inicial');
});

Route::get('php', function () {
    return view('php');
});

Route::get('laravel', function () {
    return view('laravel');
});


Route::get('composer', function () {
    return view('composer');
});

Route::get('/suma', [SumaController::class,'index']);
Route::post('/suma',[SumaController::class,'suma']);

Route::get('/inicial',[PaginasController::class,'inicial']);
Route::get('/composer',[PaginasController::class,'composer']);
Route::get('/laravel',[PaginasController::class,'laravel']);
Route::get('/php',[PaginasController::class,'php']);

Route::get('/productos',[ProductosController::class,'index']);
