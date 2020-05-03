<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo \DB::connection('mysql2')->getDatabaseName();
});
