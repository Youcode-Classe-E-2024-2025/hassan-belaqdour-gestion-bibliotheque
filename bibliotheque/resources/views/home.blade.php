<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Sniglet&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body>

    <!-- Header Section -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto py-4 px-6 flex items-center justify-between">

            <!-- Logo Section (Left) -->
            <div class="flex items-center">
                <svg class="w-8 h-8 mr-2 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 4.75 7.5 4.75a12.742 12.742 0 00-2.269 1.005l-3.772 2.01a1.978 1.978 0 00-.608 2.316l.802 2.827a1.864 1.864 0 01.582 1.064l.006.044a0.844 0.844 0 00.164 0.435m0 0L19.5 19.5m-16.372-3.372a12.012 12.012 0 019.724-6.569m-9.724 6.569l-3.082-1.74a1.3 1.3 0 00-1.065-.026L3 15.322a0.958 0.958 0 00.477 1.138l3.265 1.85a0.929 0.929 0 00.74.33m0 0l1.977-.566">
                    </path>
                </svg>
                <span class="text-xl font-semibold" style="font-family: 'Sniglet', serif;">SmartLib</span>
            </div>

            <!-- Navigation Buttons (Right) -->
            <div class="space-x-4">
                <a href="#" class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded"
                    style="font-family: 'Sniglet', serif;">Register</a>
                <a href="/login" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded"
                    style="font-family: 'Sniglet', serif;">Login</a>
            </div>

        </div>
    </header>

    <div class="text-center h-screen pl-8 pr-8 flex flex-col items-center justify-center">
        <h1 class="text-7xl font-bold mb-2 pb-6" style="font-family: 'Sniglet', serif;">SmartLib</h1>
        <p class="text-gray-700 mb-4 text-[3.05rem] pl-10 pr-10" style="font-family: 'Sniglet', serif;">SmartLib vous offre une plateforme intuitive pour Gérez, découvrez, partagez votre bibliothèque.</p>
        <button
            class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded flex items-center justify-center mx-auto"
            style="font-family: 'Sniglet', serif;">
            Commencer
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>

    <div class="pl-14 pr-14 pt-20 ">
        <div class="bg-green-100 rounded-3xl shadow-lg overflow-hidden p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 items-center">
                <!-- Image Section (Left) -->
                <div class="p-6">
                    <!-- Placeholder for your image -->
                    <div class="aspect-w-3 aspect-h-2 bg-gray-100 rounded-md">
                        <!-- Replace this with your actual image or SVG -->
                        <img class="w-full h-full rounded-3xl"
                            src="https://previews.123rf.com/images/mfbtasarim/mfbtasarim2404/mfbtasarim240400332/229150654-un-groupe-de-personnes-sont-assises-autour-d-une-table-en-train-de-lire-des-livres-la-sc%C3%A8ne-est.jpg"
                            alt="">
                    </div>
                </div>

                <!-- Text Section (Right) -->
                <div class="p-6">
                    <h2 class="text-5xl font-bold text-gray-800 mb-4" style="font-family: 'Sniglet', serif;">Bibliothèques partagées</h2>
                    <p class="text-gray-700 mb-4" style="font-family: 'Sniglet', serif;">
                        SmartLib permet de partager sa bibliothèque et ses souhaits avec d'autres utilisateurs, qui
                        peuvent
                        consulter
                        les livres et les informations associées.
                    </p>
                    <p class="text-gray-700" style="font-family: 'Sniglet', serif;">Vous pouvez partager uniquement l'un ou l'autre, ou les deux, c'est vous
                        qui
                        décidez.</p>
                </div>
            </div>
        </div>
