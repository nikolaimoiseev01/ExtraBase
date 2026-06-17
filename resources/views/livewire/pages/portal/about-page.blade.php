<div
    x-data="{ contactOpen: false }"
    class="min-h-screen"
>
    @php
        $stats = [
            ['value' => '11', 'label' => 'Лет опыта'],
            ['value' => '16', 'label' => 'Сотрудников со стажем от 5 лет'],
            ['value' => '26 000 м²', 'label' => 'Ежегодный объём работ'],
            ['value' => 'от 200 м²', 'label' => 'Минимальный объём проекта'],
        ];

        $values = [
            ['label' => 'Надёжность', 'desc' => 'Каждый шов проверяется перед сдачей объекта'],
            ['label' => 'Честность', 'desc' => 'Фиксированная смета без скрытых платежей'],
            ['label' => 'Экспертиза', 'desc' => 'Штатные специалисты со стажем от 5 лет'],
            ['label' => 'Ответственность', 'desc' => 'Гарантия до 25 лет на выполненные работы'],
        ];

        $specializations = [
            [
                'title' => 'Мембранная',
                'description' => 'Гидроизоляция ПВХ и HDPE мембранами для фундаментов, тоннелей, паркингов и кровель. Сварка швов с ультразвуковым контролем.',
                'gradient' => 'from-[#1A2B5E] to-[#3956BC]',
            ],
            [
                'title' => 'Рулонная',
                'description' => 'Применение битумно-полимерных и геосинтетических материалов. Подходит для горизонтальных и вертикальных поверхностей.',
                'gradient' => 'from-[#2E4A92] to-[#5A7DD8]',
            ],
            [
                'title' => 'Полиуретановая',
                'description' => 'Жидкие однокомпонентные составы для кровель, балконов, террас, тоннелей и металлоконструкций. Бесшовное покрытие.',
                'gradient' => 'from-[#3956BC] to-[#6B8FE8]',
            ],
            [
                'title' => 'Инъекционная',
                'description' => 'Устранение активных течей и уплотнение трещин без остановки эксплуатации объекта. Полиуретановые и акрилатные смолы.',
                'gradient' => 'from-[#4B6CD6] to-[#2E4A92]',
            ],
        ];

        $advantages = [
            ['number' => '01', 'title' => 'Детальная фиксированная смета', 'description' => 'Исключает неожиданные расходы — цена проекта фиксируется в договоре.'],
            ['number' => '02', 'title' => 'Строгое соблюдение сроков', 'description' => 'Гарантированное завершение работ в оговорённые договором даты.'],
            ['number' => '03', 'title' => 'Гарантия до 25 лет', 'description' => 'Официальная гарантия на выполненные работы и применяемые материалы.'],
            ['number' => '04', 'title' => 'Скидки на объём', 'description' => 'Специальные условия для крупных объектов и постоянных заказчиков.'],
            ['number' => '05', 'title' => 'Штатные бригады', 'description' => 'Собственные монтажники с подтверждённым опытом на реальных проектах.'],
            ['number' => '06', 'title' => 'Соблюдение ГОСТ и СНиП', 'description' => 'Все работы выполняются в строгом соответствии с действующими нормативами.'],
            ['number' => '07', 'title' => 'Зона работы — до 200 км от Москвы', 'description' => 'Выезжаем на объекты в Москве, Московской области и соседних регионах.'],
        ];

        $projects = [
            [
                'title' => 'Детская больница святой Ольги',
                'address' => 'Москва, Орлово-Давыдовский пер., 2А',
                'area' => '10 500 м²',
                'image' => '/fixed/works/1.1.jpg',
            ],
            [
                'title' => 'Жилой дом с подземной автостоянкой',
                'address' => 'Москва, ул. Каспийская, уч. 28',
                'area' => '2 300 м²',
                'image' => '/fixed/works/2.1.jpg',
            ],
            [
                'title' => 'Производственный корпус',
                'address' => 'г. Кирово-Чепецк',
                'area' => 'Промышленный объект',
                'image' => '/fixed/works/3.1.jpg',
            ],
        ];

    @endphp

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-[#1A2B5E] via-[#2E4A92] to-[#4B6CD6] py-24 text-white lg:py-20 md:py-16 sm:py-12">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute right-0 top-0 h-96 w-96 -translate-y-1/2 translate-x-1/2 rounded-full bg-white"></div>
            <div class="absolute bottom-0 left-0 h-64 w-64 -translate-x-1/2 translate-y-1/2 rounded-full bg-white"></div>
        </div>

        <div class="container relative mx-auto px-4 lg:px-8 md:px-4">
            <div class="max-w-3xl">
                <div class="mb-6 inline-flex items-center rounded-full bg-white/10 px-4 py-1.5">
                    <span class="text-sm font-medium text-white/90">О компании</span>
                </div>

                <h1 class="mb-6 text-5xl font-bold leading-tight lg:text-4xl md:text-3xl">
                    СВ ТИМ
                </h1>

                <p class="max-w-2xl text-xl leading-relaxed text-white/85 lg:text-lg md:text-base">
                    Специализированная компания по гидроизоляции строительных конструкций.
                    Работаем с 2012 года, выполняем проекты в Москве и Московской области.
                </p>
            </div>

            <div class="mt-14 grid grid-cols-4 gap-6 border-t border-white/20 pt-14 lg:grid-cols-2 md:mt-10 md:pt-10 sm:grid-cols-1">
                @foreach($stats as $stat)
                    <div>
                        <div class="mb-1 text-3xl font-black md:text-2xl">
                            {{ $stat['value'] }}
                        </div>
                        <div class="text-sm text-white/65">
                            {{ $stat['label'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Mission --}}
    <section class="bg-white py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 lg:px-8 md:px-4">
            <div class="mx-auto max-w-5xl">
                <div class="grid grid-cols-2 items-center gap-12 lg:grid-cols-1 lg:gap-8">
                    <div>
                        <p class="mb-3 text-sm font-semibold uppercase tracking-wide text-[#3956BC]">
                            Наша миссия
                        </p>

                        <h2 class="mb-6 text-4xl font-bold leading-tight text-[#1A2B5E] lg:text-3xl md:text-2xl">
                            Долгосрочная защита объектов от влаги
                        </h2>

                        <p class="text-lg leading-relaxed text-[#68737D] md:text-base">
                            Мы применяем инновационные технологии и высокие стандарты качества, чтобы сохранить
                            жильё, инвестиции и инфраструктуру от разрушительного воздействия воды.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-1">
                        @foreach($values as $value)
                            <div class="rounded-xl border border-[#E8EFFD] bg-[#F5F8FE] p-5">
                                <h3 class="mb-1.5 font-bold text-[#3956BC]">
                                    {{ $value['label'] }}
                                </h3>

                                <p class="text-xs leading-relaxed text-[#68737D]">
                                    {{ $value['desc'] }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Specializations --}}
    <section class="bg-[#F5F8FE] py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 lg:px-8 md:px-4">
            <div class="mb-14 text-center md:mb-10">
                <p class="mb-3 text-sm font-semibold uppercase tracking-wide text-[#3956BC]">
                    Специализация
                </p>

                <h2 class="mb-4 text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                    4 вида гидроизоляции
                </h2>

                <p class="mx-auto max-w-xl text-lg text-[#68737D] md:text-base">
                    Подбираем технологию под задачу объекта, условия эксплуатации и бюджет
                </p>
            </div>

            <div class="grid grid-cols-4 gap-6 lg:grid-cols-2 md:!grid-cols-1">
                @foreach($specializations as $spec)
                    <div class="overflow-hidden rounded-2xl border border-[#E8EFFD] bg-white shadow-sm transition-shadow hover:shadow-md">
                        <div class="h-2 bg-gradient-to-r {{ $spec['gradient'] }}"></div>

                        <div class="p-6">
                            <div class="mb-4 h-12 w-12 rounded-xl bg-gradient-to-br {{ $spec['gradient'] }}"></div>

                            <h3 class="mb-3 text-lg font-bold text-[#1A2B5E]">
                                {{ $spec['title'] }}
                            </h3>

                            <p class="text-sm leading-relaxed text-[#68737D]">
                                {{ $spec['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Advantages --}}
    <section class="bg-white py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 lg:px-8 md:px-4">
            <div class="mb-14 text-center md:mb-10">
                <p class="mb-3 text-sm font-semibold uppercase tracking-wide text-[#3956BC]">
                    Почему мы
                </p>

                <h2 class="text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                    7 причин выбрать «СВ ТИМ»
                </h2>
            </div>

            <div class="mx-auto grid max-w-5xl grid-cols-3 gap-5 lg:grid-cols-2 md:!grid-cols-1">
                @foreach($advantages as $advantage)
                    <div class="flex gap-4 rounded-2xl border border-[#E8EFFD] bg-[#F5F8FE] p-6">
                        <div class="shrink-0 select-none text-4xl font-black leading-none text-[#D0DAEF]">
                            {{ $advantage['number'] }}
                        </div>

                        <div>
                            <h3 class="mb-1.5 font-bold text-[#1A2B5E]">
                                {{ $advantage['title'] }}
                            </h3>

                            <p class="text-sm leading-relaxed text-[#68737D]">
                                {{ $advantage['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Projects --}}
    <section class="bg-[#F5F8FE] py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 lg:px-8 md:px-4">
            <div class="mb-10 flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="mb-3 text-sm font-semibold uppercase tracking-wide text-[#3956BC]">
                        Портфолио
                    </p>

                    <h2 class="text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                        Реализованные проекты
                    </h2>
                </div>

                <a wire:navigate
                    href="{{route('portal.works')}}"
                    class="inline-flex items-center gap-2 text-sm font-semibold text-[#3956BC] transition-colors hover:text-[#2E4A92]"
                >
                    <span>Все работы</span>
                    <span>→</span>
                </a>
            </div>

            <div class="grid grid-cols-3 gap-6 lg:grid-cols-2 md:!grid-cols-1">
                @foreach($projects as $project)
                    <div class="overflow-hidden rounded-2xl border border-[#E8EFFD] bg-white shadow-sm transition-shadow hover:shadow-md">
                        <div class="h-48 overflow-hidden">
                            <img
                                src="{{ $project['image'] }}"
                                alt="{{ $project['title'] }}"
                                class="h-full w-full object-cover transition-transform duration-500 hover:scale-105"
                            >
                        </div>

                        <div class="p-5">
                            <h3 class="mb-1 font-bold text-[#1A2B5E]">
                                {{ $project['title'] }}
                            </h3>

                            <p class="mb-3 text-xs text-[#68737D]">
                                {{ $project['address'] }}
                            </p>

                            <span class="rounded-full bg-[#E8EFFD] px-2.5 py-1 text-xs font-semibold text-[#3956BC]">
                                {{ $project['area'] }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

        {{-- Contact modal --}}
    <div
        x-show="contactOpen"
        x-cloak
        x-transition.opacity
        @keydown.escape.window="contactOpen = false"
        @click.self="contactOpen = false"
        class="fixed inset-0 z-[60] flex items-center justify-center bg-black/50 p-4"
    >
        <div class="relative w-full max-w-lg rounded-2xl bg-white shadow-xl">
            <button
                type="button"
                @click="contactOpen = false"
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
