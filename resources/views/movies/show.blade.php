@extends('layouts.app')

@section('content')
    <section class="w-100 container d-flex justify-content-center align-items-center gap-4 flex-wrap p-4 my-4">
        <div class="w-100 gap-4 d-flex">
            <img src="{{ $movie->image }}" class="col-4" alt="{{ $movie->title }}">
            <div class="p-4 col-4 d-flex flex-column gap-4">
                <h2>{{ $movie->title }}</h2>
                <div class="d-flex flex-column ms-4">
                    <h4 class="mb-4">Informazioni</h4>
                    <p class="fs-5"><strong>Titolo originale: </strong>{{ $movie->original_title }}</p>
                    <p class="fs-5"><strong>Nazionalità: </strong>{{ $movie->nationality }}</p>
                    <p class="fs-5"><strong>Data di uscita: </strong>{{ $movie->date }}</p>
                    <p class="fs-5"><strong>Valutazione: </strong>{{ $movie->vote }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
