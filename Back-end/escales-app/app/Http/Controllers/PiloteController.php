<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pilote;

class PiloteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $pilotes = Pilote::all();
    return view('pilotes.index', compact('pilotes'));
}

public function create()
{
    return view('pilotes.create');
}

public function store(Request $request)
{
    $request->validate([
        'nom' => 'required'
    ]);

    Pilote::create([
        'nom' => $request->nom
    ]);

    return redirect('/pilotes')->with('success', 'Pilote ajouté');
}

public function edit(Pilote $pilote)
{
    return view('pilotes.edit', compact('pilote'));
}

public function update(Request $request, Pilote $pilote)
{
    $request->validate([
        'nom' => 'required'
    ]);

    $pilote->update($request->all());

    return redirect('/pilotes')->with('success', 'Pilote modifié');
}

public function destroy(Pilote $pilote)
{
    $pilote->delete();
    return redirect('/pilotes')->with('success', 'Pilote supprimé');
}
}
