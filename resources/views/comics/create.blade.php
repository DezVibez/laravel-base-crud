@extends('layouts.main')


@section('title', 'Crea Fumetto')


@section('content')

<form action="" method="">

<label for="title" class="form-label">Titolo Comic</label>
<input type="text" class="form-control" id="title" name="title">

<label for="descrizione" class="form-label">Descrizione</label>
<textarea type="text" class="form-control" id="descrizione" name="description"></textarea>

<label for="URL" class="form-label">URL immagine</label>
<input type="text" class="form-control" id="URL" name="thumb">

<label for="prezzo" class="form-label">Prezzo</label>
<input type="text" class="form-control" id="prezzo" name="price">

<label for="Serie" class="form-label">Serie</label>
<input type="text" class="form-control" id="Serie" name="series">

<label for="data-creazione" class="form-label">Data Pubblicazione</label>
<input type="text" class="form-control" id="data-creazione" name="sale_date">

<label for="tipo" class="form-label">Tipo</label>
<input type="text" class="form-control" id="tipo" name="type">

<a href="" class="btn btn-primary m-3">
    Invia!
    
</a>


</form>

@endsection