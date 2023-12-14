@extends('layouts.app')

@section('content')

<div class="container">
    @forelse ($trains as $train)
        <div class="train card mb-3 p-3">
            <h3>{{$train->azienda}}</h3>
            <div><span>Stazione di partenza:</span> <span>{{$train->stazione_partenza}}</span></div>
            <div><span>Stazione di arrivo:</span><span>{{$train->stazione_arrivo}}</span></div>
            <div><span>Giorno di partenza:</span> <span>{{$train->giorno_partenza}}</span></div>
            <div><span>Giorno di arrivo:</span><span>{{$train->giorno_arrivo}}</span></div>
            <div><span>Orario di partenza: </span><span class="hour"><b>{{$train->orario_partenza}}</b></span></div>
            <div><span>Orario di arrivo:</span><span class="hour"><b>{{$train->orario_arrivo}}</b></span></div>
            <div><span>N carrozze:</span><span>{{$train->numero_carrozze}}</span></div>
        </div>
    @empty
        <p>Nessun treno disponibile!</p>
    @endforelse
</div>

@endsection