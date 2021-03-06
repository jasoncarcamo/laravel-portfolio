<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("project")->group(function(){
    Route::post("/",[ProjectsController::class, "create_project"]);

    Route::patch("/{id}", [ProjectsController::class, "update_project"]);
    Route::delete("/{id}", [ProjectsController::class, "delete_project"]);
});
