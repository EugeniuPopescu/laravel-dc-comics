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
        $dati = config("data");
        return view("comics.index", compact("comics", "dati"));
    }

    /**
     * Show the form for creating a new resource.
     */
    // restituiamo la vista per mettere tutti i dati
    // da l'interfaccia, ci metto i dati
    public function create()
    {
        $dati = config("data");

        return view("comics.create", compact("dati"));
    }

    /**
     * Store a newly created resource in storage.
     */
    // prende la ricchiesta e la salva sul database
    // dopo chiami lo store per salvare i dati
    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();
        // $comic->title = $data["title"];
        // $comic->description = $data["description"];
        // $comic->thumb = $data["thumb"];
        // $comic->price = $data["price"];
        // $comic->series = $data["series"];
        // $comic->sale_date = $data["sale_date"];
        // $comic->type = $data["type"];
        $comic->fill($data);
        $comic->save();

        // mi manda sulla pagina sulla pagina del dettaglio SHOW di quesl ID
        // PATTERN
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     */
    // serve per mostrare una singola risorsa
    // public function show(string $id)  // senza dependency-injaction
    // $comic arriva dalla route:list
    // public function show(string $id) // senza dependency-injaction
    public function show(Comic $comic)  // CON dependency-injaction
    {
        // find trova un unico prodotto
        // $comic = Comic::find($id); // senza dependency-injaction
        $dati = config("data");

        // MODO CON DEPENDENCY
        return view("comics.show", compact("comic", "dati"));

        // MODO SENZA DEPENDENCY
        // if per controllo se esiste l'id
        // if ($comic) {
        //     return view("comics.show", compact("comic", "dati"));
        // } else {
        //     abort(404);
        // }

        // MODO SENZA DEPENDENCY
        // if (!$comic) {
        //     abort(404);
        // }
        // return view("comics.show", compact("comic", "dati"));

        // MODO SENZA DEPENDENCY
        // senza dependenci injaction, ma con FindOrFail
        // $comic = Comic::findOrFail($id);
        // return view("comics.show", compact("comic", "dati"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // restituisce la vista dove vuoi modificare i dati
    public function edit(Comic $comic)
    {
        $dati = config("data");

        return view("comics.edit", compact("comic", "dati"));
    }

    /**
     * Update the specified resource in storage.
     */
    // prende i dati e li aggiorna modificati nel database
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);

        // ddd($data);

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
