<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Modul;
use App\Models\User;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exam::all();
        $moduls = Modul::all();
        $enseignant = User::where('role', 'enseignant')->get();
        return view('exam.index', ['exams'=> $exams,'moduls' => $moduls,'enseignants' => $enseignant]);
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
    
        $exam = new Exam();

        $exam->name = $request->input('name');
        $exam->teacher_id = $request->input('enseignant_id');
        $exam->modul_id = $request->input('modul_id');

        $exam->save();

        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exams = Exam::find($id);
        return response()->json($exams);
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
        $exam = Exam::find($id);
        $exam->teacher_id = $request->input('enseignant_id');
        $exam->modul_id = $request->input('modul_id');

        $exam->name = $request->input('name');

        $exam->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exam = Exam::find($id);

        if($exam){
            $exam->delete();
            // return response()->json(['message' => 'Catégorie supprimée avec succès']);
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('warning', 'Impossible de trouver la catégorie');
    }
}
