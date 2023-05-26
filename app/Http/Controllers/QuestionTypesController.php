<?php

namespace App\Http\Controllers;

use App\Models\Questiontype;
use Illuminate\Http\Request;

class QuestionTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questionType = Questiontype::all();
        return view('questionType.index')->with('questionTypes', $questionType);
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
    
        $questionType = new Questiontype();

        $questionType->name = $request->input('name');


        $questionType->save();

        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $questionType = Questiontype::find($id);
        return response()->json($questionType);
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
        $questionType = Questiontype::find($id);
        $questionType->name = $request->input('name');
        
        $questionType->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $questionType = questionType::find($id);

        if($questionType){
            $questionType->delete();
            // return response()->json(['message' => 'Catégorie supprimée avec succès']);
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('warning', 'Impossible de trouver la catégorie');
    }
}
