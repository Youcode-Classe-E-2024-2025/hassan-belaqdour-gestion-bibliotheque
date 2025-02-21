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
                @foreach (\App\Models\Book::all() as $book)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold">{{ $book->title }}</h2>
                            <p class="text-gray-600">Auteur: {{ $book->author }}</p>
                            <p class="mt-2">{{ $book->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</body>

</html>