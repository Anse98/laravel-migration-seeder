@extends('layouts.app')

@section('content')

<div class="container">
    @forelse ($trains as $train)
        <div class="train card mb-3 p-3">
            <p>Compagnia: {{$train->azienda}}</p>
            <p>Stazione di partenza: {{$train->stazione_partenza}}</p>
            <p>Stazione di arrivo: {{$train->stazione_arrivo}}</p>
            <p>Giorno di partenza: {{$train->giorno_partenza}}</p>
            <p>Giorno di arrivo: {{$train->giorno_arrivo}}</p>
            <p>Orario di partenza: {{$train->orario_partenza}}</p>
            <p>Orario di arrivo: {{$train->orario_arrivo}}</p>
            <p>N carrozze: {{$train->numero_carrozze}}</p>
        </div>
    @empty
        <p>Nessun treno disponibile!</p>
    @endforelse
</div>

@endsection