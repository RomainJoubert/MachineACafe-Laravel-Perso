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

			
			<button type="submit" class='btn btn-default'>Supprimer</button>
		</form>
		
	</div>
</div>
@endsection