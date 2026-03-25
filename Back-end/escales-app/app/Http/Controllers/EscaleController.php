<?php

namespace App\Http\Controllers;

use App\Models\Escale;
use App\Models\Pilote;
use App\Models\Vedette;
use App\Models\EquipeVedette;
use App\Models\Remorque;
use App\Models\EquipeRemorque;
use App\Models\Quai;
use App\Models\Prestation;
use Illuminate\Http\Request;

class EscaleController extends Controller
{
    public function index()
    {
        $escales = Escale::with([
            'pilote',
            'vedette',
            'equipeVedette',
            'remorque',
            'equipeRemorque',
            'quai',
            'prestation'
        ])->get();

        return view('escales.index', compact('escales'));
    }

    public function create()
    {
        return view('escales.create', [
            'pilotes' => Pilote::all(),
            'vedettes' => Vedette::all(),
            'equipesVedette' => EquipeVedette::all(),
            'remorques' => Remorque::all(),
            'equipesRemorque' => EquipeRemorque::all(),
            'quais' => Quai::all(),
            'prestations' => Prestation::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ship_name' => 'required',
            'cargo' => 'required',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'status' => 'required',
            'pilote_id' => 'required',
            'vedette_id' => 'required',
            'equipe_vedette_id' => 'required',
            'remorque_id' => 'required',
            'equipe_remorque_id' => 'required',
            'quai_id' => 'required',
            'prestation_id' => 'required',
        ]);

        Escale::create($request->all());

        return redirect('/escales')->with('success', 'Escale ajoutée avec succès');
    }

    public function edit(Escale $escale)
    {
        return view('escales.edit', compact('escale'));
    }

    public function update(Request $request, Escale $escale)
    {
        $escale->update($request->only([
            'ship_name',
            'cargo',
            'arrival_date',
            'departure_date',
            'status',
            'pilote_id',
            'vedette_id',
            'equipe_vedette_id',
            'remorque_id',
            'equipe_remorque_id',
            'quai_id',
            'prestation_id'
        ]));

        return redirect('/escales')->with('success', 'Escale modifiée avec succès');
    }

    public function destroy(Escale $escale)
    {
        $escale->delete();

        return redirect('/escales')->with('success', 'Escale supprimée avec succès');
    }
}
