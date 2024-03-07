<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveDepot;
use App\Models\depot;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class transfertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administration.pages.transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generation_matricule = Str::random(7);
        return view('administration.pages.transaction.creation', compact('generation_matricule'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return view('administration.pages.transaction.modifier');

    }

    /**
     * Display the specified resource.
     */
    // La fonction de creation d'un nouveau depot
    public function show(depot $Depot, saveDepot $request)
    {
        try {
            $Depot->matricule = $request->matricule;
            $Depot->nom_emetteur = $request->nom_emetteur;
            $Depot->nom_recepteur = $request->nom_recepteur;
            $Depot->telephone = $request->telephone;
            $Depot->bl_no = $request->bl_no;
            $Depot->montant = $request->montant;
            $Depot->date_depot = $request->date_depot;
            $Depot->motif = $request->motif;
            $Depot->somme = $request->somme;
            $Depot->users_id = 1;
            $Depot->save();
            return back()->with('message', 'La création d\'un dépot a été creer avec success...');
        } catch (\Throwable $e) {
            dd($e);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
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
