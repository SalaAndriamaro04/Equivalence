<?php

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
/*
Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});
*/

//Formulaire de demande
use App\Http\Controllers\DemandeController;
Route::get('/', [DemandeController::class, 'create'])-> name('create');
Route::post('/demande', [DemandeController::class, 'envoiDemande'])-> name('envoiDemande');

//login et logout
use App\Http\Controllers\AuthController;
Route::get('/admin', [AuthController::class, 'login'])-> name('login');
Route::post('/admin/doLogin', [AuthController::class, 'doLogin'])-> name('doLogin');
Route::delete('/admin/logout', [AuthController::class, 'logout'])-> name('logout');

//Liste de demande
use App\Http\Controllers\HomeController;
Route::get('/dashboard', [HomeController::class, 'listDemande'])-> name('home')->middleware('auth');
//Voir chaque demande
Route::get('/dashboard/{slug}', [HomeController::class, 'voirDemande'])-> name('voirDemande')->middleware('auth');

Route::post('/envoiErreur', [HomeController::class, 'envoiErreur'])-> name('envoiErreur')->middleware('auth');

//Confirmation envoi demande au erreur
Route::post('/envoiErreur/{slug}', [HomeController::class, 'deleteDemande'])-> name('confirmErreur')->middleware('auth');

//Liste d'erreur 
Route::get('/erreur', [HomeController::class, 'listErreur'])-> name('erreur')->middleware('auth');
//Voir chaque erreur
Route::get('/erreur/{slug}', [HomeController::class, 'voirErreur'])-> name('voirErreur')->middleware('auth');

//Liste terminer
Route::get('/listTerminer', [HomeController::class, 'listTerminer'])-> name('listTerminer')->middleware('auth');

use App\Http\Controllers\PDFController;
Route::get('/listTerminer/pdf', [PDFController::class, 'index'])-> name('pdfGenerator');
Route::get('/{slug}', [PDFController::class, 'affichePrint'])-> name('affichePrint')->middleware('auth');

//Voir chaque demande terminer
Route::get('/listTerminer/{slug}', [HomeController::class, 'voirTerminer'])-> name('voirTerminer')->middleware('auth');

//Pour changer la langue des messages
use Illuminate\Support\Facades\App;
Route::get('/greeting/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'es', 'fr'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 
    // ...
});

//Liste de promotion
use App\Http\Controllers\PromotionController;
Route::get('/promotion', [PromotionController::class, 'promotion'])-> name('promotion')->middleware('auth');

//Verification dans la liste de promotion
Route::post('/verification', [PromotionController::class, 'verifPromotion'])-> name('verifPromotion')->middleware('auth');

Route::post('/terminer', [PromotionController::class, 'terminer'])-> name('terminer')->middleware('auth');

//Confirmation envoi demande au terminer
Route::get('/terminer/{slug}', [PromotionController::class, 'envoiTerminer'])-> name('confirmTerminer')->middleware('auth');

