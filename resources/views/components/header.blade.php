<header x-data="{ mobileMenuOpen: false, contactFormOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md transition-all duration-300">
    <div class="container mx-auto px-8 lg:px-4 container-page">
        <div class="flex items-center justify-between h-20 md:h-16">
            <!-- Logo -->
            <a href="{{ route('portal.index') }}" wire:navigate class="flex items-center gap-3">
                 <x-logo />
                <div class="text-xl md:text-lg font-bold text-[#3956BC]">
                    ООО<br>СВ ТИМ
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="flex lg:hidden items-center gap-6 xl:gap-4">
                <a wire:navigate href="{{ route('portal.about') }}" class="font-medium text-[#3956BC] transition-colors hover:text-[#5A7DD8]">
                    О нас
                </a>
                <a wire:navigate href="{{ route('portal.documentation') }}" class="font-medium text-[#3956BC] transition-colors hover:text-[#5A7DD8]">
                    Документация
                </a>
                <a wire:navigate href="{{ route('portal.products') }}" class="font-medium text-[#3956BC] transition-colors hover:text-[#5A7DD8]">
                    Наши услуги, продукция
                </a>
                <a wire:navigate href="{{ route('portal.technical-solutions') }}" class="font-medium text-[#3956BC] transition-colors hover:text-[#5A7DD8]">
                    Альбом технических решений
                </a>
                <a wire:navigate href="{{ route('portal.partners') }}" class="font-medium text-[#3956BC] transition-colors hover:text-[#5A7DD8]">
                    Партнеры
                </a>
            </nav>

            <!-- Right Side Actions -->
            <div class="flex lg:hidden items-center gap-4 xl:gap-3">
                <a href="tel:+74951234567" class="flex items-center gap-2 text-sm font-medium text-[#3956BC] xl:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <span>+7 (495) 123-45-67</span>
                </a>

                <button @click="contactFormOpen = true" class="px-6 xl:px-4 py-2.5 bg-[#3956BC] text-white text-sm font-medium rounded-lg hover:bg-[#2A3F8F] transition-colors flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                    <span>Обратная связь</span>
                </button>

                @auth
                    <a wire:navigate href="{{ route('account.dashboard') }}" class="px-6 xl:px-4 py-2.5 text-sm font-medium rounded-lg border-2 border-[#3956BC] text-[#3956BC] hover:bg-[#3956BC] hover:text-white transition-colors">
                        Личный кабинет
                    </a>
                @else
                    <a wire:navigate href="{{ route('login') }}" class="px-6 xl:px-4 py-2.5 text-sm font-medium rounded-lg border-2 border-[#3956BC] text-[#3956BC] hover:bg-[#3956BC] hover:text-white transition-colors">
                        Войти
                    </a>

                @endauth

            </div>

            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="hidden lg:block p-2 text-[#3956BC]">
                <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" x2="20" y1="12" y2="12"/>
                    <line x1="4" x2="20" y1="6" y2="6"/>
                    <line x1="4" x2="20" y1="18" y2="18"/>
                </svg>

                <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;">
                    <path d="M18 6 6 18"/>
                    <path d="m6 6 12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Contact Form Modal -->
    <div
        x-show="contactFormOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-[60] flex items-center justify-center bg-black/50 p-4"
        style="display: none;"
    >
        <div
            @click.away="contactFormOpen = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="relative w-full max-w-lg bg-white rounded-2xl shadow-xl"
        >
            <button @click="contactFormOpen = false" class="absolute right-4 top-4 text-gray-400 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6 6 18"/>
                    <path d="m6 6 12 12"/>
                </svg>
            </button>

            <div class="p-8 md:p-6">
                <livewire:components.contact-form />
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-40 bg-[#2E4A92] hidden lg:block"
        style="display: none;"
    >
        <div class="flex flex-col h-full pt-24 md:pt-20 px-6 md:px-4">
            <nav class="flex flex-col gap-6 md:gap-5">
                <a wire:navigate href="{{ route('portal.index') }}" @click="mobileMenuOpen = false" class="text-2xl md:text-xl font-medium text-white hover:text-[#5A7DD8] transition-colors">
                    Главная
                </a>
                <a wire:navigate href="{{ route('portal.about') }}" @click="mobileMenuOpen = false" class="text-2xl md:text-xl font-medium text-white hover:text-[#5A7DD8] transition-colors">
                    О нас
                </a>
                <a wire:navigate href="{{ route('portal.documentation') }}" @click="mobileMenuOpen = false" class="text-2xl md:text-xl font-medium text-white hover:text-[#5A7DD8] transition-colors">
                    Документация
                </a>
                <a wire:navigate href="{{ route('portal.products') }}" @click="mobileMenuOpen = false" class="text-2xl md:text-xl font-medium text-white hover:text-[#5A7DD8] transition-colors">
                    Наши услуги, продукция
                </a>
                <a wire:navigate href="{{ route('portal.technical-solutions') }}" @click="mobileMenuOpen = false" class="text-2xl md:text-xl font-medium text-white hover:text-[#5A7DD8] transition-colors">
                    Альбом технических решений
                </a>
                <a wire:navigate href="{{ route('portal.partners') }}" @click="mobileMenuOpen = false" class="text-2xl md:text-xl font-medium text-white hover:text-[#5A7DD8] transition-colors">
                    Партнеры
                </a>
            </nav>

            <div class="flex flex-col gap-4 mt-8">
                <a href="tel:+74951234567" class="flex items-center gap-2 text-lg md:text-base text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                    <span>+7 (495) 123-45-67</span>
                </a>

                <button @click="contactFormOpen = true; mobileMenuOpen = false" class="w-full px-6 py-3 bg-white text-[#3956BC] font-medium rounded-lg flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                    <span>Обратная связь</span>
                </button>

                <a wire:navigate href="{{ route('login') }}" @click="mobileMenuOpen = false" class="w-full px-6 py-3 border-2 border-white text-white font-medium rounded-lg text-center">
                    Войти
                </a>
            </div>
        </div>
    </div>
</header>
