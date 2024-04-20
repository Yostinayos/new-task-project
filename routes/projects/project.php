<?php

use App\Http\Controllers\Projects\ProjectController;
use Illuminate\Support\Facades\Route;
Route::resource('projects',ProjectController::class)->except(['store','update','destroy']);

Route::post('projects',[ProjectController::class,'store'])->name('projects.store');
Route::put('projects',[ProjectController::class,'update'])->name('projects.update');
Route::delete('projects',[ProjectController::class,'destroy'])->name('projects.delete');


