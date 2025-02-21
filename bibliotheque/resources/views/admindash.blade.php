<h1>Bienvenue sur votre tableau de bord administrateur</h1>
<a href="{{ route('logout') }}"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>