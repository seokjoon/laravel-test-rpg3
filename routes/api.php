<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['as' => 'api.', 'middleware' => []], function() {
    Route::group(['prefix' => 'v1/pub', 'as' => 'v1.pub.', 'middleware' => ['api']], function() {
        require_once 'api_pub.php';
    });
});
