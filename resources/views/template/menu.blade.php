<nav class="menuTemplate">
	<div class="links">
		<a href="../">Home</a>
		<a href="../machineACafe">Machine a café</a>
		@if (Route::has('login'))
		@auth
		
		<a href="{{route('test')}}">Liste des boissons</a>
		<a href="../recettes">Liste des Recettes</a>
		<a href="../listeIngredients">Liste des Ingrédients</a>
		<a href="../ventes">Liste des Ventes</a>
		<a href="../gestionMonnaie">Gestion Monnaie</a>

		<a href="{{ url('/home') }}"> {{ Auth::user()->name }}</a>
		<a href="{{ route('logout') }}"
		onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">
		Logout
		</a>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		{{ csrf_field() }}
	</form>
		@else
		<a href="{{ route('login') }}">Login</a>
		<a href="{{ route('register') }}">Register</a>
		@endauth
		
	@endif

	
	</div>
</nav>
