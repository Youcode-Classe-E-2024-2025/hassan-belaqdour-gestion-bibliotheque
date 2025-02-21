<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Sniglet&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Sniglet', serif;
        }
    </style>
</head>

<body class="bg-gray-100">

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
                <span class="text-xl font-semibold">SmartLib</span>
            </div>

            <!-- Navigation Buttons (Right) -->
            <div>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
            </div>

        </div>
    </header>

    <div class="container mx-auto py-10">
        <!-- Boutons d'action -->
        <div class="flex justify-center space-x-4 mb-4">
            <a href="{{ route('addbook.show') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Ajouter un livre
            </a>
            <a href="{{ route('books.all') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Voir tous les livres
            </a>
        </div>

        <!-- Ajoutez d'autres éléments spécifiques à l'administrateur ici -->
    </div>
</body>

</html>