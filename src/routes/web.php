<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuidesController;

Route::get('/', function () {
    return view('welcome');
});

// CRUD для статей (без update/destroy по ТЗ)
Route::apiResource('api/articles', \App\Http\Controllers\ArticleController::class)->except(['update', 'destroy']);

// Добавление комментария к статье
Route::post('api/articles/{id}/comments', [\App\Http\Controllers\ArticleController::class, 'addC    omment']);
