<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::view("react","react" );
Route::view("modal","modal" );
Route::view("dashboard","dashboard" )->name("dashboard");

Route::get("/",[\App\Http\Controllers\MainController::class,"index"])
    ->name("home");


Route::view("about","pages.about")->name("about");
Route::view("contacts","pages.contact")->name("contact");
Route::view("students","pages.alumnos")->name("students");
Route::view("projects","pages.proyectos")->name("projects")
    ->middleware("auth");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
