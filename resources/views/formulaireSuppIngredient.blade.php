@extends('template.template')
@section('titre')
Voulez-vous supprimer l'ingrédient ?
@endsection
@section('content')
<div class='container'>
	<div class ='form-group'>
		<form method="post" action="{{route('supprimerIngredient',['id'=>$ingredient->id])}}">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			
			<button type="submit" class='btn btn-danger'>Supprimer</button>
			<a href="/listeIngredients/"><button type="button" class='btn btn-success'>Annuler</button></a>
		</form>
		
	</div>
</div>
@endsection