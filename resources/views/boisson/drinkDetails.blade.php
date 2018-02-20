@extends('template.template')

@section('titre')
Détail de la boisson
@endsection

@section('content')
<h3>Boisson : {{$details->nomBoisson}}</h3>
<h3>Prix : {{$details->prix}} centimes d'euros</h3>
<h3>Recette :</h3>
<div class='container'>
<table class = "table table-hover table-bordered">
	<tr class="active" >
		<td><b>Nom Ingrédient</b></td>
		<td><b>Nb dose</b></td>
	</tr>
	@foreach($recette as $detailRecette)
	<tr>
		<td>{{$detailRecette->nom}}</td>
		<td>{{$detailRecette->pivot->nbDose}}</td>
		@endforeach
	</tr>
</table>
</div>
@endsection