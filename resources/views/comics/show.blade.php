@extends('layouts.main')

@section('title', "Comic Corrente" )

@section('content')

        <div class="main-card">

            <img src="{{ $comic->thumb }}" alt="">

            <div>
                {{ $comic->price }}
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

@endsection