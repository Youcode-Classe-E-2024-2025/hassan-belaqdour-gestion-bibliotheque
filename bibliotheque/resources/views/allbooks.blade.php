<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les livres</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<body class="h-screen overflow-auto flex flex-col bg-amber-50 text-gray-800">

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
                <a href="/admindash"
                    class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">
                    Retour au Dashboard
                </a>
            </div>

        </div>
    </header>

    <!-- Main Content -->
    <div class="flex-grow w-full flex items-center justify-center">
        <div class="container mx-auto py-10 w-3/4">
            <h1 class="block text-teal-500 text-2xl font-bold mb-6 text-center">Tous les livres</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach (\App\Models\Book::all() as $book)
                    <div class="bg-orange-100 shadow-md rounded-lg overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $book->title }}</h2>
                            <p class="text-gray-600 mb-2">Auteur: {{ $book->author }}</p>
                            <p class="text-gray-700">{{ $book->description }}</p>

                            <div class="mt-4 flex justify-between items-center">
                                <a href="{{ route('books.edit', $book->id) }}" class="text-teal-500 hover:text-teal-700">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                    onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700 focus:outline-none">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>