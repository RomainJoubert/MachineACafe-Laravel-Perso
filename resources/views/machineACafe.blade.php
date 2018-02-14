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
          @foreach ($drinkChoice as $drinkName)
          <tr>
            <td><a href="/boisson/{{$drinkName->id}}">{{ $drinkName->nomBoisson}} </a></td>
          </tr>
          @endforeach
        </tr>
      </thead>
    </table>
  </div>
  <div class="choixBoisson">
    <h1>Faites votre choix !</h1>
    <form method="post" action="{{route('ajoutVente')}}">
      {{csrf_field()}}
      <th><b>Boisson : </b></th>
      <select name="choixBoisson" class="input-lg">
        @foreach ($drinkChoice as $drinkName)
        <option>{{ $drinkName->nomBoisson}}</option>

        @endforeach
      </select>
            {{--  <option>Choissisez votre boisson</option>
          <option>Café au lait</option>
          <option>Thé</option>
          <option>Expresso</option>
          <option>Café long</option>  --}}
          <th><b>Nombre de sucre : </b></th>
          <select name="choixSucre" class="input-lg" placeholder="Combien de sucres ?">
            <option>0</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>


          <button type="submit" value="Valider">Valider</button>
        </form>
      </div>
    </div>
    @endsection
