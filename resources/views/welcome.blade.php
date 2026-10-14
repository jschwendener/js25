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
    <body class="font-sans bg-gradient-to-br from-gray-900 to-gray-950 text-gray-300 antialiased border-t-2 border-orange-400 min-h-screen flex flex-col overflow-x-clip">
        <main class="flex-1 flex items-center w-full max-w-6xl mx-auto px-8 py-16 lg:py-24">
            <div class="grid w-full items-center gap-16 lg:grid-cols-[minmax(0,1fr)_20rem] lg:gap-20 xl:grid-cols-[minmax(0,1fr)_24rem] xl:gap-28">
                <div class="max-w-prose">
                    <div class="text-2xl font-semibold text-balance">
                        <div class="relative size-6 mb-8 rotate-45 motion-safe:animate-enter">
                            <div class="absolute top-1/2 -translate-y-px w-full border-t-2 border-orange-500"></div>
                            <div class="absolute left-1/2 -translate-x-px h-full border-l-2 border-orange-300"></div>
                        </div>
                        <h1 class="text-white motion-safe:animate-enter motion-safe:[animation-delay:100ms]">Hi, my name is Jonas Schwendener.</h1>
                        <div class="text-gray-500 motion-safe:animate-enter motion-safe:[animation-delay:200ms]">I passionately design and develop software for the modern web.</div>
                    </div>
                    <div class="mt-12 2xl:text-lg space-y-4 text-balance">
                        <p class="motion-safe:animate-enter motion-safe:[animation-delay:350ms]">I'm a co-founder and lead developer of <a href="https://blond.swiss" class="text-white underline underline-offset-4 decoration-gray-700 hover:decoration-gray-500 transition-colors">Blond</a>, the Swiss operating system for small businesses. Quotes, invoices, time tracking, bookkeeping and banking live in one place, and an AI agent takes care of the busywork.</p>
                        <p class="motion-safe:animate-enter motion-safe:[animation-delay:450ms]">Before that, I worked at <a href="https://racerfish.com" class="text-white underline underline-offset-4 decoration-gray-700 hover:decoration-gray-500 transition-colors">Racerfish</a>, a full-service digital agency, on Nitrous Evolve, our in-house CMS, and on the many websites and web apps built with it.</p>
                    </div>
                    <x-signature class="mt-10 w-36 text-gray-300 2xl:w-40 motion-safe:animate-enter motion-safe:[animation-delay:600ms]" />
                </div>

                <div class="relative w-full max-w-sm lg:max-w-none">
                    <figure class="relative motion-safe:animate-enter motion-safe:[animation-delay:250ms]">
                        <div aria-hidden="true" class="absolute -inset-px rounded-[calc(var(--radius-2xl)+1px)] bg-gradient-to-b from-white/20 via-white/5 to-white/0"></div>
                        <div class="relative overflow-hidden rounded-2xl bg-gray-800 shadow-2xl shadow-black/60">
                            <img
                                src="{{ Vite::asset('resources/images/jonas.webp') }}"
                                alt="Portrait of Jonas Schwendener"
                                width="790"
                                height="987"
                                fetchpriority="high"
                                decoding="async"
                                class="aspect-4/5 w-full object-cover brightness-90 contrast-110"
                            >
                            <div aria-hidden="true" class="absolute inset-0 bg-gradient-to-t from-gray-950/50 via-transparent to-transparent"></div>
                            <div aria-hidden="true" class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-white/10"></div>
                        </div>
                    </figure>

                    <div aria-hidden="true" class="pointer-events-none absolute -left-16 -top-12 size-72 rounded-full bg-orange-500 opacity-25 blur-[80px] lg:-left-40 lg:-top-24 lg:size-[28rem] lg:opacity-[.28] lg:blur-[110px] mix-blend-screen motion-safe:animate-fade-in motion-safe:[animation-delay:500ms]"></div>
                </div>
            </div>
        </main>
    </body>
</html>
