@extends('template.template')
@section('titre')
Vous souhaitez modifier : 
<h1>{{$boisson->nomBoisson}}</h1>
@endsection
@section('content')
<div class='container'>
	<div class ='form-group'>
		<form method="post" action="{{route('modifBoisson',['id'=>$boisson->id])}}">

			{{csrf_field()}}
			{{method_field('PUT')}}

			<b>Nom Boisson</b>
			<input name='nomBoisson' type='text' class='form-control'>
			<br>

			<b>Prix Boisson</b>
			<input name='prix' type='text' class='form-control'>
			<br>
			<button type="submit" class='btn btn-default'>Valider</button>
		</form>
		
	</div>
</div>
@endsection