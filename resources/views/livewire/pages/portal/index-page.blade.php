<div
    x-data="{
        contactModalOpen: false,
        calculatorData: {
            objectType: '',
            area: '',
            depth: '',
            soilType: ''
        }
    }"
    class="min-h-screen"
>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-[#2E4A92] via-[#3956BC] to-[#4B6CD6] overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070')] bg-cover bg-center opacity-15"></div>

        <div class="container mx-auto px-8 xl:px-6 lg:px-4 relative z-10 md:py-12">
            <div class="grid grid-cols-2 lg:!grid-cols-1 gap-12 lg:gap-8 items-center container-page">
                <div class="text-white">
                    <h1 class="text-6xl md:text-2xl font-bold mb-6 leading-tight">
                        Инновационный материал для подземной гидроизоляции
                    </h1>

                    <p class="text-2xl xl:text-xl md:text-lg sm:text-base text-white/90 mb-8 leading-relaxed">
                        ПВХ-мембрана ООО "СВ ТИМ" 1.8 / 2.5 / 3.2 мм для фундаментов, тоннелей, подземных сооружений и промышленных объектов
                    </p>

                    <div class="flex flex-row md:flex-col gap-4">
                        <button
                            @click="contactModalOpen = true"
                            class="px-8 md:px-6 py-4 bg-white text-[#3956BC] font-bold rounded-lg hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg"
                        >
                            Получить расчет
                        </button>

                        <button class="px-8 md:px-6 py-4 bg-white/10 backdrop-blur-sm text-white font-bold rounded-lg border-2 border-white/30 hover:bg-white/20 transition-all flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                <polyline points="7 10 12 15 17 10"/>
                                <line x1="12" x2="12" y1="15" y2="3"/>
                            </svg>
                            <span>Скачать документацию</span>
                        </button>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 md:p-6 border border-white/20">
                    <h3 class="text-white text-2xl md:text-xl font-bold mb-6">Технические характеристики</h3>

                    <div class="space-y-4">
                        <div class="flex justify-between items-center gap-4 pb-4 border-b border-white/20">
                            <span class="text-white/70">Толщина</span>
                            <span class="text-white font-bold">1.8 / 2.5 / 3.2 мм</span>
                        </div>
                        <div class="flex justify-between items-center gap-4 pb-4 border-b border-white/20">
                            <span class="text-white/70">Прочность</span>
                            <span class="text-white font-bold">28 МПа</span>
                        </div>
                        <div class="flex justify-between items-center gap-4 pb-4 border-b border-white/20">
                            <span class="text-white/70">Температура</span>
                            <span class="text-white font-bold">-40°C до +60°C</span>
                        </div>
                        <div class="flex justify-between items-center gap-4 pb-4 border-b border-white/20">
                            <span class="text-white/70">Гарантия</span>
                            <span class="text-white font-bold">25 лет</span>
                        </div>
                        <div class="flex justify-between items-center gap-4">
                            <span class="text-white/70">Класс</span>
                            <span class="text-white font-bold">W20</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="py-20 lg:py-16 md:py-12 bg-white container-page">
        <div class="container mx-auto px-8 xl:px-6 lg:px-4">
            <div class="text-center mb-16 lg:mb-10">
                <h2 class="text-5xl xl:text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-4">
                    Преимущества ООО "СВ ТИМ"
                </h2>
                <p class="text-xl md:text-lg sm:text-base text-[var(--steel-gray)] max-w-3xl mx-auto">
                    Современное решение для надежной гидроизоляции подземных конструкций
                </p>
            </div>

            <div class="grid grid-cols-4 lg:grid-cols-2 md:!grid-cols-1  gap-6">
                @foreach($advantages as $index => $advantage)
                    <div class="bg-[var(--light-gray)] rounded-xl p-6 hover:shadow-lg transition-all hover:-translate-y-1">
                        <div class="w-12 h-12 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white">
                                @if($index == 0)
                                    <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                                @elseif($index == 1 || $index == 4)
                                    <path d="M12 2.69l5.74 5.88-5.74 5.88-5.74-5.88z"/><path d="M12 21.31l5.74-5.88-5.74-5.88-5.74 5.88z"/>
                                @elseif($index == 2 || $index == 5)
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                @elseif($index == 3)
                                    <path d="M12 3v18"/><path d="M5.6 5.6l12.8 12.8"/><path d="M18.4 5.6L5.6 18.4"/>
                                @elseif($index == 6)
                                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                                @else
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/>
                                @endif
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#3956BC] mb-2">{{ $advantage['title'] }}</h3>
                        <p class="text-[var(--steel-gray)] text-sm">{{ $advantage['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Product Overview Section -->
    <section class="py-20 lg:py-16 md:py-12 bg-gradient-to-b from-[var(--light-gray)] to-white">
        <div class="container mx-auto px-8 xl:px-6 lg:px-4 container-page">
            <div class="grid grid-cols-2 lg:!grid-cols-1 gap-12 lg:gap-8 items-center">
                <div>
                    <h2 class="text-5xl xl:text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-6">
                        Многослойная система защиты
                    </h2>

                    <p class="text-lg md:text-base text-[var(--steel-gray)] mb-8 leading-relaxed">
                        ПВХ-мембрана ООО "СВ ТИМ" — это комплексное решение для гидроизоляции, включающее мембрану, дренажный слой, теплоизоляцию и герметичные сварные швы.
                    </p>

                    <div class="space-y-4">
                        @foreach([
                            ['ПВХ-мембрана 1.8 / 2.5 / 3.2 мм', 'Основной гидроизоляционный слой'],
                            ['Дренажный слой', 'Отвод грунтовых вод'],
                            ['Сварные швы', 'Абсолютная герметичность соединений'],
                        ] as [$title, $description])
                            <div class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-[#3956BC] mt-1 shrink-0">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                                <div>
                                    <h4 class="font-bold text-[#3956BC]">{{ $title }}</h4>
                                    <p class="text-[var(--steel-gray)] text-sm">{{ $description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-gradient-to-br from-[#4B6CD6] to-[#2E4A92] rounded-2xl p-12 md:p-6 text-white shadow-xl">
                    <div class="space-y-6 md:space-y-4">
                        <div class="h-16 bg-white/20 rounded-lg flex items-center justify-center border border-white/30">
                            <span class="font-bold">Бетон</span>
                        </div>
                        <div class="h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="font-bold">ПВХ-мембрана</span>
                        </div>
                        <div class="h-10 bg-white/30 rounded-lg flex items-center justify-center">
                            <span class="font-bold">Дренаж</span>
                        </div>
                        <div class="h-12 bg-white/20 rounded-lg flex items-center justify-center">
                            <span class="font-bold">Теплоизоляция</span>
                        </div>
                        <div class="h-8 bg-white/10 rounded-lg flex items-center justify-center">
                            <span class="font-bold text-sm">Защитный слой</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Calculator -->
    <section class="py-20 lg:py-16 md:py-12 bg-white container-page">
        <div class="container mx-auto px-8 xl:px-6 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12 lg:mb-8">
                    <h2 class="text-5xl xl:text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-4">
                        Рассчитайте количество материала
                    </h2>
                    <p class="text-xl md:text-lg sm:text-base text-[var(--steel-gray)]">
                        Получите предварительный расчет для вашего объекта
                    </p>
                </div>

                <div class="bg-[var(--light-gray)] rounded-2xl p-8 md:p-6">
                    <div class="grid grid-cols-2 lg:!grid-cols-1 gap-6 mb-6">
                        <div>
                            <label class="block text-sm font-bold text-[#3956BC] mb-2">Тип объекта</label>
                            <select x-model="calculatorData.objectType" class="w-full px-4 py-3 bg-white rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3956BC]">
                                <option value="">Выберите тип</option>
                                <option value="foundation">Фундамент</option>
                                <option value="tunnel">Тоннель</option>
                                <option value="parking">Парковка</option>
                                <option value="pool">Бассейн</option>
                                <option value="reservoir">Резервуар</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-[#3956BC] mb-2">Площадь (м²)</label>
                            <input type="number" x-model="calculatorData.area" placeholder="Введите площадь" class="w-full px-4 py-3 bg-white rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3956BC]">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-[#3956BC] mb-2">Глубина залегания (м)</label>
                            <input type="number" x-model="calculatorData.depth" placeholder="Введите глубину" class="w-full px-4 py-3 bg-white rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3956BC]">
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-[#3956BC] mb-2">Тип грунта</label>
                            <select x-model="calculatorData.soilType" class="w-full px-4 py-3 bg-white rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3956BC]">
                                <option value="">Выберите тип грунта</option>
                                <option value="clay">Глина</option>
                                <option value="sand">Песок</option>
                                <option value="loam">Суглинок</option>
                                <option value="rock">Скала</option>
                            </select>
                        </div>
                    </div>

                    <button
                        @click="contactModalOpen = true"
                        class="w-full px-8 md:px-6 py-4 bg-gradient-to-r from-[#3956BC] to-[#4B6CD6] text-white font-bold rounded-lg hover:from-[#2E4A92] hover:to-[#3956BC] transition-all shadow-lg flex items-center justify-center gap-2"
                    >
                        <span>Получить коммерческое предложение</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications Section -->
    <section class="py-20 lg:py-16 md:py-12 bg-[var(--light-gray)]">
        <div class="container mx-auto px-8 xl:px-6 lg:px-4 container-page">
            <div class="text-center mb-16 lg:mb-10">
                <h2 class="text-5xl xl:text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-4">
                    Сферы применения
                </h2>
                <p class="text-xl md:text-lg sm:text-base text-[var(--steel-gray)]">
                    Универсальное решение для различных типов объектов
                </p>
            </div>

            <div class="grid grid-cols-3 xl:grid-cols-2 lg:!grid-cols-1 gap-6">
                @foreach($applications as $app)
                    <div class="group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all">
                        <div class="h-48 bg-gradient-to-br from-[#6B8FE8] to-[#4B6CD6]"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#3956BC] mb-2">{{ $app['title'] }}</h3>
                            <p class="text-[var(--steel-gray)] mb-4">{{ $app['description'] }}</p>
                            <a wire:navigate href="{{ route('portal.products') }}" class="inline-flex items-center gap-2 text-[#3956BC] font-bold hover:underline">
                                <span>Подробнее</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Installation Section -->
    <section class="py-20 lg:py-16 md:py-12 bg-white container-page">
        <div class="container mx-auto px-8 xl:px-6 lg:px-4">
            <div class="text-center mb-16 lg:mb-10">
                <h2 class="text-5xl xl:text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-4">
                    Монтаж и обслуживание
                </h2>
                <p class="text-xl md:text-lg sm:text-base text-[var(--steel-gray)]">
                    Профессиональная установка гидроизоляции
                </p>
            </div>

            <div class="grid grid-cols-4 xl:grid-cols-2 lg:!grid-cols-1 gap-6">
                @foreach(['Сварка швов', 'Укладка мембраны', 'Монтажные методы', 'Контроль качества'] as $title)
                    <div class="bg-[var(--light-gray)] rounded-xl p-6 text-center">
                        <div class="w-16 h-16 bg-[#3956BC] rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-white">
                                <circle cx="12" cy="12" r="10"/>
                                <polygon points="10 8 16 12 10 16 10 8"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-[#3956BC]">{{ $title }}</h3>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a wire:navigate href="{{ route('portal.technical-solutions') }}" class="inline-flex items-center justify-center gap-2 px-8 md:px-6 py-4 bg-[#3956BC] text-white font-bold rounded-lg hover:bg-opacity-90 transition-all">
                    <span>Смотреть все инструкции</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-20 lg:py-16 md:py-12 bg-[var(--light-gray)]">
        <div class="container mx-auto px-8 xl:px-6 lg:px-4 container-page">
            <div class="text-center mb-16 lg:mb-10">
                <h2 class="text-5xl xl:text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-4">
                    Реализованные проекты
                </h2>
                <p class="text-xl md:text-lg sm:text-base text-[var(--steel-gray)]">
                    Более 500 успешно завершенных объектов
                </p>
            </div>

            <div class="grid grid-cols-3 xl:grid-cols-2 lg:!grid-cols-1 gap-6">
                @foreach($projects as $project)
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all">
                        <div class="h-56 bg-gradient-to-br from-[#6B8FE8] to-[#4B6CD6]"></div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-[#3956BC] mb-3">{{ $project['title'] }}</h3>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between gap-4">
                                    <span class="text-[var(--steel-gray)]">Локация:</span>
                                    <span class="font-bold text-[#3956BC] text-right">{{ $project['location'] }}</span>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <span class="text-[var(--steel-gray)]">Тип:</span>
                                    <span class="font-bold text-[#3956BC] text-right">{{ $project['type'] }}</span>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <span class="text-[var(--steel-gray)]">Площадь:</span>
                                    <span class="font-bold text-[#3956BC] text-right">{{ $project['area'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <a wire:navigate href="{{ route('portal.documentation') }}" class="inline-flex items-center justify-center gap-2 px-8 md:px-6 py-4 bg-[#3956BC] text-white font-bold rounded-lg hover:bg-[#2A3F8F] transition-all">
                    <span>Все проекты</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Documentation Preview -->
    <section class="py-20 lg:py-16 md:py-12 bg-white container-page">
        <div class="container mx-auto px-8 xl:px-6 lg:px-4">
            <div class="text-center mb-16 lg:mb-10">
                <h2 class="text-5xl xl:text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-4">
                    Документация и сертификаты
                </h2>
                <p class="text-xl md:text-lg sm:text-base text-[var(--steel-gray)]">
                    Полное техническое описание и разрешительная документация
                </p>
            </div>

            <div class="grid grid-cols-4 xl:grid-cols-2 lg:!grid-cols-1 gap-6">
                @foreach(['ГОСТ 32626-2014', 'ISO 9001:2015', 'Сертификат соответствия', 'Технический паспорт'] as $doc)
                    <div class="bg-[var(--light-gray)] rounded-xl p-6 text-center hover:shadow-lg transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-16 h-16 text-[#3956BC] mx-auto mb-4">
                            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>

                        <h3 class="font-bold text-[#3956BC] mb-3">{{ $doc }}</h3>

                        <button class="text-[#3956BC] font-bold hover:underline flex items-center justify-center mx-auto gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                <polyline points="7 10 12 15 17 10"/>
                                <line x1="12" x2="12" y1="15" y2="3"/>
                            </svg>
                            <span>Скачать PDF</span>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-20 lg:py-16 md:py-12 bg-white">
        <div class="container mx-auto px-8 xl:px-6 lg:px-4">
            <div class="max-w-5xl mx-auto">
                <div class="grid grid-cols-2 lg:!grid-cols-1 gap-12 lg:gap-8 items-center">
                    <div>
                        <h2 class="text-5xl xl:text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-6">
                            Свяжитесь с нами
                        </h2>

                        <p class="text-lg md:text-base text-[var(--steel-gray)] mb-8 leading-relaxed">
                            Оставьте заявку, и наш специалист свяжется с вами в течение 24 часов для консультации по вашему проекту
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-lg flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-bold text-[#3956BC]">Телефон</div>
                                    <a href="tel:+74951234567" class="text-[var(--steel-gray)] hover:text-[#3956BC] transition-colors">
                                        +7 (495) 123-45-67
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-lg flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white">
                                        <rect width="20" height="16" x="2" y="4" rx="2"/>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-bold text-[#3956BC]">Email</div>
                                    <a href="mailto:info@extrabase.ru" class="text-[var(--steel-gray)] hover:text-[#3956BC] transition-colors">
                                        info@extrabase.ru
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-lg flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-white">
                                        <circle cx="12" cy="12" r="10"/>
                                        <polyline points="12 6 12 12 16 14"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-bold text-[#3956BC]">Режим работы</div>
                                    <div class="text-[var(--steel-gray)]">Пн-Пт: 9:00 - 18:00</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[var(--light-gray)] rounded-2xl p-8 md:p-6">
                        <h3 class="text-2xl md:text-xl font-bold text-[#3956BC] mb-6">Отправить сообщение</h3>
                        <livewire:components.contact-form />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partner CTA -->
    <section class="py-20 lg:py-16 md:py-12 bg-gradient-to-br from-[#2E4A92] to-[#3956BC] text-white">
        <div class="container mx-auto px-8 xl:px-6 lg:px-4 text-center">
            <h2 class="text-5xl xl:text-4xl md:text-3xl sm:text-2xl font-bold mb-6">
                Стать официальным партнером
            </h2>

            <p class="text-xl md:text-lg sm:text-base text-white/90 mb-8 max-w-2xl mx-auto">
                Присоединяйтесь к сети дилеров ООО "СВ ТИМ" и получите доступ к эксклюзивным условиям сотрудничества
            </p>

            <div class="flex flex-row md:flex-col justify-center gap-4">
                <a wire:navigate href="{{ route('login') }}" class="px-8 md:px-6 py-4 bg-white text-[#3956BC] font-bold rounded-lg hover:bg-gray-100 transition-all">
                    Вход для партнеров
                </a>

                <button
                    @click="contactModalOpen = true"
                    class="px-8 md:px-6 py-4 bg-white/10 backdrop-blur-sm text-white font-bold rounded-lg border-2 border-white/30 hover:bg-white/20 transition-all"
                >
                    Оставить заявку
                </button>
            </div>
        </div>
    </section>

    <!-- Contact Form Modal -->
    <div
        x-show="contactModalOpen"
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
            @click.away="contactModalOpen = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="relative w-full max-w-lg bg-white rounded-2xl shadow-xl"
        >
            <button @click="contactModalOpen = false" class="absolute right-4 top-4 text-gray-400 hover:text-gray-600">
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
</div>
