<div class="min-h-screen">
    <!-- Hero -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-gradient-to-br from-[#2E4A92] to-[#4B6CD6] text-white">
        <div class="container mx-auto px-8 lg:px-4 container-page">
            <h1 class="text-6xl xl:text-5xl md:text-4xl sm:text-3xl font-bold mb-6 md:mb-4">
                Документация
            </h1>

            <p class="text-2xl lg:text-xl md:text-lg sm:text-base text-white/90 max-w-3xl">
                Сертификаты, стандарты и техническая документация
            </p>
        </div>
    </section>

    <!-- Introduction -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-white container-page">
        <div class="container mx-auto px-8 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-8 md:mb-6">
                    О продукции
                </h2>

                <div class="text-lg md:text-base text-[var(--steel-gray)]">
                    <p class="mb-6 leading-relaxed">
                        ПВХ-мембрана  1.8 / 2.5 / 3.2 мм — это современное решение для надежной гидроизоляции подземных
                        конструкций. Продукция производится в соответствии с международными стандартами качества и имеет все
                        необходимые сертификаты.
                    </p>

                    <p class="mb-6 leading-relaxed">
                        Наша компания гарантирует высокое качество продукции благодаря строгому контролю на всех этапах
                        производства. Мембрана  прошла все необходимые испытания и получила подтверждение
                        соответствия требованиям технических регламентов Таможенного союза.
                    </p>

                    <p class="leading-relaxed">
                        Вся продукция сертифицирована и соответствует ГОСТ 32626-2014. Мы предоставляем полный пакет
                        технической документации для проектирования и монтажа гидроизоляционных систем.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Specifications -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-[var(--light-gray)]">
        <div class="container mx-auto px-8 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-8 md:mb-6">
                    Технические характеристики
                </h2>

                <div class="bg-white rounded-2xl p-8 md:p-6 sm:p-5 mb-8">
                    <div class="grid grid-cols-2 md:!grid-cols-1 gap-6 md:gap-4">
                        @foreach([
                            ['Толщина мембраны', '1.8 / 2.5 / 3.2 мм'],
                            ['Прочность на разрыв', '28 МПа'],
                            ['Относительное удлинение', '15%'],
                            ['Температурный диапазон', '-40°C до +60°C'],
                            ['Класс водонепроницаемости', 'W20'],
                            ['Гарантия', '25 лет'],
                            ['Ширина рулона', '2.05 м'],
                            ['Длина рулона', '20 м'],
                        ] as [$label, $value])
                            <div class="pb-4 border-b border-gray-200">
                                <div class="text-sm text-[var(--steel-gray)] mb-1">
                                    {{ $label }}
                                </div>

                                <div class="text-lg md:text-base font-bold text-[#3956BC]">
                                    {{ $value }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Documents -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-white">
        <div class="container mx-auto px-8 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-8 md:mb-6">
                    Документы для скачивания
                </h2>

                <p class="text-lg md:text-base text-[var(--steel-gray)] mb-12 md:mb-8">
                    Вся необходимая техническая документация, сертификаты и инструкции доступны для скачивания в формате PDF.
                </p>

                <div class="grid grid-cols-2 md:!grid-cols-1 gap-6">
                    @foreach($documents as $doc)
                        <div class="bg-[var(--light-gray)] rounded-xl p-6 md:p-5 hover:shadow-lg transition-all">
                            <div class="flex items-start gap-4 sm:flex-col">
                                <div class="shrink-0 w-12 h-12 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-lg flex items-center justify-center shadow-sm">
                                    @switch($doc['icon'])
                                        @case('award')
                                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <circle cx="12" cy="8" r="5"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 13.5 7 22l5-3 5 3-1.5-8.5"/>
                                            </svg>
                                            @break

                                        @case('shield')
                                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                            </svg>
                                            @break

                                        @default
                                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 2v6h6"/>
                                            </svg>
                                    @endswitch
                                </div>

                                <div class="flex-1 w-full">
                                    <h3 class="font-bold text-[#3956BC] mb-2">
                                        {{ $doc['title'] }}
                                    </h3>

                                    <p class="text-sm text-[var(--steel-gray)] mb-3">
                                        {{ $doc['description'] }}
                                    </p>

                                    <div class="flex items-center justify-between gap-4 sm:flex-col sm:items-start">
                                        <span class="text-xs text-[var(--steel-gray)]">
                                            {{ $doc['size'] }}
                                        </span>

                                        <button
                                            type="button"
                                            class="px-4 py-2 bg-[#3956BC] text-white text-sm font-medium rounded-lg hover:bg-[#2A3F8F] transition-colors flex items-center gap-2 sm:w-full sm:justify-center"
                                        >
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v12m0 0l-5-5m5 5l5-5"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 21h14"/>
                                            </svg>

                                            <span>Скачать</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Assurance -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-[var(--light-gray)]">
        <div class="container mx-auto px-8 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-8 md:mb-6">
                    Контроль качества
                </h2>

                <div class="bg-white rounded-2xl p-8 md:p-6 sm:p-5">
                    <p class="text-lg md:text-base text-[var(--steel-gray)] mb-6 leading-relaxed">
                        Каждая партия продукции проходит многоступенчатый контроль качества. Мы гарантируем соответствие всех
                        технических характеристик заявленным параметрам.
                    </p>

                    <ul class="space-y-4">
                        @foreach([
                            'Входной контроль сырья от проверенных поставщиков',
                            'Производственный контроль на всех этапах изготовления',
                            'Лабораторные испытания готовой продукции',
                            'Сертификация в аккредитованных центрах',
                        ] as $item)
                            <li class="flex items-start gap-3">
                                <div class="shrink-0 w-6 h-6 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-full flex items-center justify-center mt-1">
                                    <span class="text-white text-xs">✓</span>
                                </div>

                                <span class="text-[var(--steel-gray)] md:text-sm">
                                    {{ $item }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
