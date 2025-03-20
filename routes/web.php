<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
