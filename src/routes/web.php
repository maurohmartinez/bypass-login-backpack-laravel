<?php

use Illuminate\Support\Facades\Route;
use MHMartinez\LoginAs\app\Http\Controllers\LoginAs;

Route::group([
    'middleware' => 'web',
    'prefix' => config('login_as.login_path', 'admin/login') . '/as/{id?}',
], function () {
    Route::get('/', [LoginAs::class, 'loginAs']);
    Route::post('/', [LoginAs::class, 'loginAsPost']);
});
