@extends('template.template')
@section('titre')
Ajouter boisson
@endsection
@section('content')
<div class = "container">
	<div class='form-group'>
		<form method='post' action='/boissons'>
			{{csrf_field()}}
			<input type="hidden" name="_token" value="{{csrf_token()}}">

			<b>Nom boisson</b>
			<input name='nomBoisson' type="text" class="form-control" placeholder="Nom de la boisson"></input>
			<br>
			<b>Prix boisson</b>
			<input name='prix' type="text" class="form-control" placeholder="Prix de la boisson"></input>
			<br>
			<button type="submit" class='btn btn-default'>Valider</button>
		</form>
	</div>
</div>

@endsection