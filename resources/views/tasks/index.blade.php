@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-2">Create Task</a> 
    <h1>Tasks</h1>
    <ul>
        @foreach($tasks as $task)
            <li class="w-full">
                {{ $task->title }}
                <a class="ml-auto" href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
