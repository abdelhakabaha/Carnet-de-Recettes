<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

    <!-- component -->

    <body class="relative">
        
        <div class="w-full border-b flex flex-row flex-wrap items-center p-1">
            <div class="w-1/5 p-3">
                <button class="text-2xl font-thin text-gray-600"><i class="fa fa-bars"></i></button>
            </div>
            <div class="w-3/5 p-3">
                <center><img class="w-1/4" src="https://static.politico.com/11/3c/2571c0ab455e91bf81dc4bab93a6/politico-logo.png"></center>
            </div>
            <div class="w-1/5 flex flex-row flex-wrap">
                <ul class="w-3/4 flex flex-row flex-wrap text-xs font-semibold">
                    <li class="mx-3"><a href="">MAGAZINE</a></li>
                    <li class="mx-3"><a href="">THE AGENDA</a></li>
                    <li class="mx-3"><a href="">PRO</a></li>
                </ul>
                <div class="w-1/4 text-lg text-gray-600"><a href=""><i class="fa fa-search"></i></a></div>
            </div>
        </div>

        <div class="w-full md:w-2/5 mx-auto">
            <div class="mx-5 my-3 text-sm">
            <a href="" class=" text-red-600 font-bold tracking-widest">CORONAVIRUS</a>
            </div>
            <div class="w-full text-gray-800 text-4xl px-5 font-bold leading-none">

            {{ $recettes->titre }}
        </div>
                  
            <div class="mx-5">
            <img class="w-full" src="/storage/{{ $recettes->image }}" alt="Mountain">

            </div>
                    
            <div class="px-5 w-full mx-auto">
                <p class="my-5">
                    {{ $recettes->recette }}
                </p>
            </div>
        </div>
        
    
 
    
</body>
</html>