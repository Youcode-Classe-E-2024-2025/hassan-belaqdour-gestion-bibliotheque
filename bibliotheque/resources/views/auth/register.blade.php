<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen overflow-hidden flex bg-amber-50 text-gray-800">

    <!-- Partie Image (50% de la largeur) -->
    <div class="w-1/2 h-screen">
        <img src="assets/img/login-image.png" alt="Discothèque avec boule à facettes et foule"
            class="object-cover h-full w-full">
    </div>

    <!-- Partie Formulaire d'Inscription (50% de la largeur) -->
    <div class="w-1/2 flex items-center justify-center">
        <div class="bg-orange-100 shadow-md rounded px-8 pt-6 pb-8 mb-4 w-3/4">
            <h1 class="block text-teal-500 text-2xl font-bold mb-6 text-center">Inscription</h1>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom :</label>
                    <input type="text" id="name" name="name"
                        class="shadow appearance-none border border-amber-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email :</label>
                    <input type="email" id="email" name="email"
                        class="shadow appearance-none border border-amber-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe :</label>
                    <input type="password" id="password" name="password"
                        class="shadow appearance-none border border-amber-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Confirmation
                        du mot de passe :</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="shadow appearance-none border border-amber-300 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                </div>
                <button type="submit"
                    class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">S'inscrire</button>
            </form>

            <div class="mt-8 text-center">
                <p>Déjà inscrit ?
                    <a href="{{ route('login') }}" class="text-teal-500 hover:text-teal-700 font-bold">Se connecter</a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>