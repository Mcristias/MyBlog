<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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


        <title>My Blog </title>
        <body>
            <h1> My News </h1>
            <ol class="border-l md:border-l-0 md:border-t border-gray-300 md:flex md:justify-center md:gap-6">
                @foreach ($Comments as $Comment)
                <li>
                    <div class="flex md:block flex-start items-center pt-2 md:pt-0">
                    <div class="bg-gray-300 w-2 h-2 rounded-full -ml-1 md:ml-0 mr-3 md:mr-0 md:-mt-1"></div>
                    <p class="text-gray-500 text-sm mt-2">{{$Comment->create_at}}</p>
                    </div>
                    <div class="mt-0.5 ml-4 md:ml-0 pb-5">
                    <h4 class="text-gray-800 font-semibold text-xl mb-1.5">{{$Comment->user_id}}</h4>
                    <p class="text-gray-500 mb-3">{{$Comment->comment}}</p>
                    </div>
                </li>
                @endforeach
            </ol>
        </body>
    </head>
</html>
