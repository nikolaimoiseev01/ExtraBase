<div
    x-data="{
        currentSlide: 0,
        solutions: [
            {
                title: 'Узел примыкания к стене',
                category: 'Фундаменты',
                description: 'Техническое решение для гидроизоляции узла примыкания мембраны к вертикальной стене',
            },
            {
                title: 'Проход коммуникаций',
                category: 'Фундаменты',
                description: 'Узел прохода инженерных коммуникаций через гидроизоляционный слой',
            },
            {
                title: 'Угловые соединения',
                category: 'Фундаменты',
                description: 'Схема устройства внутренних и внешних углов гидроизоляции',
            },
            {
                title: 'Гидроизоляция тоннеля',
                category: 'Тоннели',
                description: 'Полное решение для гидроизоляции транспортного тоннеля',
            },
            {
                title: 'Деформационный шов',
                category: 'Тоннели',
                description: 'Узел устройства деформационного шва с сохранением герметичности',
            },
            {
                title: 'Узел примыкания к колонне',
                category: 'Парковки',
                description: 'Техническое решение для обхода колонн и вертикальных конструкций',
            },
            {
                title: 'Примыкание к чаше бассейна',
                category: 'Бассейны',
                description: 'Гидроизоляция внутренней поверхности бассейна',
            },
            {
                title: 'Инверсионная кровля',
                category: 'Кровли',
                description: 'Устройство эксплуатируемой кровли с гидроизоляцией',
            },
            {
                title: 'Примыкание к парапету',
                category: 'Кровли',
                description: 'Узел примыкания гидроизоляции к парапету кровли',
            },
            {
                title: 'Сварной шов мембраны',
                category: 'Технология',
                description: 'Детальная схема выполнения сварного соединения мембран',
            },
        ],
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.solutions.length;
        },
        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.solutions.length) % this.solutions.length;
        }
    }"
    class="min-h-screen md:pt-16 sm:pt-14"
