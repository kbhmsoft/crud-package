<?php

use Illuminate\Support\Facades\Route;
use Khalid\CrudPackage\Http\Controllers\CrudController;

Route::middleware('web')->group(function () {
    Route::resource('crud', CrudController::class);
});