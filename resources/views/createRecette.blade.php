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
			<b><select name='nomBoisson' type="text" class="input-sm" placeholder="Nom de la boisson">
			@foreach($boissons as $boisson)
			<option>{{$boisson->nomBoisson}}</option>
			@endforeach
			</select></b>
			<br>
			<b>Nom de l'ingrédient</b>
			<b><select name='nomIngredient' type="text" class="input-sm" placeholder="Nom de l'ingrédient">
				@foreach($ingredients as $ingredient)
			<option>{{$ingredient->nom}}</option>
			@endforeach
			</select></b>
			<br>
			<b>Nombre de dose(s)</b>
			<b><input type="text" name="nbDose" class='input-sm' placeholder="Nombre de dose(s)"></input></b>
			<br>
			<button type="submit" class='btn btn-default'>Valider</button>
		</form>
	</div>
</div>

@endsection