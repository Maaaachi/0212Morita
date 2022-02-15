<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExTestController;

Route::get('/{msg?}', [ExTestController::class, 'index']);