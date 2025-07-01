<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view ('welcome');
});
Route::post('/test', function (Request $request) {
    // Handle the request here
    // For example, you can access the request data like this:
    // $data = $request->all();
    Log::info('Test route accessed', [
        'request_data' => $request->all(),
    ]);
    return  ('welcome');
})->withoutMiddleware([VerifyCsrfToken::class]);
