@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12 text-center text-dark fw-bold mt-3 mb-2">
                <h2> Films List:</h2>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-dark" href="{{ route('admin.films.create') }}">
                            Create New Film
                        </a>
                    </button>
                </div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Director</th>
                            <th scope="col">Date of Release</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($films as $film)
                            <tr>
                                <th scope="row">{{ $film->title }}</th>
                                <td>{{ $film->director }}</td>
                                <td>{{ $film->date_of_release }}</td>
                                <td>
                                    <a href="{{ route('admin.films.show', $film->id) }}" class="btn btn-sm btn-success me-2">Show</a>
                                    <a href="{{ route('admin.films.edit', $film->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                    {{-- <form action="{{ route('admin.films.delete', $film->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger text-white">
                                            Delete
                                        </button>
                                    </form> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <h3 class="text-center">No Films available</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
