<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <form action="{{ route('register') }}" method="POST" class="bg-white p-6 rounded shadow-md w-96">
        @csrf
        <h2 class="text-2xl font-bold mb-4">Inscription</h2>

        <input type="text" name="name" placeholder="Nom" class="w-full p-2 border rounded mb-2" required>
        <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded mb-2" required>
        <input type="password" name="password" placeholder="Mot de passe" class="w-full p-2 border rounded mb-2"
            required>
        <input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe"
            class="w-full p-2 border rounded mb-2" required>

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">S'inscrire</button>
        <p class="mt-2 text-center">Déjà inscrit ? <a href="{{ route('login') }}" class="text-blue-500">Se connecter</a>
        </p>
    </form>
</body>

</html>