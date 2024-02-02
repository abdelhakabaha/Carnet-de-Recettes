<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="relative w-full">
        <nav class="fixed z-10 w-full bg-white md:absolute md:bg-transparent">
            <div class="container m-auto px-2 md:px-12 lg:px-7">
                <div class="flex flex-wrap items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
                    <div class="w-full px-6 flex justify-between lg:w-max md:px-0">
                        <a href="https://tailus.io/blocks/hero-section" aria-label="logo" class="flex space-x-2 items-center">
                            <img src="https://tailus.io/sources/blocks/food-delivery/preview/images/icon.png" class="w-12" alt="tailus logo" width="144" height="133">
                            <span class="text-2xl font-bold text-yellow-900">Tailus <span class="text-yellow-700">Feedus</span></span>
                        </a>

                        <button aria-label="humburger" id="hamburger" class="relative w-10 h-10 -mr-2 lg:hidden">
                            <div aria-hidden="true" id="line" class="inset-0 w-6 h-0.5 m-auto rounded bg-yellow-900 transtion duration-300"></div>
                            <div aria-hidden="true" id="line2" class="inset-0 w-6 h-0.5 mt-2 m-auto rounded bg-yellow-900 transtion duration-300"></div>
                        </button>
                    </div>

                    <div class="hidden w-full lg:flex flex-wrap justify-end items-center space-y-6 p-6 rounded-xl bg-white md:space-y-0 md:p-0 md:flex-nowrap md:bg-transparent lg:w-7/12">
                        <div class="text-gray-600 lg:pr-4">
                            <ul class="space-y-6 tracking-wide font-medium text-sm md:flex md:space-y-0">
                                <li>
                                    <a href="/create" class="block md:px-4 transition hover:text-yellow-700">
                                        <span>Create</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- <div class="w-full space-y-2 border-yellow-200 lg:space-y-0 md:w-max lg:border-l">
                            <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition active:bg-yellow-200 focus:bg-yellow-100 sm:w-max">
                                <span class="block text-yellow-800 font-semibold text-sm">
                                    Sign up
                                </span>
                            </button>
                            <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-full transition bg-yellow-300 hover:bg-yellow-100 active:bg-yellow-400 focus:bg-yellow-300 sm:w-max">
                                <span class="block text-yellow-900 font-semibold text-sm">
                                    Login
                                </span>
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
        </nav>
        <div class="relative bg-yellow-50">
            <div class="container m-auto px-6 pt-32 md:px-12 lg:pt-[4.8rem] lg:px-7">
                <div class="flex items-center flex-wrap px-2 md:px-0">
                    <div class="relative lg:w-6/12 lg:py-24 xl:py-32">
                        <h1 class="font-bold text-4xl text-yellow-900 md:text-5xl lg:w-10/12">Your favorite dishes, right at your door</h1>
                        <form action="{{ route('search') }}" method="GET" class="w-full mt-12">
                            <div class="relative flex p-1 rounded-full bg-white border border-yellow-200 shadow-md md:p-2">
                                <input name="query" placeholder="Your favorite food" class="w-full p-4 rounded-full" type="text">
                                <button type="submit" title="Start buying" class="ml-auto py-3 px-6 rounded-full text-center transition bg-gradient-to-b from-yellow-200 to-yellow-300 hover:to-red-300 active:from-yellow-400 focus:from-red-400 md:px-12">
                                    <span class="hidden text-yellow-900 font-semibold md:block">Search</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mx-auto text-yellow-900 md:hidden" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <p class="mt-8 text-gray-700 lg:w-10/12">Sit amet consectetur adipisicing elit. <a href="#" class="text-yellow-700">connection</a> tenetur nihil quaerat suscipit, sunt dignissimos.</p>
                    </div>
                    <div class="ml-auto -mb-24 lg:-mb-56 lg:w-6/12">
                        <img src="https://tailus.io/sources/blocks/food-delivery/preview/images/food.webp" class="relative" alt="food illustration" loading="lazy" width="4500" height="4500">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5"> -->
    <div class="flex flex-wrap justify-around items-center mt-12">
        @foreach ($recettes as $recette )

        <div class="rounded overflow-hidden shadow-lg text-black w-[300px]">
            <img class="w-full" src="/storage/{{ $recette->image }}" alt="Mountain">
            <div class="px-6 py-4">
            <a href="{{route('show_single',$recette->id)}}"> 
                <div class="font-bold text-xl mb-2">{{ $recette->titre }}</div>
            </a>
                <p class=" text-base text-black">
                    {{ $recette->ingredient }}
                </p>
            </div>
            <div class="actions flex gap-4">
                <form action="/delete/{{ $recette->titre }}" method="post">
                    @csrf
                    @method("delete")
                    <input type="hidden" name="titre" value="{{ $recette->titre }}">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                        Delete
                    </button>
                </form>

                <form action="/edit/{{ $recette->titre }}" method="post">
                    @csrf
                    <input type="hidden" name="titre" value="{{ $recette->titre }}">
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded">
                        Edit
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>