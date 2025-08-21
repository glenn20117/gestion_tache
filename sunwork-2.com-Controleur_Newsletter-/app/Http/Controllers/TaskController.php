<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Création d'une tâche
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'project_id' => 'required|exists:projects,id',
            'description'=> 'nullable|string',
        ]);

       Task::create([
            'name'        => $request->name,
            'project_id'  => $request->project_id,
            'description' => $request->description,
            'status'      => $request->status ?? 'en_cours', 
]);

        return redirect()->route('dashboard')->with('success');
    }

    // Suppression d'une tâche
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->back()->with('success');
    }
}
