<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jonas Schwendener</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gradient-to-br from-gray-900 to-gray-950 text-gray-300 antialiased border-t-2 border-orange-400 h-screen">
        <main class="max-w-prose mx-auto mt-16 lg:mt-32 2xl:mt-64 p-8">
            <div class="text-2xl font-semibold text-balance">
                <div class="relative size-6 mb-8 rotate-45">
                    <div class="absolute top-1/2 -translate-y-px w-full border-t-2 border-orange-500"></div>
                    <div class="absolute left-1/2 -translate-x-px h-full border-l-2 border-orange-300"></div>
                </div>
                <h1 class="text-white">Hi, my name is Jonas Schwendener.</h1>
                <div class="text-gray-500">I passionately design and develop software for the modern web.</div>
            </div>
            <div class="mt-12 2xl:text-lg space-y-4 text-balance">
                <p>I'm currently building <a href="https://strawblond.com" class="text-white underline underline-offset-4 decoration-gray-700 hover:decoration-gray-500 transition-colors">StrawBlond®</a>, a cloud-based invoicing and accounting software for swiss SME businesses.</p>
                <p>Some other things I've built in the past include, are the Nitrous Evolve CMS and dozens of websites with Racerfish, a full-service digital agency.</p>
            </div>
        </main>
    </body>
</html>
