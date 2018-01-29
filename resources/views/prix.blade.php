@extends('template.template')
@section('titre')
Prix des boissons trié par ordre croissant
@endsection
@section('content')
<div class = "container">
	<div class="tableauPrix ">
		<table class = "table table-hover table-bordered">
			<thead>
				<tr class="active">
					
					@foreach($prixBoissons as $prixBoisson)
					<tr>
					<td> {{$prixBoisson->NomBoisson}}</td>
					<td> {{$prixBoisson->Prix}}</td>
					</tr>
					@endforeach
				</tr>

			</thead>
		</table>
	</div>
</div>
@endsection

