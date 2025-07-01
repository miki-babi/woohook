<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view ('welcome');
});
Route::post('/test', function () {
    return  ('welcome');
})->withoutMiddleware([VerifyCsrfToken::class]);
