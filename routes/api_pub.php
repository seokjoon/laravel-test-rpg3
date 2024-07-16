<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//개별 메소드는 RESOURCE 보다 먼저 선언되어야 함

//////// DELETE BEGIN
//////// DELETE END

//////// GET BEGIN
//////// GET END

//////// POST BEGIN
//////// POST END

//////// RESOURCES BEGIN
Route::apiResources([
    '/players' => \App\Http\Controllers\v1\pub\Player\PlayersController::class,
]);
