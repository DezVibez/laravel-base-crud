@extends('layouts.main')

@section('title', "Comic Corrente" )

@section('content')


        <div class="show-card d-flex justify-content-center align-items-center">

            <div class="text-center">

                <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
    
                <div>
                    {{ $comic->price }}&euro;
                </div>
    
                <div>
                    {{ $comic->title }}
                </div>
    
                <div>
                    {{ $comic->sale_date }}
                </div>
    
                <div>
                    {{ $comic->type }}
                </div>
            </div>

        </div>

@endsection