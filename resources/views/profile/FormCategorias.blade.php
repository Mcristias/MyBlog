<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="GXuXyaNpWxu29VjQSH6aprl9QPiZx3nhgRH71Rrs">

        <title>Categoria</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">

        <!-- Scripts -->
        <script src="/js/app.js" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <a href="/">
        <div class="text-center">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNiEGMOnZQLLwVlaK7cjBDoiXBfHTfJSK0PplrTKNOuPGoO0MqR7j7QZ_CBlQGf7anfw&usqp=CAU" class="img-fluid" alt="" />
        </div>
</a>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <form method="POST" action="{{route('categories.store') }}">
            @csrf
            <div>
                <label class="block font-medium text-sm text-gray-700">
                    Nueva Categoria
                </label>
                <input  class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="category" name="category" required="required">
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="enabled" name="enabled">
                    <span class="ml-2 text-sm text-gray-600">Categoria Activa</span>
                </label>
            </div>


            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                                Boton
            </button>

        </form>
    </div>
</div>
        </div>
    </body>
</html>
