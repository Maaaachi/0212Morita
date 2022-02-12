<?php

use Illuminate\Support\Facades\Route;

Route::get('/test/{room}/{id}', function ($room, $id) {
  return "roomが" . "$room" . "で" . "idが" . "$id" . "です";
});

Route::get('/test/{greet?}', function($greet = 'Goodmorning') {
    return $greet . '=おはようございます';
});