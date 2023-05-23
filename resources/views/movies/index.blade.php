@extends('layouts.app')

@section('content')
    <section class="container d-flex justify-content-center align-items-center gap-4 flex-wrap p-4 my-4">
        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </section>
@endsection
