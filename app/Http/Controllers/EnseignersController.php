<?php

namespace App\Http\Controllers;

use App\Models\Enseigner;
use Illuminate\Http\Request;

class EnseignersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enseigner = Enseigner::all();
        return view('enseigner.index')->with('enseigners', $enseigner);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $enseigner = new Enseigner();

        $enseigner->teacher_id = $request->input('teacher_id');
        $enseigner->modul_id = $request->input('modul_id');

        $enseigner->save();

        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enseigner = Enseigner::find($id);
        return response()->json($enseigner);
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
        $enseigner = Enseigner::find($id);
        $enseigner->teacher_id = $request->input('teacher_id');
        $enseigner->modul_id = $request->input('modul_id');


        $enseigner->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enseigner = Enseigner::find($id);

        if($enseigner){
            $enseigner->delete();
            // return response()->json(['message' => 'Catégorie supprimée avec succès']);
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('warning', 'Impossible de trouver la catégorie');
    }
}
