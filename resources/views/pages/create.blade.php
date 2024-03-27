@extends('layouts.app')

@section('content')
    <main class="container py-3">

        <h1>Create a new project</h1>

        <form action="{{ route('dashboard.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input
                    type="text"
                    class="form-control"
                    name='name'
                    id="name"
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3">
                <label for="owner" class="form-label">Owner</label>
                <input
                    type="text"
                    class="form-control"
                    name='owner'
                    id="owner"
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <div class="mb-3">
                <label for="creation_date" class="form-label">Creation Date</label>
                <input
                    type="date"
                    class="form-control"
                    name='creation_date'
                    id="creation_date"
                    aria-describedby="helpId"
                    placeholder=""
                />
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>

    </main>
@endsection