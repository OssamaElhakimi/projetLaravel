<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $answers= Answer::all();
        return view('answer.index')->with('answers', $answers);
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
    
        $answer = new Answer();

        $answer->name = $request->input('name');
        $answer->exam_id = $request->input('exam_id');

        $answer->save();

        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $answer = Answer::find($id);
        return response()->json($answer);
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
        $answer = Answer::find($id);

        $answer->name = $request->input('name');
        $answer->exam_id = $request->input('exam_id');

        $answer->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $answer = Answer::find($id);

        if($answer){
            $answer->delete();
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('warning', 'Impossible de trouver la catégorie');
    }
}
