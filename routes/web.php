<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Models\Comic;

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

// Route::get('/', function () {
//     return redirect()->route("comics.index");
// })->name("HomePage");


// restituisco la view, si può semplificare (vedi sotto)
// Route::get('/', function () {
//     $comics = Comic::all();
//     $dati = config("data");
//     return view('comics.index', compact("comics", "dati"));
// })->name("HomePage");

// Ricchiamo l'index dal controller per evitare di riscrivere il codice
Route::get("/", [ComicController::class, "index"])->name("home");

// route per il controller ComicController
// piazza tutte le rotte insieme
// COMICS
Route::resource("comics", ComicController::class);
