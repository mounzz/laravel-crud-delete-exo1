<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\UtilisateursController;



Route::get('/', [UtilisateursController::class, 'Utilisateurs'])->name('home');

Route::post('/create', [UtilisateursController::class, "store"]);

Route::delete('/users/{id}/delete',[UtilisateursController::class, 'destroy']);

Route::get('/users', [UsersController::class, 'Utilisateurs'])->name('membres');

Route::get('/women', [WomenController::class, 'Utilisateurs'])->name('women');

Route::get('/men', [MenController::class, 'Utilisateurs'])->name('men');

