<?php

use Package\Adduser\Http\Controllers\AdduserController;
//use Illuminate\Http\Request;
    Route::get('/user',[AdduserController::class, 'index']);
    Route::post('adduser',[AdduserController::class, 'store']);


