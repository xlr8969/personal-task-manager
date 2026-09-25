@extends('layouts.app')

@section('content')
    <div class="card">
        <h2>Edit Task</h2>
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Task Name</label>
            <input type="text" name="task_name" value="{{ $task->task_name }}" required>

            <label>Description</label>
            <textarea name="description" rows="3">{{ $task->description }}</textarea>

            <label>Due Date</label>
            <input type="date" name="due_date" value="{{ $task->due_date }}">

            <label>Status</label>
            <select name="status">
                <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>

            <button class="btn btn-primary">Update Task</button>
            <a href="{{ route('tasks.index') }}" class="btn">Cancel</a>
        </form>
    </div>
@endsection