@extends('layouts.main')


@section('title', 'Indice Comics')


@section('content')

<h1>Comics</h1>


    <ul class="d-flex flex-wrap text-center justify-content-between">
       @foreach ($comics as $comic)
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
        @endforeach
    </ul>


@endsection