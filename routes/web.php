<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentaireController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/posts', [ProfileController::class, 'index'])->name('profile.index');
//route pour afficher la liste des posts

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//route pour afficher le formulaire de creation de post

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//route pour stocker un nouveau post

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
//route pour afficher un post specifique

//route pour les commentaires

//route pour afficher la liste des commentaires
Route::get('/commentaires', [CommentaireController::class, 'index'])->name('commentaire.index');
//route pour afficher le formulaire de creation de commentaire
Route::get('/commentaires/create', [CommentaireController::class, 'create'])->name('commentaire.create');
//route pour stocker un nouveau commentaire
Route::post('/commentaires', [CommentaireController::class, 'store'])->name('commentaire.store');

Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
