@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-12 text-center">
                <h1>
                    Editing {{ $film->title }}
                </h1>
            </div>
            <form class="col-8 card bg-dark-subtle m-3" method="POST" action="{{ route('admin.films.update', $film) }}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $film->title) }}">
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="date_of_release" class="form-label">Date of Release</label>
                    <input type="text" class="form-control" id="date_of_release" name="date_of_release"
                        value="{{ old('date_of_release', $film->date_of_release) }}" placeholder="YYYY-MM-DD">
                    @error('date_of_release')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="director" class="form-label">Director</label>
                    <input type="text" class="form-control" id="director" name="director"
                        value="{{ old('director', $film->director) }}">
                    @error('director')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Brief Description</label>
                    <textarea class="form-control" id="description" name="description" rows="8">
                        {{ old('description', $film->description) }}
                    </textarea>
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success me-3">
                        Editing
                    </button>
                    <button type="reset" class="btn btn-danger me-3">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
