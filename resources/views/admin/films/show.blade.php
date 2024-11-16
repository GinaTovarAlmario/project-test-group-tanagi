@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">
                            Title: {{ $film->title }}
                        </h5>
                        <p class="card-text">
                            <span class="fw-bold text-black">Director: </span> {{ $film->director }}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold text-black">Date: </span> {{ $film->date_of_release }}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold text-black">Description: </span> {{ $film->description }}
                        </p>
                        <a href="{{ route('admin.films.index') }}" class="btn btn-primary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
