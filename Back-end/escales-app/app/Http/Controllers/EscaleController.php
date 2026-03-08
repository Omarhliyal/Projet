<?php

namespace App\Http\Controllers;

use App\Models\Escale;
use Illuminate\Http\Request;

class EscaleController extends Controller
{
    /**
     * Display a listing of escales
     */
    public function index()
    {
        $escales = Escale::all();
        return view('escales.index', compact('escales'));
    }

    /**
     * Show the form to create a new escale
     */
    public function create()
    {
        return view('escales.create');
    }

    /**
     * Store a new escale in database
     */
    public function store(Request $request)
    {
        $request->validate([
            'ship_name' => 'required',
            'cargo' => 'required',
            'port' => 'required',
            'pilot_name' => 'required',
            'tugboats' => 'required',
            'machine_operator' => 'required',
            'equipment_used' => 'required',
            'services' => 'required',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
            'status' => 'required',
        ]);

        Escale::create([
            'ship_name' => $request->ship_name,
            'cargo' => $request->cargo,
            'port' => $request->port,
            'pilot_name' => $request->pilot_name,
            'tugboats' => $request->tugboats,
            'machine_operator' => $request->machine_operator,
            'equipment_used' => $request->equipment_used,
            'services' => $request->services,
            'arrival_date' => $request->arrival_date,
            'departure_date' => $request->departure_date,
            'status' => $request->status,
        ]);

        return redirect('/escales')->with('success', 'Escale added successfully');
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
        return view('escales.edit', compact('escale'));
    }

    /**
     * Update an escale
     */
    public function update(Request $request, Escale $escale)
    {
        $request->validate([
            'ship_name' => 'required',
            'cargo' => 'required',
            'port' => 'required',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|date',
        ]);

        $escale->update($request->all());

        return redirect('/escales')->with('success', 'Escale updated successfully');
    }

    /**
     * Delete an escale
     */
    public function destroy(Escale $escale)
    {
        $escale->delete();

        return redirect('/escales')->with('success', 'Escale deleted successfully');
    }
}
