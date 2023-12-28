<?php

use Illuminate\Support\Facades\Route;
use MHMartinez\BypassLogin\app\Http\Controllers\BypassLogin;

Route::group([
    'middleware' => 'web',
    'prefix' => env('LOGIN_URL', 'admin/login'),
], function () {
    Route::get('as/{id?}', [BypassLogin::class, 'bypassLogin']);
    Route::post('as', [BypassLogin::class, 'bypassLoginPost']);
});
