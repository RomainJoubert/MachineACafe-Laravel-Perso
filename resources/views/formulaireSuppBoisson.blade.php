@extends('template.template')
@section('titre')
Voulez-vous supprimer :
<h1>{{$boisson->nomBoisson}}</h1>


@endsection
@section('content')
<div class='container'>
	<div class ='form-group'>
		<form method="post" action="{{route('supprimerBoisson',['id'=>$boisson->id])}}">

			{{csrf_field()}}
			{{method_field('DELETE')}}

			
			<button type="submit" class='btn btn-danger'>Supprimer</button>
			<a href="/boissons/"><button type="button" class='btn btn-default'>Annuler</button></a>
		</form>
		
	</div>
</div>
@endsection