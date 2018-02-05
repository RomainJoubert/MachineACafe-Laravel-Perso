@extends('template.template')
      
@section('titre')
    Détail de la boisson
@endsection

@section('content')
    <h3>Boisson : {{$details->nomBoisson}}</h3>
    <h3>Prix : {{$details->prix}} centimes d'euros</h3>
@endsection