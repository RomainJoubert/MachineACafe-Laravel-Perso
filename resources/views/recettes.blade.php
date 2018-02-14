@extends('template.template')
@section('titre')
  La liste des recettes 
@endsection
@section('content')
<div class = "container">
	<div class="tableauRecette ">
		<table class = "table table-hover table-bordered">	
			<tr class="active">
				<th><b>Nom Boisson</b></th> 
				<th><b>Ingrédient</b></th>
				<th><b>Dose</b></th>	
			</tr>
			
			<tr>
				@foreach($boissons as $boisson)
					@foreach($boisson->ingredients as $ingredient)
					<tr>
						<td>{{$boisson->nomBoisson}}</td>
						<td>{{$ingredient->nom}}</td>
						<td>{{$ingredient->pivot->nbDose}}</td>
					</tr>
					@endforeach
			</tr>
				@endforeach
			
		</table>
			
	</div> 
	@include("template.boutonAddRemoveModif");
@endsection





