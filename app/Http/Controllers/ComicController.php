<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // elencare tutte le risorse
    public function index()
    {
        $comics = Comic::all();

        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    // restituiamo la vista per mettere tutti i dati
    // da l'interfaccia, ci metto i dati
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    // prende la ricchiesta e la salva sul database
    // dopo chiami lo store per salvare i dati
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    // serve per mostrare una singola risorsa
    // public function show(string $id)  // senza dependency-injaction
    // $comic arriva dalla route:list
    public function show(Comic $comic) // CON dependency-injaction
    {
        // find un unico prodotto
        // $comic = Comic::find($id); // senza dependency-injaction

        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // restituisce la vista dove vuoi modificare i dati
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // prende i dati e li aggiorna modificati nel database
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
