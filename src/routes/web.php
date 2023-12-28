<?php

use Illuminate\Support\Facades\Route;
use MHMartinez\LoginAs\app\Http\Controllers\LoginAs;

Route::group([
    'middleware' => 'web',
    'prefix' => env('LOGIN_URL', 'admin/login'),
], function () {
    Route::get('as/{id?}', [LoginAs::class, 'loginAs']);
    Route::post('as', [LoginAs::class, 'loginAsPost']);
});
