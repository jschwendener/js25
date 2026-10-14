<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @php
            $title = 'Jonas Schwendener – Co-founder & Lead Developer at Blond';
            $description = 'Jonas Schwendener designs and develops software for the modern web. Co-founder and lead developer of Blond, the Swiss operating system for small businesses.';
            $portrait = Vite::asset('resources/images/jonas.webp');

            $schema = [
                '@context' => 'https://schema.org',
                '@type' => 'ProfilePage',
                '@id' => url('/').'#profile',
                'url' => url('/'),
                'name' => $title,
                'description' => $description,
                'inLanguage' => 'en',
                'primaryImageOfPage' => $portrait,
                'mainEntity' => [
                    '@type' => 'Person',
                    '@id' => url('/').'#person',
                    'name' => 'Jonas Schwendener',
                    'givenName' => 'Jonas',
                    'familyName' => 'Schwendener',
                    'url' => url('/'),
                    'image' => $portrait,
                    'description' => $description,
                    'jobTitle' => 'Co-founder & Lead Developer',
                    'worksFor' => [
                        '@type' => 'Organization',
                        'name' => 'Blond',
                        'legalName' => 'StrawBlond GmbH',
                        'url' => 'https://blond.swiss',
                        'description' => 'The Swiss operating system for small businesses: quotes, invoices, time tracking, bookkeeping and banking in one place.',
                    ],
                    'alumniOf' => [
                        '@type' => 'Organization',
                        'name' => 'Racerfish',
                        'url' => 'https://racerfish.com',
                    ],
                    'knowsAbout' => ['Software design', 'Web development', 'Web applications', 'Content management systems', 'SaaS'],
                    'sameAs' => ['https://github.com/jschwendener'],
                ],
            ];
        @endphp

        <title>{{ $title }}</title>
        <meta name="description" content="{{ $description }}">
        <meta name="author" content="Jonas Schwendener">
        <meta name="robots" content="index, follow, max-image-preview:large">
        <link rel="canonical" href="{{ url('/') }}">

        <meta name="theme-color" content="#171717">
        <meta name="color-scheme" content="dark">
        <link rel="icon" href="/favicon.ico" sizes="32x32">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Open Graph / social previews -->
        <meta property="og:type" content="profile">
        <meta property="og:site_name" content="Jonas Schwendener">
        <meta property="og:locale" content="en_US">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="{{ $title }}">
        <meta property="og:description" content="{{ $description }}">
        <meta property="og:image" content="{{ asset('og.jpg') }}">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="Jonas Schwendener, co-founder and lead developer at Blond">
        <meta property="profile:first_name" content="Jonas">
        <meta property="profile:last_name" content="Schwendener">
        <meta name="twitter:card" content="summary_large_image">

        <link rel="me" href="https://github.com/jschwendener">

        <script type="application/ld+json">@json($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG)</script>

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
                        <p class="text-gray-500 motion-safe:animate-enter motion-safe:[animation-delay:200ms]">I passionately design and develop software for the modern web.</p>
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