</div>
        <div class="pl-14 pr-14 pt-14 ">
        <div class="bg-green-30 rounded-3xl shadow-lg overflow-hidden p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 items-center">
                <!-- Image Section (Left) -->
                <div class="p-6">
                    <h2 class="text-5xl font-bold text-gray-800 mb-4" style="font-family: 'Sniglet', serif;">Tendances</h2>
                    <p class="text-gray-700 mb-4" style="font-family: 'Sniglet', serif;">
                        SmartLib propose des listes de nouveautés, de meilleures ventes et de livres à paraître pour aider les utilisateurs à
                        découvrir
                        les tendances et les succès littéraires du moment.
                    </p>
                    <p class="text-gray-700" style="font-family: 'Sniglet', serif;">Ces listes sont mises à jour tous les mois pour offrir une expérience de lecture toujours à jour.</p>
                </div>
        
                <!-- Text Section (Right) -->
                <div class="p-6">
                    <!-- Placeholder for your image -->
                    <div class="aspect-w-3 aspect-h-2 bg-gray-100 rounded-md">
                        <!-- Replace this with your actual image or SVG -->
                        <img class="w-250 h-100 rounded-3xl"
                            src="https://img.freepik.com/vecteurs-libre/illustration-glossaire-dessine-main_23-2150303518.jpg?t=st=1739892247~exp=1739895847~hmac=342bc1c127513df94773536f6590f57ebff322e7d798588b6fac76dec656bb6c&w=740"
                            alt="">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="pl-14 pr-14 pt-14 ">
        <div class="bg-green-100 rounded-3xl shadow-lg overflow-hidden p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 items-center">
                <!-- Image Section (Left) -->
                <div class="p-6">
                    <!-- Placeholder for your image -->
                    <div class="aspect-w-3 aspect-h-2 bg-gray-100 rounded-md">
                        <!-- Replace this with your actual image or SVG -->
                        <img class="w-full h-100 rounded-3xl"
                            src="https://img.freepik.com/vecteurs-libre/hygge-lifestyle-scenes-femme-lecture_23-2148822999.jpg?t=st=1739892135~exp=1739895735~hmac=bc715465fc121aa75a21bc931a4c883b19be424f913a1ee389c395bf3e79c9d8&w=740"
                            alt="">
                    </div>
                </div>
        
                <!-- Text Section (Right) -->
                <div class="p-6">
                    <h2 class="text-5xl font-bold text-gray-800 mb-4" style="font-family: 'Sniglet', serif;">Coup de ❤️</h2>
                    <p class="text-gray-700 mb-4" style="font-family: 'Sniglet', serif;">
                        Marquez vos livres préférés comme coups de coeur. Vous pouvez les partagez si vous le souhaitez.
                    </p>
                    <p class="text-gray-700" style="font-family: 'Sniglet', serif;">Découvrez les coups de coeur des autres utilisateurs et trouvez l'inspiration pour votre prochain livre avec SmartLib !</p>
                </div>
            </div>
        </div>
    </div>
    
    

    <div class="flex flex-wrap justify-center py-10 px-30 pt-56">
        <!-- Ajout de px-4 pour le padding horizontal -->

        <!-- First Row -->
        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-4 text-center">
            <div class="text-teal-700 text-5xl text-green-600">
                <i class="fas fa-video "></i>
            </div>
            <h3 class="text-gray-800 text-lg font-bold mt-4" style="font-family: 'Sniglet', serif;">Rechercher un livre
            </h3>
            <p class="text-gray-600 text-l pt-5 leading-relaxed " style="font-family: 'Sniglet', serif;">
                La recherche d'un livre est ultra rapide. En mois d'une seconde, recherchez un livre par
                son ISBN, par métadonnées, ou en scannant le code-barres avec l'appareil photo de votre
                téléphone ou votre webcam.
            </p>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-4 text-center border-l border-gray-300">
            <div class="text-teal-700 text-5xl text-green-600">
                <i class="fas fa-university"></i>
            </div>
            <h3 class="text-gray-800 text-lg font-bold mt-4" style="font-family: 'Sniglet', serif;">Bibliothèque</h3>
            <p class="text-gray-600 text-l pt-5 leading-relaxed" style="font-family: 'Sniglet', serif;">
                Créez et gérez votre bibliothèque très rapidement et facilement. Visualisez vos
                livres sous forme de liste ou de vignettes, et afficher les informations que vous souhaitez.
            </p>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-4 text-center border-l border-gray-300">
            <div class="text-teal-700 text-5xl text-green-600">
                <i class="fas fa-search"></i>
            </div>
            <h3 class="text-gray-800 text-lg font-bold mt-4" style="font-family: 'Sniglet', serif;">Tris et filtres</h3>
            <p class="text-gray-600 text-l pt-5 leading-relaxed" style="font-family: 'Sniglet', serif;">
                Recherchez, filtrez, triez en un clin d'oeil.
                Trouvez un livre en une fraction de seconde.
                Évitez d'acheter vos livres en doublon.
            </p>
        </div>

        <!-- Spacing -->
        <div class="w-full h-14"></div>

        <!-- Second Row -->
        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-4 text-center">
            <div class="text-teal-700 text-5xl text-green-600">
                <i class="fas fa-heart"></i>
            </div>
            <h3 class="text-gray-800 text-lg font-bold mt-4" style="font-family: 'Sniglet', serif;">Souhaits</h3>
            <p class="text-gray-600 text-l pt-5 leading-relaxed" style="font-family: 'Sniglet', serif;">
                Créez une liste de souhaits de lecture.
                Comparez les prix pour chacun d'entre eux.
                Définissez une priorité d'achat.
            </p>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-4 text-center border-l border-gray-300">
            <div class="text-teal-700 text-5xl text-green-600">
                <i class="fas fa-users"></i>
            </div>
            <h3 class="text-gray-800 text-lg font-bold mt-4" style="font-family: 'Sniglet', serif;">Prêts</h3>
            <p class="text-gray-600 text-l pt-5 leading-relaxed" style="font-family: 'Sniglet', serif;">
                Indiquez tous vos livres prêtés afin de ne
                plus les oublier.
            </p>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-4 text-center border-l border-gray-300">
            <div class="text-teal-700 text-5xl text-green-600">
                <i class="fas fa-chart-line"></i>
            </div>
            <h3 class="text-gray-800 text-lg font-bold mt-4" style="font-family: 'Sniglet', serif;">Statistiques</h3>
            <p class="text-gray-600 text-l pt-5 leading-relaxed" style="font-family: 'Sniglet', serif;">
                Obtenez des statistiques concernant votre
                bibliothèque comme le nombre de livres lus
                ou vos préférences de lecture.
            </p>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="bg-gray-50 py-12 pr-26 pl-26">
        <div class="container mx-auto px-4 pt-32">
            <h1 class="text-6xl font-bold text-center text-gray-800 mb-4" style="font-family: 'Sniglet', serif;">
                Commencez
                dès maintenant !</h1>
            <p class="text-center text-gray-600 mb-8" style="font-family: 'Sniglet', serif;">SmartLib propose un
                abonnement abordable pour tous les amateurs
                de lecture et vous permet
                d'accéder à toutes les fonctionnalités.</p>

            <div class="flex flex-col gap-6 justify-center md:flex-row pt-22">
                <!-- Free Plan -->
                <div class="bg-white rounded-2xl shadow-md p-6 w-full">
                    <h2 class="text-2xl font-bold text-center text-gray-800 mb-2"
                        style="font-family: 'Sniglet', serif;">
                        Gratuit</h2>
                    <p class="text-center text-teal-500 mb-4" style="font-family: 'Sniglet', serif;">Pour les petites
                        bibliothèques ou pour les lecteurs
                        occasionnels.</p>
                    <div class="text-center text-4xl font-bold text-gray-800 mb-6"
                        style="font-family: 'Sniglet', serif;">0€/mois</div>
                    <ul class="list-none space-y-3">
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Accès via ordinateur et mobile
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Synchronisation cloud
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            30 livres
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            30 souhaits
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Accès à 1 bibliothèque partagée
                        </li>
                    </ul>
                </div>

                <!-- Premium Plan -->
                <div class="bg-green-100 rounded-2xl shadow-md p-6 w-full relative">
                    <div class="absolute top-4 right-4 bg-teal-500 text-white text-xs font-bold py-1 px-2 rounded">
                        Populaire
                    </div>
                    <h2 class="text-2xl font-bold text-center text-gray-800 mb-2"
                        style="font-family: 'Sniglet', serif;">
                        Premium</h2>
                    <p class="text-center text-teal-500 mb-4" style="font-family: 'Sniglet', serif;">Pour les amoureux
                        de lecture ou pour les professionnels du
                        livre,
                        toutes les fonctionnalités de SmartLib.</p>
                    <div class="text-center text-4xl font-bold text-gray-800 mb-2"
                        style="font-family: 'Sniglet', serif;">
                        1,99€/mois
                    </div>

                    <div class="flex items-center justify-center mb-4" style="font-family: 'Sniglet', serif;">
                        <svg width="96" height="1">
                            <line x1="0" y1="0.5" x2="96" y2="0.5" stroke="#a3a3a3" stroke-width="1" />
                        </svg>
                        <div class="text-center text-gray-600 px-2">ou</div>
                        <svg width="96" height="1">
                            <line x1="0" y1="0.5" x2="96" y2="0.5" stroke="#a3a3a3" stroke-width="1" />
                        </svg>
                    </div>

                    <div class="text-center text-2xl font-bold text-gray-800 mb-6"
                        style="font-family: 'Sniglet', serif;">
                        19,90€/an (-20%)
                    </div>
                    <ul class="list-none space-y-3">
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Accès via ordinateur et mobile
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Synchronisation cloud
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Livres illimités
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Souhaits illimités
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Accès à 3 bibliothèques partagées
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Partage de bibliothèque
                        </li>
                        <li class="flex items-center text-gray-700" style="font-family: 'Sniglet', serif;">
                            <svg class="w-5 h-5 mr-2 text-teal-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Recherche de livres par métadonnées
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-12 pt-32">
        <div class="container mx-auto px-4">
            <h2 class="text-6xl font-bold text-center text-gray-800 mb-8" style="font-family: 'Sniglet', serif;">Comment
                utiliser SmartLib ?</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-16">
                <!-- Web Browser -->
                <div class="text-center">
                    <div class="mx-auto w-16 h-16 text-indigo-700">
                        <!-- Placeholder for Web Browser Icon -->
                        <img src="https://cdn-icons-png.flaticon.com/512/3037/3037366.png" alt="">
                    </div>
                    <h3 class="text-xl font-semibold text-gray-700 mt-4" style="font-family: 'Sniglet', serif;">
                        Navigateur web</h3>
                    <p class="text-gray-600 mt-8" style="font-family: 'Sniglet', serif;">
                        Vous pouvez profiter de SmartLib partout, depuis le navigateur web de votre choix, puis en
                        cliquant
                        sur Ma bibliothèque</a>.
                    </p>
                </div>

                <!-- iOS -->
                <div class="text-center">
                    <div class="mx-auto w-16 h-16">
                        <!-- Apple Logo (replace with actual image) -->
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="">
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 mt-4" style="font-family: 'Sniglet', serif;">iOS</h3>
                    <!-- App Store Badge (replace with actual image) -->

                    <button type="button"
                        class="flex items-center justify-center w-60 mt-3 text-white bg-black h-18 rounded-2xl mx-auto">
                        <div class="mr-3">
                            <svg viewBox="0 0 384 512" width="30">
                                <path fill="currentColor"
                                    d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs" style="font-family: 'Sniglet', serif;">
                                Download on the
                            </div>
                            <div class="-mt-1 font-sans text-xl font-semibold" style="font-family: 'Sniglet', serif;">
                                App Store
                            </div>
                        </div>
                    </button>
                </div>

                <!-- Android -->
                <div class="text-center">
                    <div class="mx-auto w-16 h-16">
                        <!-- Android Logo (replace with actual image) -->
                        <img src="https://cdn-icons-png.flaticon.com/512/61/61120.png" alt="Android Logo">
                    </div>
                    <h3 class="text-lg font-semibold text-gray-700 mt-4" style="font-family: 'Sniglet', serif;">Android
                    </h3>
                    <!-- Google Play Badge (replace with actual image) -->

                    <button type="button"
                        class="flex items-center justify-center w-60 mt-3 text-white bg-black rounded-2xl h-18 mx-auto">
                        <div class="mr-3">
                            <svg viewBox="30 336.7 120.9 129.2" width="30">
                                <path fill="#FFD400"
                                    d="M119.2,421.2c15.3-8.4,27-14.8,28-15.3c3.2-1.7,6.5-6.2,0-9.7  c-2.1-1.1-13.4-7.3-28-15.3l-20.1,20.2L119.2,421.2z">
                                </path>
                                <path fill="#FF3333"
                                    d="M99.1,401.1l-64.2,64.7c1.5,0.2,3.2-0.2,5.2-1.3  c4.2-2.3,48.8-26.7,79.1-43.3L99.1,401.1L99.1,401.1z">
                                </path>
                                <path fill="#48FF48"
                                    d="M99.1,401.1l20.1-20.2c0,0-74.6-40.7-79.1-43.1  c-1.7-1-3.6-1.3-5.3-1L99.1,401.1z">
                                </path>
                                <path fill="#3BCCFF"
                                    d="M99.1,401.1l-64.3-64.3c-2.6,0.6-4.8,2.9-4.8,7.6  c0,7.5,0,107.5,0,113.8c0,4.3,1.7,7.4,4.9,7.7L99.1,401.1z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs" style="font-family: 'Sniglet', serif;">
                                GET IT ON
                            </div>
                            <div class="-mt-1 font-sans text-xl font-semibold" style="font-family: 'Sniglet', serif;">
                                Google Play
                            </div>
                        </div>
                    </button>


                </div>
            </div>
        </div>
    </div>
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
    
                <div class="text-center md:text-left">
                    <h3 class="text-2xl font-semibold mb-4 pl-10" style="font-family: 'Sniglet', serif;">SmartLib</h3>
                    <p class="text-gray-300 pl-10" style="font-family: 'Sniglet', serif;">SmartLib est une application pour gérer
                        et partager votre bibliothèque. Suivez vos lectures, découvrez de nouveaux livres et connectez-vous
                        avec d'autres lecteurs.</p>
                </div>
    
                <div class="text-center">
                    <h3 class="text-2xl font-semibold mb-4" style="font-family: 'Sniglet', serif;">Liens utiles</h3>
                    <ul class="list-none">
                        <li><a href="#" class="text-gray-300 hover:text-white" style="font-family: 'Sniglet', serif;">À
                                propos</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white"
                                style="font-family: 'Sniglet', serif;">Conditions d'utilisation</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white"
                                style="font-family: 'Sniglet', serif;">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white"
                                style="font-family: 'Sniglet', serif;">Contact</a></li>
                    </ul>
                </div>
    
                <div class="text-center md:text-right">
                    <h3 class="text-2xl font-semibold mb-4 pr-14" style="font-family: 'Sniglet', serif;">Suivez-nous</h3>
                    <div class="flex justify-center md:justify-end space-x-4 pr-16 pb-14">
                        <a href="#" class="text-gray-300 hover:text-white text-4xl"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-4xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white text-4xl"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
    
            </div>
    
            <div class="mt-8 text-center text-gray-400" style="font-family: 'Sniglet', serif;">
                © 2025 SmartLib. Tous droits réservés.
            </div>
        </div>
    </footer>
</body>

</html>