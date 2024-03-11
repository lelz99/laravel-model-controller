@extends('layouts.main')

@section('section-movies')
<section id="movies" class="container mt-5">
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-lg-4 col-md-6">
            @include('includes.card-movie')
        </div>
        @endforeach
    </div>
</section>
@endsection