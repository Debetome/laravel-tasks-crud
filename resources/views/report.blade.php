@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Task Report</h1>
    <p class="text-lg">Total Tasks: {{ $taskCount }}</p>
</div>
@endsection
