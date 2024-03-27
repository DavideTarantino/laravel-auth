@extends('layouts.app')

@section('content')
    <main class="container py-3">
        <h1>Project List</h1>

        <a class="btn btn-primary" href="{{ route('dashboard.projects.create') }}">Create</a>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->owner }}</td>
                        <td>{{ $item->creation_date }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('dashboard.projects.edit', $item->id) }}">Edit</a>

                            {{-- <form method="POST" action="{{ route('dashboard.posts.destroy', $item->id) }}">                          
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form> --}}
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection