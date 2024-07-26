<?php

use App\Http\Controllers\HelloWordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function() {
//     echo "Hello World";
// });

Route::get("hello/{name}", function($nama) {
    echo "Hello {$nama}, anda sedang belajar laravel, mudah bukan, bukan!";
});

Route::get("hello", "App\Http\Controllers\HelloWorldController@index");

Route::get("hello{nama}", [HelloWorldController::class, "perkenalan"]);

Route::get("/todo", [TodoController::class, "index"]);

Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');

Route::get("/todo/create", [TodoController::class, "create"])->name("todo.create");
Route::post("/todo", [TodoController::class, "store"])->name("todo.store");

Route::get("/todo/{id}", [TodoController::class, "edit"]);
Route::put("/todo/{id}", [TodoController::class, "update"])->name("todo.update");