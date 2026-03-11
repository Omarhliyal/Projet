<?php

namespace App\Http\Controllers;

use App\Models\Escale;
use App\Models\Pilote;
use App\Models\Machine;
use App\Models\Quai;
use App\Models\Service;
use Illuminate\Http\Request;

class EscaleController extends Controller
{
    /**
     * Display a listing of escales
     */
    public function index()
    {
        $escales = Escale::with(['pilote','machine','quai','service'])->get();
        return view('escales.index', compact('escales'));
    }

    /**
     * Show the form to create a new escale
     */
    public function create()
    {
        $pilotes = Pilote::all();
        $machines = Machine::all();
        $quais = Quai::all();
        $services = Service::all();

        return view('escales.create', compact('pilotes','machines','quais','services'));
    }

    /**
     * Store a new escale in database
     */
    public function store(Request $request)
    {
        $request->validate([
            'ship_name' => 'required',
            'cargo' => 'required',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'status' => 'required',
            'pilote_id' => 'required',
            'machine_id' => 'required',
            'quai_id' => 'required',
            'service_id' => 'required',
        ]);

        Escale::create([
            'ship_name' => $request->ship_name,
            'cargo' => $request->cargo,
            'arrival_date' => $request->arrival_date,
            'departure_date' => $request->departure_date,
            'status' => $request->status,
            'pilote_id' => $request->pilote_id,
            'machine_id' => $request->machine_id,
            'quai_id' => $request->quai_id,
            'service_id' => $request->service_id,
        ]);

        return redirect('/escales')->with('success', 'Escale ajoutée avec succès');
    }

    /**
     * Display a specific escale
     */
    public function show(Escale $escale)
    {
        return view('escales.show', compact('escale'));
    }

    /**
     * Show the form for editing
     */
    public function edit(Escale $escale)
    {
        $pilotes = Pilote::all();
        $machines = Machine::all();
        $quais = Quai::all();
        $services = Service::all();

        return view('escales.edit', compact('escale','pilotes','machines','quais','services'));
    }

    /**
     * Update an escale
     */
    public function update(Request $request, Escale $escale)
    {
        $request->validate([
            'ship_name' => 'required',
            'cargo' => 'required',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'status' => 'required',
        ]);

        $escale->update($request->all());

        return redirect('/escales')->with('success', 'Escale modifiée avec succès');
    }

    /**
     * Delete an escale
     */
    public function destroy(Escale $escale)
    {
        $escale->delete();

        return redirect('/escales')->with('success', 'Escale supprimée avec succès');
    }
}
