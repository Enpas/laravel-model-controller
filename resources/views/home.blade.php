@extends('layouts.main')

@section('content')

<div class="container">

    <h1>Movie Selection</h1>

    <div class="card-container">

      @foreach ($movies as $movie)

        <div class="card">

          <h2>{{ $movie['title'] }}</h2>

          <p>({{ $movie['original_title'] }})</p>
        
        </div>

      @endforeach

    </div>

  </div>

@endsection
