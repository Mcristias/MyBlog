<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
          tailwind.config = {
            theme: {
              extend: {
                fontFamily: {
                  sans: ['Inter', 'sans-serif'],
                },
              }
            }
          }
        </script>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Blog </title>
        <body>
            <h1> My News </h1>

            <div class="flex justify-center">
                <ul class="bg-white rounded-lg border border-gray-200 w-96 text-gray-900">

                  @foreach ($categories as $category)
                      <li class="px-6 py-2 border-b border-gray-200 w-full rounded-t-lg">{{$category->name}}</li>

                @endforeach


                </ul>
              </div>
    </head>
</html>
