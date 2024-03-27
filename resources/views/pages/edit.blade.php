@extends('layouts.app')

@section('content')
    <main class="container py-3">

        <h1>Modify a project</h1>

        <form action="{{ route('dashboard.projects.update', $project->slug) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input
                    type="text"
                    class="form-control
                        @error('name')
                            is-invalid
                        @enderror"
                    name='name'
                    id="name"
                    value="{{ old('name', $project->name) }}"
                />
                    @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="owner" class="form-label">Owner</label>
                <input
                    type="text"
                    class="form-control"
                    name='owner'
                    id="owner"
                    value="{{ old('owner', $project->owner) }}"
                />
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </main>
@endsection