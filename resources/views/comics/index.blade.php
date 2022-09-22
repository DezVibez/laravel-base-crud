@extends('layouts.main')


@section('title', 'Indice Comics')


@section('content')

    <div class="d-flex justify-content-between">
        <h1>Comics</h1>
    
        <a href="{{ route('comics.create') }}" class="btn btn-primary text-center m-3">Crea Comic</a>

    </div>

    <ul class="d-flex flex-wrap text-center justify-content-between">
       @foreach ($comics as $comic)
       
       
            <li>
                <div class="my-card p-2 my-4">
                        <a href="{{ route('comics.show', $comic->id) }}">
                    
                    
                            <div>
                                <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
                            </div>

                            <div>
                                {{ $comic->series }}
                            </div>

                            <div>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-warning my-3">Modifica</a>
                            </div>
                            
                            <form action="{{ route('comics.destroy',$comic->id) }}" method="POST">
                                @method('DELETE')    
                                @csrf    
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Elimina
                                </button>
                            </form>

                        </a>
                </div>

            </li> 
        @endforeach
    </ul>

   


@endsection