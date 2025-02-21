<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-semibold mb-6">Bienvenue sur votre tableau de bord utilisateur</h1>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Déconnexion</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($books as $book)
                <div class="bg-white shadow-md rounded-lg overflow-hidden cursor-pointer book-item hover:shadow-lg transition duration-300"
                    data-book-id="{{ $book->id }}">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold">{{ $book->title }}</h2>
                        <p class="text-gray-600">Auteur: {{ $book->author }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- La Modal -->
        <div id="bookModal"
            class="fixed hidden z-10 inset-0 overflow-y-auto bg-gray-500 bg-opacity-75 transition-opacity">
            <div class="flex items-center justify-center min-h-screen p-4">
                <div
                    class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
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
    </div>

    <script>
        $(document).ready(function () {
            // Gestion de l'ouverture de la modal
            $('.book-item').click(function () {
                var bookId = $(this).data('book-id');
                var modal = document.getElementById("bookModal");

                $.ajax({
                    url: '/books/' + bookId, // Assurez-vous que cette route existe
                    type: 'GET',
                    success: function (data) {
                        $('#modalTitle').text(data.title);
                        $('#modalAuthor').text('Auteur: ' + data.author);
                        $('#modalDescription').text(data.description);
                        modal.classList.remove('hidden');
                        modal.classList.add('flex');
                    },
                    error: function (xhr, status, error) {
                        console.error("Erreur AJAX: " + status + " - " + error);
                        alert('Erreur lors du chargement des détails du livre.');
                    }
                });
            });

            // Gestion de la fermeture de la modal
            $(document).on('click', '.close', function () {
                var modal = document.getElementById("bookModal");
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });

            // Fermer la modal en cliquant en dehors
            window.onclick = function (event) {
                var modal = document.getElementById("bookModal");
                if (event.target == modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            }
        });
    </script>
</body>

</html>