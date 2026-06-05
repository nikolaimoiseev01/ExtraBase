<div x-data="{ contactModalOpen: false }" class="min-h-screen">
    <!-- Hero -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-gradient-to-br from-[#2E4A92] to-[#4B6CD6] text-white">
        <div class="container mx-auto px-8 lg:px-4 container-page">
            <h1 class="text-6xl xl:text-5xl md:text-4xl sm:text-3xl font-bold mb-6 md:mb-4">
                Наши услуги, продукция
            </h1>

            <p class="text-2xl lg:text-xl md:text-lg sm:text-base text-white/90 max-w-3xl">
                Полный каталог продукции и услуг для гидроизоляции подземных конструкций
            </p>
        </div>
    </section>

    <!-- Products Catalog -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-white container-page">
        <div class="container mx-auto px-8 lg:px-4">
            <div class="flex items-center justify-between gap-6 mb-12 md:mb-8 md:flex-col md:items-start">
                <div>
                    <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-4">
                        Каталог продукции
                    </h2>

                    <p class="text-lg md:text-base text-[var(--steel-gray)]">
                        Комплексные решения для гидроизоляции
                    </p>
                </div>

                <button
                    type="button"
                    class="px-6 py-3 bg-[#3956BC] text-white font-medium rounded-lg hover:bg-[#2A3F8F] transition-colors flex items-center gap-2 md:w-full md:justify-center"
                >
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v12m0 0l-5-5m5 5l5-5"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 21h14"/>
                    </svg>
                    <span>Скачать каталог</span>
                </button>
            </div>

            <div class="grid grid-cols-3 lg:grid-cols-2 md:!grid-cols-1 gap-8 lg:gap-6">
                @foreach($products as $product)
                    <div class="bg-[var(--light-gray)] rounded-xl overflow-hidden hover:shadow-xl transition-all">
                        <div class="h-48 md:h-40 bg-gradient-to-br from-[#6B8FE8] to-[#4B6CD6] flex items-center justify-center">
                            <svg class="w-20 h-20 md:w-16 md:h-16 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.3 7 12 12l8.7-5M12 22V12"/>
                            </svg>
                        </div>

                        <div class="p-6 md:p-5">
                            <div class="text-sm text-[#5A7DD8] font-medium mb-2">
                                {{ $product['category'] }}
                            </div>

                            <h3 class="text-xl md:text-lg font-bold text-[#3956BC] mb-3">
                                {{ $product['title'] }}
                            </h3>

                            <p class="text-[var(--steel-gray)] md:text-sm mb-4">
                                {{ $product['description'] }}
                            </p>

                            <div class="space-y-2 mb-4">
                                @foreach($product['specifications'] as $spec)
                                    <div class="flex items-start gap-2">
                                        <svg class="w-4 h-4 text-[#3956BC] mt-0.5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                            <circle cx="12" cy="12" r="10"/>
                                        </svg>

                                        <span class="text-sm text-[var(--steel-gray)]">
                                            {{ $spec }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>

                            <button
                                type="button"
                                class="w-full px-4 py-2 bg-[#3956BC] text-white font-medium rounded-lg hover:bg-[#2A3F8F] transition-colors"
                            >
                                Подробнее
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-[var(--light-gray)]">
        <div class="container mx-auto px-8 lg:px-4">
            <div class="text-center mb-12 md:mb-8">
                <svg class="w-16 h-16 md:w-12 md:h-12 text-[#3956BC] mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.8-3.8a6 6 0 0 1-7.9 7.9l-6.9 6.9a2.1 2.1 0 0 1-3-3l6.9-6.9a6 6 0 0 1 7.9-7.9l-3.8 3.8z"/>
                </svg>

                <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-4">
                    Наши услуги
                </h2>

                <p class="text-xl lg:text-lg md:text-base text-[var(--steel-gray)] max-w-3xl mx-auto">
                    Профессиональный монтаж и техническое сопровождение
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-1 gap-8 lg:gap-6 max-w-5xl mx-auto">
                @foreach($services as $service)
                    <div class="bg-white rounded-xl p-8 md:p-6 sm:p-5 hover:shadow-lg transition-all">
                        <h3 class="text-2xl md:text-xl font-bold text-[#3956BC] mb-3">
                            {{ $service['title'] }}
                        </h3>

                        <p class="text-[var(--steel-gray)] md:text-sm mb-6">
                            {{ $service['description'] }}
                        </p>

                        <div class="space-y-2">
                            <div class="font-medium text-[#3956BC] mb-3">
                                Включает:
                            </div>

                            @foreach($service['included'] as $item)
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4 text-[#3956BC] shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                        <circle cx="12" cy="12" r="10"/>
                                    </svg>

                                    <span class="text-[var(--steel-gray)] md:text-sm">
                                        {{ $item }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Product -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-white">
        <div class="container mx-auto px-8 lg:px-4">
            <div class="grid grid-cols-2 lg:grid-cols-1 gap-12 lg:gap-8 items-center max-w-6xl mx-auto">
                <div class="aspect-square bg-gradient-to-br from-[#6B8FE8] to-[#4B6CD6] rounded-2xl flex items-center justify-center shadow-xl">
                    <svg class="w-32 h-32 md:w-24 md:h-24 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.3 7 12 12l8.7-5M12 22V12"/>
                    </svg>
                </div>

                <div>
                    <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-6 md:mb-4">
                        ПВХ-мембрана Extra Base 3.2 мм
                    </h2>

                    <p class="text-lg md:text-base text-[var(--steel-gray)] mb-8 md:mb-6 leading-relaxed">
                        Флагманский продукт нашей компании. Разработана специально для российских условий эксплуатации с
                        учетом перепадов температур и высокого уровня грунтовых вод.
                    </p>

                    <div class="space-y-3 mb-8 md:mb-6">
                        @foreach([
                            'Толщина 3.2 мм - оптимальная прочность',
                            'Гарантия 25 лет от производителя',
                            'Монтаж при температуре до -20°C',
                        ] as $item)
                            <div class="flex items-center gap-3">
                                <svg class="w-6 h-6 md:w-5 md:h-5 text-[#3956BC] shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                    <circle cx="12" cy="12" r="10"/>
                                </svg>

                                <span class="text-[#3956BC] font-medium md:text-sm">
                                    {{ $item }}
                                </span>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex gap-4 sm:flex-col">
                        <button
                            type="button"
                            class="px-8 py-4 md:px-6 md:py-3 bg-[#3956BC] text-white font-bold rounded-lg hover:bg-[#2A3F8F] transition-colors flex items-center justify-center gap-2"
                        >
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v12m0 0l-5-5m5 5l5-5"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 21h14"/>
                            </svg>
                            <span>Скачать спецификацию</span>
                        </button>

                        <button
                            type="button"
                            @click="contactModalOpen = true"
                            class="px-8 py-4 md:px-6 md:py-3 border-2 border-[#3956BC] text-[#3956BC] font-bold rounded-lg hover:bg-[#3956BC] hover:text-white transition-colors flex items-center justify-center gap-2"
                        >
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 16.92v3a2 2 0 0 1-2.18 2A19.8 19.8 0 0 1 3 5.18 2 2 0 0 1 5.11 3h3a2 2 0 0 1 2 1.72c.12.9.32 1.77.59 2.61a2 2 0 0 1-.45 2.11L9 10.69a16 16 0 0 0 4.31 4.31l1.25-1.25a2 2 0 0 1 2.11-.45c.84.27 1.71.47 2.61.59A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <span>Заказать звонок</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-gradient-to-br from-[#2E4A92] to-[#3956BC] text-white">
        <div class="container mx-auto px-8 lg:px-4 text-center">
            <h2 class="text-5xl lg:text-4xl md:text-3xl sm:text-2xl font-bold mb-6 md:mb-4">
                Нужна консультация по выбору?
            </h2>

            <p class="text-xl md:text-lg sm:text-base text-white/90 mb-8 md:mb-6 max-w-2xl mx-auto">
                Наши специалисты помогут подобрать оптимальное решение для вашего объекта
            </p>

            <button
                type="button"
                @click="contactModalOpen = true"
                class="px-8 py-4 md:px-6 md:py-3 bg-white text-[#3956BC] font-bold rounded-lg hover:bg-gray-100 transition-all hover:scale-105"
            >
                Получить консультацию
            </button>
        </div>
    </section>

    <!-- Contact Form Modal -->
    <div
        x-show="contactModalOpen"
        x-transition.opacity
        class="fixed inset-0 z-[60] flex items-center justify-center bg-black/50 p-4"
        style="display: none;"
    >
        <div
            @click.away="contactModalOpen = false"
            x-transition.scale
            class="relative w-full max-w-lg bg-white rounded-2xl shadow-xl"
        >
            <button
                type="button"
                @click="contactModalOpen = false"
                class="absolute right-4 top-4 text-gray-400 hover:text-gray-600"
            >
                ✕
            </button>

            <div class="p-8 md:p-6 sm:p-5">
                <livewire:components.contact-form />
            </div>
        </div>
    </div>
</div>
