@extends('layouts.app')

@section('content')
    <div class="card">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add Task</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                    <tr>
                        <td>{{ $task->task_name }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->due_date }}</td>
                        <td class="status-{{ strtolower($task->status) }}">{{ $task->status }}</td>
                        <td>
                            <form action="{{ route('tasks.updateStatus', $task) }}" method="POST" style="display:inline">
                                @csrf @method('PATCH')
                                <button class="btn btn-success">Toggle Status</button>
                            </form>
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline"
                                  onsubmit="return confirm('Delete this task?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5">No tasks yet. Add one!</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection