<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les livres</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-semibold mb-6">Tous les livres</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach (\App\Models\Book::all() as $book)  <!-- Utilisez la variable $books passée par le contrôleur -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold">{{ $book->title }}</h2>
                        <p class="text-gray-600">Auteur: {{ $book->author }}</p>
                        <p class="mt-2">{{ $book->description }}</p>

                        <div class="mt-4 flex justify-between">
                            <a href="{{ route('books.edit', $book->id) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Modifier</a>

                            <form action="{{ route('books.destroy', $book->id) }}" method="POST"
                                onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>