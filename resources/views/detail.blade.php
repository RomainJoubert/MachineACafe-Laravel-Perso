@extends('template.template')
@section('titre')
Détail des boissons
@endsection

@section('content')

@foreach($detail as $detailBoisson)
<h3>Boisson : {{$detailBoisson->NomBoisson}}</h3>
<h3>Prix : {{$detailBoisson->Prix}} cts</h3>
@endforeach
@endsection