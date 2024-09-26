<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
class TaskController extends Controller
{
     public function store(Request $request)
    {
        // Aturan validasi
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:10',
        ]);

        Task::create($validatedData);

        return redirect()->route('tasks.create')->with('success', 'Task created successfully!');

    }
}



