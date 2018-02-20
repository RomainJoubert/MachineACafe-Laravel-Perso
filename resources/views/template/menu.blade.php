<nav class="menuTemplate">
	<div class="links">
		<a href="{{route('index')}}">Home</a>
		<a href="{{route('machine')}}">Machine à café</a>
		@if (Route::has('login'))
		@auth
			<a href="{{route('boissons')}}">Liste des boissons</a>
			<a href="{{route('recettes')}}">Liste des Recettes</a>
			<a href="{{route('ingredients')}}">Liste des Ingrédients</a>
			<a href="{{route('ventes')}}">Liste des Ventes</a>
			<a href="{{route('monnaie')}}">Gestion Monnaie</a>
			<a href="{{ url('/home') }}"> {{ Auth::user()->name }}</a>
			<a href="{{ route('logout') }}"
				onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">
				Logout
			</a>
	<a href="{{ route('register') }}">Register</a>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
	@else
	<a href="{{ route('login') }}">Login</a>
		@endauth

	@endif

	
	</div>
</nav>
