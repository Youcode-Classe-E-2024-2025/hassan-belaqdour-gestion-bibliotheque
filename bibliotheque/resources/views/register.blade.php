<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Sniglet&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body class="h-screen overflow-hidden flex bg-white">

    <!-- Partie Image -->
    <div class="w-1/2 h-screen">
        <img src="{{ asset('assets/img/login-image.png') }}" alt="Description de l'image"
            class="object-cover h-full w-full">
    </div>

    <!-- Partie Formulaire d'Inscription -->
    <div class="w-1/2 flex items-center justify-center">
        <div class="bg-green-100 shadow-md rounded px-8 pt-6 pb-8 mb-4 w-3/4">
            <h1 class="block text-teal-500 text-2xl font-bold mb-6 text-center" style="font-family: 'Sniglet', serif;">
                Inscription</h1>

            <form action="{{ route('signup') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="username" class="block text-gray-700 text-sm font-bold mb-2"
                        style="font-family: 'Sniglet', serif;">Nom d'utilisateur :</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white">
                    @error('username')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2"
                        style="font-family: 'Sniglet', serif;">Email :</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline bg-white">
                    @error('email')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2"
                        style="font-family: 'Sniglet', serif;">Mot de passe :</label>
                    <input type="password" id="password" name="password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline bg-white">
                    @error('password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="confirm_password" class="block text-gray-700 text-sm font-bold mb-2"
                        style="font-family: 'Sniglet', serif;">Confirmer le mot de passe :</label>
                    <input type="password" id="confirm_password" name="confirm_password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline bg-white">
                    @error('confirm_password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                    style="font-family: 'Sniglet', serif;">S'inscrire</button>
            </form>


            <div class="mt-8 text-center">
                <p style="font-family: 'Sniglet', serif;">Déjà inscrit ?
                    <a href="{{ route('login') }}" class="text-teal-500 hover:text-teal-700 font-bold"
                        style="font-family: 'Sniglet', serif;">Connectez-vous</a>

                </p>
            </div>
        </div>
    </div>

</body>

</html>