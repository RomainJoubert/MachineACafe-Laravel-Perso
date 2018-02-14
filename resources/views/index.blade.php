@extends('template.template')
@section('titre')
  La pause s'impose !
  <br>
  @auth
  <h2>Bienvenue {{ Auth::user()->name }}</h2>
  @endauth
@endsection
@section('content')
 <a  href="machineACafe"><img class="imageCafe" alt="image tasse a café"  src="../img/imgcafe.jpg" /></a>
@endsection
