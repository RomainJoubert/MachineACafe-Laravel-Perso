@extends('template.template')
@section('titre')
Boissons triées par ordre alphabétique
@endsection
@section('content')
<div class = "container">
	<div class="tableauBoisson ">
		<table class = "table table-hover table-bordered">
			<thead>
				<tr class="active">
					@foreach($detailBoissons as $nomBoisson)
					<tr>
						<td>{{$nomBoisson->id}}{{$nomBoisson->nomBoisson}}</td>
					</tr>
					@endforeach
				</tr>
			</thead>
		</table>
	</div>
</div>
@endsection