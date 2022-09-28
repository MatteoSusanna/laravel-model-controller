@extends('layout.app')

@section('titolo', 'Home')


@section('content')
   <div class="container">
        <div class="cards">
            @foreach($films as $film)
                <div class="card">
                    <h3>{{$film->title}}</h3>
                    <p><b>Titolo Originale:</b> {{$film->original_title}}</p>
                    <p><b>Nazionalità:</b> {{$film->nationality}}</p>
                    <span><b>Voto:</b> {{$film->vote}}</span>
                </div>
            @endforeach
        </div>
   </div> 
@endsection