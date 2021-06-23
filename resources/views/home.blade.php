@extends('layout.main')

@section('content')


<ul>
  @foreach ($movies as $movie)
  <li>Nome Film:
    {{ $movie['title'] }}
    <p>
      Podotto nel'anno:
      {{ $movie['date'] }}
    </p>
  </li>
    
  @endforeach

</ul>

@endsection