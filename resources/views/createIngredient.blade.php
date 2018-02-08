@extends('template.template')
@section('titre')
Ajouter ingrédient
@endsection
@section('content')
<div class = "container">
	<div class='form-group'>
		<form method='post' action='/listeIngredients'>
			{{csrf_field()}}
			<input type="hidden" name="_token" value="{{csrf_token()}}">

			<b>Nom de l'ingrédient</b>
			<input name='nomIngredient' type="text" class="form-control" placeholder="Nom de l'ingrédient"></input>
			<br>
			<b>Stock</b>
			<input name='stock' type="text" class="form-control" placeholder="Quantité en stock"></input>
			<br>
			<button type="submit" class='btn btn-default'>Valider</button>
		</form>
	</div>
</div>

@endsection