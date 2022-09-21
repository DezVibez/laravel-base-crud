@extends('layouts.main')


@section('title', 'Indice Comics')


@section('content')

    <div class="d-flex justify-content-between">
        <h1>Comics</h1>
    
        <a href="{{ route('comics.create') }}" class="btn btn-primary text-center m-3">Crea Nuovo</a>

    </div>

    <ul class="d-flex flex-wrap text-center justify-content-between">
       @foreach ($comics as $comic)
       <a href="{{ route('comics.show', $comic->id) }}">
        <li>
            <div class="card p-2">
                
                
                    <div>
                        <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
                    </div>

                    <div>
                        {{ $comic->series }}
                    </div>



                </div>

            </li> 
        </a>
        @endforeach
    </ul>

   


@endsection