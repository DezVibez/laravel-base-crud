@extends('layouts.main')


@section('title', 'Modifica Fumetto')


@section('content')

<form action="{{ route('comics.update', $comic->id ) }}" method="POST">

@csrf
@method('PUT')

<label for="title" class="form-label">Titolo Comic</label>
<input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">

<label for="descrizione" class="form-label">Descrizione</label>
<textarea type="text" class="form-control" id="descrizione" name="description"> {{ $comic->description }} </textarea>

<label for="URL" class="form-label">URL immagine</label>
<input type="text" class="form-control" id="URL" name="thumb" value="{{ $comic->thumb }}">

<label for="prezzo" class="form-label">Prezzo</label>
<input type="text" class="form-control" id="prezzo" name="price" value="{{ $comic->price }}">

<label for="Serie" class="form-label">Serie</label>
<input type="text" class="form-control" id="Serie" name="series" value="{{ $comic->series }}">

<label for="data-creazione" class="form-label">Data Pubblicazione</label>
<input type="text" class="form-control" id="data-creazione" name="sale_date" value="{{ $comic->sale_date }}">

<label for="tipo" class="form-label">Tipo</label>
<input type="text" class="form-control" id="tipo" name="type" value="{{ $comic->type }}">

<a href="" >

  <input type="submit" class="btn btn-primary m-3" value= "Modifica">
    
</a>


</form>

@endsection