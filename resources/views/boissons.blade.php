@extends('template.template')
@section('titre')
Boisson
@endsection
@section('content')
<div class = "container">
	<div class="tableauBoisson ">
		<table class = "table table-hover table-bordered">
			<thead>
				<tr class="active">
					@foreach($detailBoissons as $nomBoisson)
						<td><a href="/boissons/{{$nomBoisson->CodeBoisson}}">{{$nomBoisson->NomBoisson}}</a></td>
					@endforeach
				</tr>
			</thead>
		</table>
	</div>
</div>
@endsection