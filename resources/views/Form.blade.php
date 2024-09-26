@extends('layouts.main')
@section('container')
<h1>Create New Task</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required maxlength="255">
    </div>
    <div>
        <label for="description">Task Description:</label>
        <textarea id="description" name="description" required minlength="10">{{ old('description') }}</textarea>
    </div>
    <button type="submit">Create Task</button>
</form>
@endsection