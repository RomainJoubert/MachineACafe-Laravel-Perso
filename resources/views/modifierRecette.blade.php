@extends('template.template')
@section('titre')
Vous souhaitez modifier le nombre de doses :
<h1>{{$recette->nom}}</h1>
@endsection
@section('content')
<div class='container'>
	<div class ='form-group'>
		<form method="post" action="/modifierRecette/{{$boisson->id}}/{{$recette->id}}">
			{{csrf_field()}}
			{{method_field('PUT')}}

			<b>Nombre de doses</b>
			<input name='quantite' type='text' class='form-control'>
			<br>
			<button type="submit" class='btn btn-default'>Valider</button>
		</form>
		
	</div>
</div>
@endsection