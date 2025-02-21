<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <form action="{{ route('login') }}" method="POST" class="bg-white p-6 rounded shadow-md w-96">
        @csrf
        <h2 class="text-2xl font-bold mb-4">Connexion</h2>

        <input type="email" name="email" placeholder="Email" class="w-full p-2 border rounded mb-2" required>
        <input type="password" name="password" placeholder="Mot de passe" class="w-full p-2 border rounded mb-2"
            required>

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Se connecter</button>
        <p class="mt-2 text-center">Pas encore inscrit ? <a href="{{ route('signup') }}"
                class="text-blue-500">S'inscrire</a></p>
    </form>
</body>

</html>