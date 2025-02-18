<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Sniglet&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body class="h-screen overflow-hidden flex bg-white">

    <!-- Partie Image (50% de la largeur) -->
    <div class="w-1/2 h-screen">
        <img src="https://cdn.leonardo.ai/users/5087e2c4-de41-4a88-becc-108a49d3f1f4/generations/9b6cf425-df83-42a5-90c5-bb923f4d9df7/Leonardo_Lightning_XL_Create_a_visually_appealing_and_welcomin_2.jpg"
            alt="Discothèque avec boule à facettes et foule" class="object-cover h-full w-full">
    </div>

    <!-- Partie Formulaire de Connexion (50% de la largeur) -->
    <div class="w-1/2 flex items-center justify-center">
        <div class="bg-green-100 shadow-md rounded px-8 pt-6 pb-8 mb-4 w-3/4">
            <h1 class="block text-teal-500 text-2xl font-bold mb-6 text-center" style="font-family: 'Sniglet', serif;">
                Connexion</h1>

            <form action="/login" method="post">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2"
                        style="font-family: 'Sniglet', serif;">Email :</label>
                    <input type="email" id="email" name="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-white"
                        value="{{ old('email') }}">
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
                <button type="submit"
                    class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                    style="font-family: 'Sniglet', serif;">Se
                    connecter</button>
            </form>

            <div class="mt-10 grid space-y-4">
                <button
                    class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-teal-500 focus:bg-blue-50 active:bg-blue-100">
                    <div class="relative flex items-center space-x-4 justify-center">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="absolute left-0 w-5"
                            alt="google logo">
                        <span
                            class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-teal-500 sm:text-base"
                            style="font-family: 'Sniglet', serif;">Continue
                            with Google
                        </span>
                    </div>
                </button>
                <button
                    class="group h-12 px-6 border-2 border-gray-300 rounded-full transition duration-300 hover:border-teal-500 focus:bg-blue-50 active:bg-blue-100">
                    <div class="relative flex items-center space-x-4 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="absolute left-0 w-5 text-gray-700" viewbox="0 0 16 16">
                            <path
                                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                            </path>
                        </svg>
                        <span
                            class="block w-max font-semibold tracking-wide text-gray-700 text-sm transition duration-300 group-hover:text-teal-500 sm:text-base"
                            style="font-family: 'Sniglet', serif;">Continue
                            with Github
                        </span>
                    </div>
                </button>
            </div>

            <div class="mt-8 text-center">
                <p style="font-family: 'Sniglet', serif;">Pas encore inscrit ?
                    <a href="/signup" class="text-teal-500 hover:text-teal-700 font-bold"
                        style="font-family: 'Sniglet', serif;">Inscrivez-vous</a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>