>
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-gradient-to-br from-[#2E4A92] to-[#4B6CD6] text-white">
        <div class="container mx-auto px-8 lg:px-4 container-page">
            <h1 class="text-6xl xl:text-5xl md:text-4xl sm:text-3xl font-bold mb-6 md:mb-4">
                Альбом технических решений
            </h1>

            <p class="text-2xl lg:text-xl md:text-lg sm:text-base text-white/90 max-w-3xl">
                Типовые узлы и детали монтажа гидроизоляции Extra Base
            </p>
        </div>
    </section>

    <section class="py-20 lg:py-14 md:py-10 sm:py-8 bg-white">
        <div class="container mx-auto px-4 lg:px-8 md:px-5 sm:px-4">
            <div class="max-w-6xl mx-auto">
                <div class="relative">
                    <div class="bg-[var(--light-gray)] rounded-2xl md:rounded-xl overflow-hidden mb-8 md:mb-6">
                        <div class="grid grid-cols-2 lg:grid-cols-1">
                            <div class="lg:aspect-auto md:aspect-[4/3] sm:aspect-square bg-gradient-to-br from-[#6B8FE8] to-[#4B6CD6] flex items-center justify-center">
                                <div class="text-center text-white p-12 md:p-8 sm:p-6">
                                    <div class="w-32 h-32 lg:w-28 lg:h-28 md:w-24 md:h-24 sm:w-20 sm:h-20 border-4 sm:border-2 border-white rounded-lg mx-auto mb-4 flex items-center justify-center">
                                        <span
                                            class="text-4xl md:text-3xl sm:text-2xl font-bold"
                                            x-text="currentSlide + 1"
                                        ></span>
                                    </div>

                                    <p class="text-sm opacity-80">
                                        Техническое решение
                                    </p>
                                </div>
                            </div>

                            <div class="p-8 lg:p-10 md:p-6 sm:p-5 flex flex-col justify-center">
                                <div
                                    class="inline-block px-4 py-2 sm:px-3 sm:py-1.5 bg-[#3956BC] text-white text-sm sm:text-xs font-medium rounded-lg mb-4 self-start"
                                    x-text="solutions[currentSlide].category"
                                ></div>

                                <h2
                                    class="text-3xl lg:text-3xl md:text-2xl sm:text-xl font-bold text-[#3956BC] mb-6 md:mb-4"
                                    x-text="solutions[currentSlide].title"
                                ></h2>

                                <p
                                    class="text-lg md:text-base sm:text-sm text-[var(--steel-gray)] mb-8 md:mb-6 leading-relaxed"
                                    x-text="solutions[currentSlide].description"
                                ></p>

                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-6 py-3 md:px-5 sm:px-4 sm:py-2.5 bg-[#3956BC] text-white font-medium rounded-lg hover:bg-[#2A3F8F] transition-colors self-start"
                                >
                                    <svg class="w-5 h-5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v12m0 0l-4-4m4 4l4-4M4 21h16" />
                                    </svg>
                                    <span>Скачать PDF</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <button
                        type="button"
                        @click="prevSlide()"
                        class="absolute left-4 md:left-2 sm:left-1 top-1/2 md:top-auto md:bottom-4 -translate-y-1/2 w-12 h-12 md:w-10 md:h-10 sm:w-9 sm:h-9 bg-white shadow-lg rounded-full flex items-center justify-center hover:bg-[#3956BC] hover:text-white transition-all"
                    >
                        <svg class="w-6 h-6 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button
                        type="button"
                        @click="nextSlide()"
                        class="absolute right-4 md:right-2 sm:right-1 top-1/2 md:top-auto md:bottom-4 -translate-y-1/2 w-12 h-12 md:w-10 md:h-10 sm:w-9 sm:h-9 bg-white shadow-lg rounded-full flex items-center justify-center hover:bg-[#3956BC] hover:text-white transition-all"
                    >
                        <svg class="w-6 h-6 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <div class="text-center mt-6">
                        <span class="text-[#3956BC] font-medium">
                            <span x-text="currentSlide + 1"></span>
                            /
                            <span x-text="solutions.length"></span>
                        </span>
                    </div>
                </div>

                <div class="mt-12 lg:mt-10 md:mt-8">
                    <h3 class="text-2xl md:text-xl sm:text-lg font-bold text-[#3956BC] mb-6 md:mb-4">
                        Все решения
                    </h3>

                    <div class="grid grid-cols-5 md:grid-cols-3 lg:grid-cols-2 gap-4 md:gap-3 sm:grid-cols-1">
                        <template x-for="(solution, index) in solutions" :key="index">
                            <button
                                type="button"
                                @click="currentSlide = index"
                                class="p-4 md:p-3 rounded-xl text-left transition-all"
                                :class="currentSlide === index
                                    ? 'bg-[#3956BC] text-white shadow-lg scale-105'
                                    : 'bg-[var(--light-gray)] text-[#3956BC] hover:bg-[#5A7DD8] hover:text-white'"
                            >
                                <div
                                    class="text-sm sm:text-xs font-medium mb-1"
                                    x-text="solution.category"
                                ></div>

                                <div
                                    class="text-xs line-clamp-2"
                                    x-text="solution.title"
                                ></div>
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 lg:py-14 md:py-10 sm:py-8 bg-[var(--light-gray)]">
        <div class="container mx-auto px-4 lg:px-8 md:px-5 sm:px-4 container-page">
            <div class="bg-gradient-to-br from-[#2E4A92] to-[#3956BC] rounded-2xl md:rounded-xl p-12 lg:p-10 md:p-7 sm:p-5 text-center text-white shadow-xl">
                <h2 class="text-4xl lg:text-3xl md:text-2xl sm:text-xl font-bold mb-6 md:mb-4">
                    Скачать полный альбом
                </h2>

                <p class="text-xl lg:text-lg md:text-base sm:text-sm text-white/90 mb-8 md:mb-6 max-w-2xl mx-auto">
                    Получите доступ ко всем техническим решениям в одном PDF-файле
                </p>

                <a
                    href="#"
                    class="px-8 py-4 md:px-6 md:py-3 sm:px-4 sm:py-3 bg-white text-[#3956BC] font-bold rounded-lg hover:bg-gray-100 transition-all hover:scale-105 inline-flex items-center gap-2"
                >
                    <svg class="w-5 h-5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v12m0 0l-4-4m4 4l4-4M4 21h16" />
                    </svg>
                    <span>Скачать полный альбом (PDF, 24 МБ)</span>
                </a>
            </div>
        </div>
    </section>
</div>
