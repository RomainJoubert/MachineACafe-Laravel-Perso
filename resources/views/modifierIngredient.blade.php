@extends('template.template')
@section('titre')
Boisson à modifier
@endsection
@section('content')
<div class='container'>
	<div class ='form-group'>
		<form method="post" action="{{route('modifIngredient',['id'=>$ingredient->id])}}">

			{{csrf_field()}}

			<b>Nom Ingredient</b>
			<input name='nomIngredient' type='text' class='form-control'>
			<br>

			<b>Stock Ingrédient</b>
			<input name='stock' type='text' class='form-control'>
			<br>
			<button type="submit" class='btn btn-default'>Valider</button>
		</form>
		
	</div>
</div>
@endsection