@extends('template.template')
@section('titre')
Détail des boissons
@endsection

@section('content')

@foreach($detail as $detailBoisson)
<h3>Boisson : {{$detailBoisson->nomBoisson}}</h3>
<h3>Prix : {{$detailBoisson->prix}} cts</h3>
@endforeach
@endsection