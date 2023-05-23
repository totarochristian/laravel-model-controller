@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Home page</h1>
        <p>Hello world</p>
        <a href="{{ route('books.index') }}">Vai alla lista dei libri</a>
    </section>
@endsection
