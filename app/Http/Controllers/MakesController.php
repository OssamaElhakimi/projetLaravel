<?php

namespace App\Http\Controllers;

use App\Models\Make;
use Illuminate\Http\Request;

class MakesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $make = Make::all();
        return view('make.index')->with('makes', $make);
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
    
        $make = new Make();

        $make->group_id = $request->input('group_id');
        $make->exam_id = $request->input('exam_id');

        $make->save();

        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $make = Make::find($id);
        return response()->json($make);
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
        $make = Make::find($id);
        $make->group_id = $request->input('group_id');
        $make->exam_id = $request->input('exam_id');
        $make->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $make = Make::find($id);

        if($make){
            $make->delete();
            // return response()->json(['message' => 'Catégorie supprimée avec succès']);
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('warning', 'Impossible de trouver la catégorie');
    }
}
