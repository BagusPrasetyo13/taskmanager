<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        return view('pages.task', [
            'title' => 'New Taks',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:250',
            'due_date' => 'required|date'
        ]);

        $validateData['user_id'] = Auth::id();

        dd($validateData);
        Task::create($validateData);
    }
}
