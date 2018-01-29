@extends('template.template')

@section('titre')
  Séléction des boissons
@endsection

@section('content')
  <div class = "container">
  <div class="tableauBoisson ">

    <table class = "table table-hover table-bordered">
      <thead>
        <tr class="active">
            @foreach ($toto as $drinkName)
            <td><a href="/boisson/{{$drinkName->CodeBoisson}}">{{ $drinkName->NomBoisson}} </a></td>
            @endforeach
        </tr>
      </thead>
    </table>
  </div>
    <div class="choixBoisson">
      <h1>Faites votre choix !</h1>
      <form method="post" action="/boisson/{{$drinkName->CodeBoisson}}">
        <select name="choixBoisson">
          @foreach ($toto as $drinkName)
            <option><a href="/boisson/{{$drinkName->CodeBoisson}}">{{ $drinkName->NomBoisson}} </a></option>
          @endforeach
            {{--  <option>Choissisez votre boisson</option>
          <option>Café au lait</option>
          <option>Thé</option>
          <option>Expresso</option>
          <option>Café long</option>  --}}
        </select>
        <select name="choixSucre" placeholder="Combien de sucres ?"/>
          <option>Combien de sucres?</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        <input type="submit" value="Valider"/>
      </form>
    </div>
  </div>
@endsection
