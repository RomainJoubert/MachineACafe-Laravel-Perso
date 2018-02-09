@extends('template.template')
@section('titre')
Vous souhaitez modifier :
<h1>{{$ingredient->nom}}</h1>
@endsection
@section('content')
<div class='container'>
	<div class ='form-group'>
		<form method="post" action="{{route('modifIngredient',['id'=>$ingredient->id])}}">

			{{csrf_field()}}
			{{method_field('PUT')}}

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