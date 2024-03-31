@extends('layouts.app')

@section('content')
    <main class="container py-3">
        <h1>Show del singolo progetto</h1>
        <h3>{{ $project->name }}</h3>

        <p>Owner: {{ $project->owner }}</p>

        @if ($project->cover_image)
            <img src="{{asset('/storage/' . $project->cover_image) }}" alt="" style="width: 400px">
        @endif
    </main>
@endsection