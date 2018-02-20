@extends('template.template')
@section('titre')
Ajouter recette
@endsection
@section('content')
<div class = "container">
	<div class='form-group'>
		<form method='post' action='/recettes'>
			{{csrf_field()}}
			<input type="hidden" name="_token" value="{{csrf_token()}}">

			<b>Nom de la boisson</b>
			<select name='nomBoisson' type="text" class="form-control" placeholder="Nom de la boisson">
			@foreach($boissons as $boisson)
			<option>{{$boisson->nomBoisson}}</option>
			@endforeach
			</select>
			<br>
			<b>Nom de l'ingrédient</b>
			<select name='nomIngredient' type="text" class="form-control" placeholder="Nom de l'ingrédient">
				@foreach($ingredients as $ingredient)
			<option>{{$ingredient->nom}}</option>
			@endforeach
			</select>
			<br>
			<b>Nombre de dose(s)</b>
			<input type="text" name="nbDose" class='form-control' placeholder="Nombre de dose(s)"></input>
			<br>
			<button type="submit" class='btn btn-default'>Valider</button>
		</form>
	</div>
</div>

@endsection