<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Sniglet&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Déconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
            </div>

        </div>
    </header>

    <!-- Main Content -->
    <div class="flex-grow w-full flex items-center justify-center">
        <div class="container mx-auto py-10 w-3/4">
            <h1 class="block text-teal-500 text-2xl font-bold mb-6 text-center">Tous les livres</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($books as $book)
                    <div class="bg-orange-100 shadow-md rounded-lg overflow-hidden cursor-pointer book-item hover:shadow-lg transition duration-300"
                        data-book-id="{{ $book->id }}">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $book->title }}</h2>
                            <p class="text-gray-600 mb-2">Auteur: {{ $book->author }}</p>
                            <p class="text-gray-700">{{ $book->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- La Modal -->
    <div id="bookModal" class="fixed hidden z-10 inset-0 overflow-y-auto bg-gray-500 bg-opacity-75 transition-opacity">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div
                class="bg-orange-100 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modalTitle"></h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500" id="modalAuthor"></p>
                                <p class="text-sm text-gray-500" id="modalDescription"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button"
                        class="close mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.book-item').click(function () {
                var bookId = $(this).data('book-id');
                var modal = document.getElementById("bookModal");

                $.ajax({
                    url: '/books/' + bookId,
                    type: 'GET',
                    success: function (data) {
                        $('#modalTitle').text(data.title);
                        $('#modalAuthor').text('Auteur: ' + data.author);
                        $('#modalDescription').text(data.description);

                        $(modal).css({
                            'display': 'flex',
                            'align-items': 'center',
                            'justify-content': 'center'
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error("Erreur AJAX: " + status + " - " + error);
                        alert('Erreur lors du chargement des détails du livre.');
                    }
                });
            });

            $(document).on('click', '.close', function () {
                var modal = document.getElementById("bookModal");

                $(modal).css('display', 'none');
            });

            window.onclick = function (event) {
                var modal = document.getElementById("bookModal");
                if (event.target == modal) {
                   
                    $(modal).css('display', 'none');
                }
            }
        });
    </script>
</body>

</html>