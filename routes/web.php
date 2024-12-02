<?php

use App\Http\Controllers\example\exampleController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// === ini adalah contoh code view langsung dari route === //
// Route::get('/route', function () {
    //     var_dump("halo ini andra blade dari var_dump"); 
    //     dd("halo ini andra blade dari route dd"); 
    // });
    
// === ini adalah contoh code view langsung dari controller === //
// Route::get('/example', function(){
//     return view('example.example');
// });

// Route::get('/examplecontroller',[exampleController::class,'index']);

Route::get('/todo',[TodoController::class,'index'])->name('todo');
Route::post('/todo',[TodoController::class,'store'])->name('todo.post');
Route::put('/todo/{id}',[TodoController::class,'update'])->name('todo.update');
Route::delete('/todo/{id}',[TodoController::class,'destroy'])->name('todo.delete');
