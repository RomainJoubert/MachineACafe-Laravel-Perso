@extends('template.template')
@section('titre')
Boissons
@endsection
@section('content')
<div class = "container">
	<div class="tableauBoisson ">
		<table class = "table table-hover table-bordered">
			<thead>
				<tr class="active">
					@foreach($detailBoissons as $nomBoisson)
					<tr>
						<td>{{$nomBoisson->nomBoisson}}</td>
						
						<td><a href="/modifierBoisson/{{$nomBoisson->id}}"><button type='button' class='btn btn-success'>Modifier</button></a></td>

						<td><a href="/modifierBoisson"><button type='button' class='btn btn-danger'>Supprimer</button></a></td>
						</tr>
					@endforeach
				</tr>
			</thead>
		</table>
	</div>
	<a href="/createBoisson"><button type="button" class="btn btn-primary">Ajouter boisson</button></a>
</div>
@endsection