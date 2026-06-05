<div class="min-h-screen lg:pt-16 sm:pt-14">
    {{-- Hero --}}
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-gradient-to-br from-[#2E4A92] to-[#4B6CD6] text-white">
        <div class="container mx-auto px-8 lg:px-4 container-page">
            <h1 class="text-6xl xl:text-5xl md:text-4xl sm:text-3xl font-bold mb-6 md:mb-4">
                Личный кабинет партнера
            </h1>

            <p class="text-2xl lg:text-xl md:text-lg sm:text-base text-white/90 max-w-3xl">
                Удобный инструмент для управления проектами и взаимодействия с Extra Base
            </p>
        </div>
    </section>


    {{-- Benefits --}}
    <section class="py-20 lg:py-14 md:py-10 sm:py-8 bg-white container-page">
        <div class="container mx-auto px-4 lg:px-8 md:px-5 sm:px-4">
            <div class="text-center mb-16 lg:mb-12 md:mb-8">
                <h2 class="text-4xl lg:text-3xl md:text-2xl sm:text-xl font-bold text-[#3956BC] mb-4">
                    Возможности личного кабинета
                </h2>

                <p class="text-xl lg:text-lg md:text-base sm:text-sm text-[var(--steel-gray)] max-w-3xl mx-auto">
                    Все инструменты для эффективной работы с нашей продукцией в одном месте
                </p>
            </div>

            <div class="grid grid-cols-3 lg:grid-cols-2 md:!grid-cols-1 sm:grid-cols-1 gap-8 lg:gap-6 md:gap-4">
                @foreach($accountBenefits as $benefit)
                    <div class="bg-[var(--light-gray)] rounded-xl p-8 lg:p-6 md:p-5 sm:p-4 hover:shadow-lg transition-all">
                        <div class="w-14 h-14 md:w-12 md:h-12 sm:w-10 sm:h-10 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-lg flex items-center justify-center mb-4">

                            <x-dynamic-component
                                :component="$benefit['icon']"
                                class="w-7 h-7 md:w-6 md:h-6 text-white"
                            />

                        </div>

                        <h3 class="text-xl md:text-lg sm:text-base font-bold text-[#3956BC] mb-3 md:mb-2">
                            {{ $benefit['title'] }}
                        </h3>

                        <p class="text-[var(--steel-gray)] md:text-sm">
                            {{ $benefit['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Login CTA --}}
    <section class="py-20 lg:py-14 md:py-10 sm:py-8 bg-[var(--light-gray)]">
        <div class="container mx-auto px-4 lg:px-8 md:px-5 sm:px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl md:rounded-xl shadow-xl overflow-hidden">
                    <div class="grid grid-cols-2 lg:grid-cols-1">
                        {{-- Left --}}
                        <div class="bg-gradient-to-br from-[#4B6CD6] to-[#2E4A92] p-12 lg:p-8 md:p-6 sm:p-5 text-white flex flex-col justify-center">
                            <h2 class="text-3xl md:text-2xl sm:text-xl font-bold mb-6 md:mb-4">
                                Вход для партнеров
                            </h2>

                            <p class="text-lg md:text-base sm:text-sm text-white/90 mb-8 md:mb-6">
                                Войдите в личный кабинет чтобы получить доступ ко всем возможностям партнерской программы
                            </p>

                            <div class="space-y-4 md:space-y-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M12 15l-3.5 2 1-4-3-2.8 4-.3L12 6l1.5 3.9 4 .3-3 2.8 1 4z"/>
                                        </svg>
                                    </div>
                                    <span class="sm:text-sm">Доступ к закрытым материалам</span>
                                </div>

                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M3 3v18h18"/>
                                            <path d="M7 15l4-4 3 3 5-6"/>
                                        </svg>
                                    </div>
                                    <span class="sm:text-sm">Статистика по объектам</span>
                                </div>

                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                            <circle cx="9" cy="7" r="4"/>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                        </svg>
                                    </div>
                                    <span class="sm:text-sm">Поддержка 24/7</span>
                                </div>
                            </div>
                        </div>

                        {{-- Right --}}
                        <div class="p-12 lg:p-8 md:p-6 sm:p-5">
                            <div class="mb-8 md:mb-6">
                                <h3 class="text-2xl md:text-xl font-bold text-[#3956BC] mb-2">
                                    Авторизация
                                </h3>

                                <p class="text-[var(--steel-gray)] md:text-sm">
                                    Введите свои учетные данные
                                </p>
                            </div>

                            <form wire:submit.prevent="login" class="space-y-6 md:space-y-4">
                                @csrf

                                <div>
                                    <label class="block text-sm font-bold text-[#3956BC] mb-2">
                                        Email или логин
                                    </label>

                                    <div class="relative">
                                        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-[var(--steel-gray)]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M4 4h16v16H4z"/>
                                            <path d="m22 6-10 7L2 6"/>
                                        </svg>

                                        <input
                                            type="text"
                                            name="email"
                                            wire:model="form.email"
                                            required
                                            class="w-full pl-12 pr-4 py-3 bg-[var(--light-gray)] rounded-lg border-2 border-transparent focus:border-[#3956BC] focus:outline-none"
                                            placeholder="partner@example.com"
                                        >
                                        @error('form.email')
                                        <div class="mt-2 text-sm text-red-200">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-[#3956BC] mb-2">
                                        Пароль
                                    </label>

                                    <div class="relative">
                                        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-[var(--steel-gray)]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <rect x="3" y="11" width="18" height="11" rx="2"/>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                        </svg>

                                        <input
                                            type="password"
                                            wire:model="form.password"
                                            name="password"
                                            required
                                            class="w-full pl-12 pr-4 py-3 bg-[var(--light-gray)] rounded-lg border-2 border-transparent focus:border-[#3956BC] focus:outline-none"
                                            placeholder="••••••••"
                                        >
                                    </div>
                                    @error('form.password')
                                    <div class="mt-2 text-sm text-red-200">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="flex items-center justify-between gap-4 sm:flex-col sm:items-start">
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="checkbox" name="remember" class="w-4 h-4 rounded">
                                        <span class="text-[var(--steel-gray)] text-sm">Запомнить меня</span>
                                    </label>

                                </div>

                                <button
                                    type="submit"
                                    class="w-full py-4 md:py-3 bg-[#3956BC] text-white font-bold rounded-lg hover:bg-[#2A3F8F] transition-all hover:scale-105"
                                >
                                    Войти в личный кабинет
                                </button>
                            </form>

                            <div class="mt-8 md:mt-6 text-center">
                                <p class="text-[var(--steel-gray)] text-sm mb-4">
                                    Еще не партнер?
                                </p>

                                <a href="#" class="text-[#3956BC] hover:underline font-medium">
                                    Оставить заявку на сотрудничество
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Become Partner --}}
    <section class="py-20 lg:py-14 md:py-10 sm:py-8 bg-white">
        <div class="container mx-auto px-4 lg:px-8 md:px-5 sm:px-4">
            <div class="text-center mb-16 lg:mb-12 md:mb-8">
                <h2 class="text-4xl lg:text-3xl md:text-2xl sm:text-xl font-bold text-[#3956BC] mb-4">
                    Почему стоит стать партнером?
                </h2>
            </div>

            <div class="grid grid-cols-3 lg:grid-cols-2 md:grid-cols-1 gap-8 lg:gap-6 gap-8 md:gap-6 sm:gap-8 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="w-20 h-20 md:w-16 md:h-16 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 md:w-8 md:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 15l-3.5 2 1-4-3-2.8 4-.3L12 6l1.5 3.9 4 .3-3 2.8 1 4z"/>
                        </svg>
                    </div>

                    <h3 class="text-xl md:text-lg font-bold text-[#3956BC] mb-2">
                        Эксклюзивные условия
                    </h3>

                    <p class="text-[var(--steel-gray)] md:text-sm">
                        Специальные цены и бонусная программа для партнеров
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 md:w-16 md:h-16 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 md:w-8 md:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>

                    <h3 class="text-xl md:text-lg font-bold text-[#3956BC] mb-2">
                        Поддержка экспертов
                    </h3>

                    <p class="text-[var(--steel-gray)] md:text-sm">
                        Техническая и маркетинговая поддержка на всех этапах
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 md:w-16 md:h-16 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 md:w-8 md:h-8 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73L13 2.27a2 2 0 0 0-2 0L4 6.27A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                            <path d="M3.27 6.96 12 12.01l8.73-5.05"/>
                            <path d="M12 22.08V12"/>
                        </svg>
                    </div>

                    <h3 class="text-xl md:text-lg font-bold text-[#3956BC] mb-2">
                        Премиум продукт
                    </h3>

                    <p class="text-[var(--steel-gray)] md:text-sm">
                        Работа с лидером рынка гидроизоляционных систем
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
