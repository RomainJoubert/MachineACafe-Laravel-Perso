@extends('template.template')
@section('titre')
Vous voulez supprimer la recette :
<h1>{{$recette->nom}}</h1>
{{-- {{dd($recette->id)}} --}}
@endsection
@section('content')
<div class='container'>
	<div class ='form-group'>
		<form method="post" action="{{route('supprimerRecette',['id'=>$recette->id,'boisson_id'=>$boisson->id])}}">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			
			<button type="submit" class='btn btn-danger'>Supprimer</button>
			<a href="/recettes/"><button type="button" class='btn btn-success'>Annuler</button></a>
		</form>
		
	</div>
</div>
@endsection