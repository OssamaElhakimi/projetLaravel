<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class ModulsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Modul::all();
        return view('modul.index')->with('models', $model);
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
    
        $model = new Modul();

        $model->name = $request->input('name');

        $model->save();

        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Modul::find($id);
        return response()->json($model);
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
        $model = Modul::find($id);
        $model->name = $request->input('name');
        $model->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Modul::find($id);

        if($model){
            $model->delete();
            // return response()->json(['message' => 'Catégorie supprimée avec succès']);
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('warning', 'Impossible de trouver la catégorie');
    }
}
