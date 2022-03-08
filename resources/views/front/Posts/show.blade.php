

<x-guest-margin>
        <title>My Blog </title>
        <head>
            <h1> My News </h1>
        </head>
        <div class="w3-container w3-border w3-teal">
            <body>
            <ol class="border-l md:border-l-0 md:border-t border-gray-300 md:flex md:justify-center md:gap-6">
                @foreach ($Posts as $Post)
                <div class="flex justify-center">
                    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                      <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{$Posts[0]->user->user_name}}</h5>
                      <h6 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{$Posts[0]->create_at}}</h6>
                      <p class="text-gray-700 text-base mb-4">
                        {{$Posts[0]->title}}
                    </p>

                      <p class="text-gray-700 text-base mb-4">
                            {{$Posts[0]->content}}
                      </p>

                    </div>
                  </div>
                @endforeach
            </ol>
        </body>
        </div>
</x-guest-margin>
