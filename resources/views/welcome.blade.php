<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        @include("header");

        <div class="container d-flex justify-content-center align-items-center gap-4 flex-wrap">
            @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            @endforeach
        </div>

    </main>
</body>

</html>
