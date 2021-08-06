<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("projects")->group(function(){
    Route::get("/", [ProjectsController::class, "get_projects"]);
});

Route::prefix("project")->group(function(){

    Route::get("/{id}", [ProjectsController::class, "get_project"]);
});