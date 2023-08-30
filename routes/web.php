<?php

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProposController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\OffreController;
use App\Models\Membre;
use App\Models\Offre;

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

Route::get('/',[AcceuilController::class, 'index'])->name('acceuil'); 
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('A_propos', [ProposController::class, 'index'])->name('propos');
Route::get('Contactez_nous', [ContactController::class, 'index'])->name('contact');
//details routes
Route::get('/All_articles', [ArticleController::class, 'affiche'])->name('article.affiche');
Route::get('article_detail/{article}', [ArticleController::class, 'detail'])->name('article.detail');
//activity route
Route::get('activity_detail/{activite}', [ActivityController::class, 'detail'])->name('activity.detail');
Route::get('/All_activities', [ActivityController::class, 'allact'])->name('activity.all');
Route::get('/All_Sport_activities', [ActivityController::class, 'sport'])->name('activity.sport');
Route::get('/All_volunteers_activities', [ActivityController::class, 'volontaire'])->name('activity.volontaire');
Route::get('/All_young_activities', [ActivityController::class, 'jeunesse'])->name('activity.jeunesse');
 //offres routes
 Route::get('/all_offres', [OffreController::class, 'index2'])->name('offre.index2');
 Route::get('detail/{offre}', [OffreController::class, 'detail'])->name('offre.detail');

//photo routes
Route::get('photo_detail/{photo}', [PhotoController::class, 'detail'])->name('photo.detail');
Route::get('Galérie', [PhotoController::class, 'affiche'])->name('photo.affiche');
//membres routes
Route::get('Notre_equipe', [MembreController::class, 'affiche'])->name('membre.affiche');
//articles routes
Route::group(['middleware' => ['auth']], function () {

    Route::resource('article', ArticleController::class);
    Route::resource('photo', PhotoController::class);
    Route::resource('activite', ActivityController::class);
    Route::resource('membre', MembreController::class);
    Route::resource('offre', OffreController::class);
});
