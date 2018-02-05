@extends('template.template')
@section('titre')
Ajouter boisson
@endsection
@section('content')
<div class = "container">
	<div class='form-group'>
		<form type='post' action='boissons'>
			{{csrf_field()}}
			<b>Code boisson</b>
			<input type="text" class="form-control" placeholder="Code de la boisson"></input>
			<br>
			<b>Nom boisson</b>
			<input type="text" class="form-control" placeholder="Nom de la boisson"></input>
			<br>
			<b>Prix boisson</b>
			<input type="text" class="form-control" placeholder="Prix de la boisson"></input>
			<br>
			<button type="submit" class='btn btn-default'>Valider</button>
		</form>
	</div>
</div>

@endsection