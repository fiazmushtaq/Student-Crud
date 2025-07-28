<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view ('category/create');
});


route::resource('category',CategoryController::class);

