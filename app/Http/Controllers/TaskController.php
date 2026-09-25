<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    // Show the "add task" form
    public function create()
    {
        return view('tasks.create');
    }

    // Save a new task
    public function store(Request $request)
    {
        $request->validate([
            'task_name'   => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date'    => 'nullable|date',
        ]);

        Task::create([
            'task_name'   => $request->task_name,
            'description' => $request->description,
            'due_date'    => $request->due_date,
            'status'      => 'Pending',
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task added successfully!');
    }

    // Show the "edit task" form
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update an existing task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_name'   => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date'    => 'nullable|date',
            'status'      => 'required|in:Pending,Completed',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    // Quickly toggle status from the task list
    public function updateStatus(Task $task)
    {
        $task->status = $task->status === 'Pending' ? 'Completed' : 'Pending';
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Status updated!');
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}