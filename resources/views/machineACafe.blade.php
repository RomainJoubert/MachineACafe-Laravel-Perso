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
     <select name="choixBoisson">
    @foreach ($drinkChoice as $drinkName)
    <form method="post" action="/boisson/{{$drinkName->id}}">
     
        <option>{{ $drinkName->nomBoisson}}</option>
    
      @endforeach
        </select>
            {{--  <option>Choissisez votre boisson</option>
          <option>Café au lait</option>
          <option>Thé</option>
          <option>Expresso</option>
          <option>Café long</option>  --}}

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
