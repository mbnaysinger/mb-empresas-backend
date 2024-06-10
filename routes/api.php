<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Artisan;

Route::apiResource('empresas', EmpresaController::class);