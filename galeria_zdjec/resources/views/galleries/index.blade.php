@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Wassup amma gallery</h2>

        <a href="{{route("galleries.create")}}">Załaduj nowe zdjęcie!</a>

    </div>
@endsection
