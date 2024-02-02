<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recettes = Recette::all();
        return view('home', compact('recettes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_recette');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            "titre" => "required",
            "recette" => "required",
            "ingredient" => "required",
        ]);
        $imageName = time() . '.' .  $request->file('image')->extension();

        $request->image->move(public_path("storage"), $imageName);

        $incomingFields["image"] = $imageName;

        Recette::create($incomingFields);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recette $recettes)
    {
        
    }
    
    public function showSingle(Recette $recettes)
    {
        return view('recette_single', compact('recettes'));   
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recette $recette)
    {
        return view("update_recette",  ['recette' => $recette]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recette $recette)
    {
        $incomingFields = $request->validate([
            'titre' => 'required',
            'recette' => 'required',
            'ingredient' => 'required',
        ]);
    
        $imageName = time() . '.' . $request->file('image')->extension();
        $request->image->move(public_path("storage"), $imageName);
    
        $incomingFields["image"] = $imageName;
    
    
        $recette->update($incomingFields);
    
        return redirect("/");
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recette $recette)
    {
        $recette->delete();
        return redirect('/');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Perform your search logic using the $query variable

        // Example: Fetch results from a database
        $results = Recette::where('titre', 'like', '%' . $query . '%')->get();

        // Return the view with the search results
        return view('search_results', ['results' => $results, 'query' => $query]);
    }

}
