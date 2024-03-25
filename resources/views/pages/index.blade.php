@extends('layouts.app')

@section('content')
    <main class="container py-3">
        <h1>Lista dei progetti</h1>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Owner</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Slug</th>
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
                    </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection