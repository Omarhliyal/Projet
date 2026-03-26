<?php

namespace App\Http\Controllers;

use App\Models\Vedette;
use Illuminate\Http\Request;

class VedetteController extends Controller
{
    public function index()
    {
        $vedettes = Vedette::all();
        return view('vedettes.index', compact('vedettes'));
    }

    public function create()
    {
        return view('vedettes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required'
        ]);

        Vedette::create([
            'nom' => $request->nom
        ]);

        return redirect('/vedettes')->with('success', 'Vedette ajoutée');
    }

    public function edit(Vedette $vedette)
    {
        return view('vedettes.edit', compact('vedette'));
    }

    public function update(Request $request, Vedette $vedette)
    {
        $request->validate([
            'nom' => 'required'
        ]);

        $vedette->update([
            'nom' => $request->nom
        ]);

        return redirect('/vedettes')->with('success', 'Vedette modifiée');
    }

    public function destroy(Vedette $vedette)
    {
        $vedette->delete();
        return redirect('/vedettes')->with('success', 'Vedette supprimée');
    }
}
