<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="/favicon/site.webmanifest" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Forum&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[var(--light-gray)] text-slate-900">
<header
    x-data="{ mobileMenuOpen: false }"
    class="sticky top-0 z-40 bg-[#1F2F66] text-white shadow-md"
>
    <div class="container-page flex items-center justify-between py-4">
        <a
            href="{{ route('account.dashboard') }}"
            class="text-lg font-bold xl:text-base"
        >
            Личный кабинет партнера:
            {{ auth()->user()?->name }}
        </a>

        <!-- Desktop menu -->
        <div class="flex items-center gap-6 lg:hidden">
            <a
                href="{{ route('account.dashboard') }}"
                class="transition hover:text-blue-200"
            >
                Объекты
            </a>

            <a
                href="{{ route('portal.index') }}"
                class="transition hover:text-blue-200"
                wire:navigate
            >
                На сайт
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    type="submit"
                    class="transition hover:text-blue-200"
                >
                    Выйти
                </button>
            </form>
        </div>

        <!-- Mobile burger -->
        <button
            @click="mobileMenuOpen = true"
            class="hidden lg:flex items-center justify-center w-10 h-10 rounded-lg hover:bg-white/10"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
            </svg>
        </button>
    </div>

    <!-- Overlay -->
    <div
        x-show="mobileMenuOpen"
        x-transition.opacity
        @click="mobileMenuOpen = false"
        class="fixed inset-0 bg-black/50"
        style="display: none;"
    ></div>

    <!-- Mobile menu -->
    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed top-0 right-0 h-full w-80 max-w-[85vw] bg-[#24397D] shadow-2xl"
        style="display: none;"
    >
        <div class="flex items-center justify-between p-5 border-b border-white/10">
            <span class="font-semibold">
                Меню
            </span>

            <button
                @click="mobileMenuOpen = false"
                class="w-10 h-10 rounded-lg hover:bg-white/10"
            >
                ✕
            </button>
        </div>

        <nav class="flex flex-col p-5">
            <a
                href="{{ route('account.dashboard') }}"
                class="py-4 border-b border-white/10 hover:text-blue-200"
            >
                Объекты
            </a>

            <a
                href="{{ route('portal.index') }}"
                wire:navigate
                class="py-4 border-b border-white/10 hover:text-blue-200"
            >
                На сайт
            </a>

            <form
                method="POST"
                action="{{ route('logout') }}"
                class="mt-4"
            >
                @csrf

                <button
                    type="submit"
                    class="w-full rounded-xl bg-white/10 px-4 py-3 text-left hover:bg-white/20"
                >
                    Выйти
                </button>
            </form>
        </nav>
    </div>
</header>

<main class="container-page">
    {{ $slot }}
</main>

</body>
</html>
