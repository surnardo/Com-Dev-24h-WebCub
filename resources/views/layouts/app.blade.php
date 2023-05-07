<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://unpkg.com/typewriter-effect@2.17.0/dist/core.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script>


            const myButton = document.querySelector('#myButton');
            const inputText = document.getElementById("inputText");
            const repon=  document.getElementById("repon");
             const reve=  document.getElementById("reve");
             repon.style.display="none";
             reve.style.display="none";
            
            myButton.addEventListener('click', () => {
              // Code à exécuter après le clic sur le bouton
              event.preventDefault();
              const monParagraphe = document.getElementById('monParagraphe');
               
              if (inputText.value.trim() !== "") {
                repon.style.display="";
             reve.style.display="";
                document.getElementById('text').innerHTML="";
                document.getElementById('text').innerHTML  = inputText.value;
            
                  // Récupération du texte du paragraphe à l'aide de la propriété textContent
                    const texteDuParagraphe = monParagraphe.textContent;
                   const outputElement = document.getElementById('output');
                  console.log(outputElement);
               
                   var samir=document.getElementById('monParagraphe').textContent+"<br>";
                   const typewriter = new Typewriter(outputElement, {
                     delay: 50,
                     cursor: '|'
                   });
               
                   typewriter
                     .typeString(samir)
                     .pauseFor(1000)
                     .typeString(' ')
                     .pauseFor(1000)
                     .typeString('Merci ')
                     .start();
                  console.log(text);
                } else {
                  console.log("Le champ est vide.");
                }
            });
            
            
            
                 </script>

<script >
    const glide = new Glide('.glide', {
      type: 'carousel',
      autoplay: 5000,
      hoverpause: true,
      perView: 1,
    });
    
    glide.mount();
  </script>
    </body>
</html>
