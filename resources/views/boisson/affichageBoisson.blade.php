@extends('template.template')
@section('titre')
  @foreach ($detailBoisson as $drinkName)
  <p>Nom boisson: <td>{{$drinkName->nomBoisson}}</td></p>
  <p>Prix: <tr>{{$drinkName->prix}}</tr>cts</p>
  @endforeach
@endsection
