<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le livre</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Sniglet&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body class="h-screen flex items-center justify-center bg-amber-50 text-gray-800"
    style="font-family: 'Sniglet', serif;">
    <div class="bg-orange-100 shadow-md rounded px-8 pt-6 pb-8 w-full max-w-md">
        <h1 class="block text-teal-500 text-2xl font-bold mb-6 text-center" style="font-family: 'Sniglet', serif;">
            Modifier le livre</h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert"
                style="font-family: 'Sniglet', serif;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2"
                    style="font-family: 'Sniglet', serif;">Titre:</label>
                <input type="text" id="title" name="title" value="{{ $book->title }}"
                    class="shadow appearance-none border border-amber-300 rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
                    style="font-family: 'Sniglet', serif;">
            </div>

            <div class="mb-4">
                <label for="author" class="block text-gray-700 text-sm font-bold mb-2"
                    style="font-family: 'Sniglet', serif;">Auteur:</label>
                <input type="text" id="author" name="author" value="{{ $book->author }}"
                    class="shadow appearance-none border border-amber-300 rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
                    style="font-family: 'Sniglet', serif;">
            </div>

            <div class="mb-6">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2"
                    style="font-family: 'Sniglet', serif;">Description:</label>
                <textarea id="description" name="description" rows="4"
                    class="shadow appearance-none border border-amber-300 rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
                    style="font-family: 'Sniglet', serif;">{{ $book->description }}</textarea>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    style="font-family: 'Sniglet', serif;">
                    Mettre à jour
                </button>
                <a href="{{ route('books.all') }}"
                    class="inline-block align-baseline font-bold text-sm text-teal-500 hover:text-teal-700"
                    style="font-family: 'Sniglet', serif;">
                    Annuler
                </a>
            </div>
        </form>
    </div>
</body>

</html>