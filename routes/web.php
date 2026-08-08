<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;

Route::get('/', function () {
    return redirect()->route('players.index');
});

Route::resource('/players', PlayerController::class);
