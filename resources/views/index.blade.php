@extends('layouts.app')

@section('content')

<div>
    @forelse ($trains as $train)
        <div class="train">
            {{$train}}
        </div>
    @empty
        <p>Nessun treno disponibile!</p>
    @endforelse
</div>

@endsection