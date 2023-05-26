<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('user.index')->with('users', $user);
    }
    public function getEnseignant()
    {
        // $user = User::all();
        $enseignant = User::where('role', 'enseignant')->get();
        // return response()->json($clients);
        return view('enseignant.index')->with('enseignants', $enseignant);
    }
    public function getEtudiant()
    {
        // $user = User::all();
        $etudiant = User::where('role', 'etudiant')->get();
        // return response()->json($clients);
        return view('etudiant.index')->with('etudiants', $etudiant);
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
    
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return redirect()->back()->with('success', 'Data added successfully');
    }
    public function storeEnseignant(Request $request)
    {
    
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = 'enseignant';
        $user->password = $request->input('password');

        $user->save();

        return redirect()->back()->with('success', 'Data added successfully');
    }
    public function storeEtudiant(Request $request)
    {
    
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = 'etudiant';
        $user->password = $request->input('password');

        $user->save();

        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
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
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');


        $user->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }
    public function updateEnseignant(Request $request, string $id)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = 'enseignant';
        $user->password = $request->input('password');


        $user->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }
    public function updateEtudiant(Request $request, string $id)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = 'etudiant';
        $user->password = $request->input('password');


        $user->save();
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if($user){
            $user->delete();
            // return response()->json(['message' => 'Catégorie supprimée avec succès']);
            return redirect()->back()->with('success', 'Data deleted successfully');
        }
        return redirect()->back()->with('warning', 'Impossible de trouver la catégorie');
    }
}
