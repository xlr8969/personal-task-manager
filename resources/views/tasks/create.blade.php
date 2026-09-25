@extends('layouts.app')

@section('content')
    <div class="card">
        <h2>Add New Task</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label>Task Name</label>
            <input type="text" name="task_name" value="{{ old('task_name') }}" required>

            <label>Description</label>
            <textarea name="description" rows="3">{{ old('description') }}</textarea>

            <label>Due Date</label>
            <input type="date" name="due_date" value="{{ old('due_date') }}">

            <button class="btn btn-primary">Save Task</button>
            <a href="{{ route('tasks.index') }}" class="btn">Cancel</a>
        </form>
    </div>
@endsection