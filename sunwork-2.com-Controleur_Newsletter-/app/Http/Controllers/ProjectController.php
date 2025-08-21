<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    // Afficher tous les projets
    public function index()
    {
        $projects = Project::where('owner_id', Auth::id())->with('tasks')->get();
        return view('dashboard', compact('projects'));
    }

    // Créer un nouveau projet
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'status'      => 'nullable|string|max:255',
            'start_date'  => 'nullable|date',
            'end_date'    => 'nullable|date|after_or_equal:start_date',
        ]);

        Project::create([
            'name'        => $request->name,
            'description' => $request->description,
           'status'      => 'en_cours',
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,
            'owner_id'    => Auth::id(),
        ]);

        return redirect()->route('dashboard')->with('success');
    }

    // Suppression d'un projet
    public function destroy($id)
    {
        $project = Project::where('owner_id', Auth::id())->findOrFail($id);
        $project->delete();

        return redirect()->route('dashboard')->with('success');
    }
}
