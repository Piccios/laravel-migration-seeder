@extends('layout.app')

@section('page-title', 'Treni')
@section('main-content')

<h1>I treni di oggi:</h1>
<section>
    @foreach ($trains as $train)
        <div>
            <h2>{{$train->azienda}}</h2>
            <h3>Stazione di partenza:</h3><p>{{$train->stazione_di_partenza}}</p>
            <h3>Stazione di arrivo:</h3><p>{{$train->stazione_di_arrivo}}</p>
            <h3>Orario di partenza:</h3><p>{{$train->orario_di_partenza}}</p>
            <h3>Orario di arrivo:</h3><p>{{$train->orario_di_arrivo}}</p>
            <h3>Codice:</h3><p>{{$train->codice_treno}}</p>
            <h3>Numero Carrozze</h3><p>{{$train->numero_carrozze}}</p>
            <p>{{ $train->in_orario ? 'in orario' : 'in ritardo' }}</p>        </div>

    @endforeach
</section>


@endsection


