<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskApiController;

Route::apiResource('tasks', TaskApiController::class);
