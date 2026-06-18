<div
    x-data="homePage()"
    class="min-h-screen"
>
    @php
        $benefits = [
            [
                'value' => 'до 25 лет',
                'label' => 'Гарантия по договору',
                'desc' => 'Официальная гарантия на выполненные работы фиксируется в договоре',
            ],
            [
                'value' => '100%',
                'label' => 'Фиксированная смета и сроки',
                'desc' => 'Цена и срок сдачи объекта не изменятся после подписания договора',
            ],
            [
                'value' => '✓',
                'label' => 'Полный пакет документов',
                'desc' => 'Исполнительная документация, акты скрытых работ, гарантийный паспорт',
            ],
            [
                'value' => '26 000',
                'label' => 'м² работ в год',
                'desc' => 'Штатные бригады со стажем от 5 лет выполняют крупные объёмы',
            ],
        ];

        $serviceTabs = [
            ['id' => 'hydro', 'label' => 'Гидроизоляция'],
            ['id' => 'seal', 'label' => 'Герметизация'],
            ['id' => 'drain', 'label' => 'Дренаж'],
            ['id' => 'diag', 'label' => 'Диагностика'],
        ];

        $serviceItems = [
            'hydro' => [
                'Бетонных конструкций',
                'Блоков ФБС',
                'Водоёмов',
                'Дома',
                'Кровли',
                'Паркинга',
                'Плиты перекрытия',
                'Подвала',
                'Подземная',
                'Пола',
                'Резервуаров',
                'Стен',
                'Стилобата',
                'Террасы',
                'Трещин',
                'Фонтана',
                'Фундамента',
                'Цоколя',
                'Швов',
            ],
            'seal' => [
                'Инженерных коммуникаций',
                'Кабельных вводов',
            ],
            'drain' => [
                'Пристенный дренаж',
                'Пластовой дренаж',
            ],
            'diag' => [
                'Диагностика гидроизоляции',
            ],
        ];

        $projects = [
            [
                'title' => 'Детская больница святой Ольги',
                'address' => 'Москва, Орлово-Давыдовский пер. 2А',
                'area' => '10 500 м²',
                'tag' => 'Реконструкция',
                'image' => '/fixed/works/1.1.jpg',
            ],
            [
                'title' => 'Жилой дом с подземной автостоянкой',
                'address' => 'Москва, ул. Каспийская, уч. 28',
                'area' => '2 300 м²',
                'tag' => 'Реновация',
                'image' => '/fixed/works/2.1.jpg',
            ],
            [
                'title' => 'Производственный корпус',
                'address' => 'г. Кирово-Чепецк',
                'area' => 'Промышленный объект',
                'tag' => 'Промышленное',
                'image' => '/fixed/works/3.1.jpg',
            ],
        ];

        $aboutStats = [
            ['v' => '11', 'l' => 'лет опыта'],
            ['v' => '16', 'l' => 'специалистов'],
            ['v' => '200 км', 'l' => 'зона работ от МКАД'],
        ];

        $aboutList = [
            'Штатные бригады с подтверждённым проектным опытом',
            'Соблюдение ГОСТ, СНиП и проектной документации',
            'Фиксированная смета без скрытых платежей',
            'Полный пакет исполнительной документации',
        ];

        $contacts = [
            [
                'label' => 'Телефон',
                'value' => '+7 (495) 198-89-86',
                'href' => 'tel:+74951988986',
            ],
            [
                'label' => 'Email',
                'value' => 'info@svtym.ru',
                'href' => 'mailto:info@svtym.ru',
            ]
        ];
    @endphp

        <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-[#2E4A92] via-[#3956BC] to-[#4B6CD6] overflow-hidden">
        <div class="absolute inset-0 bg-[url('/fixed/welcome-bg.jpg')] bg-cover bg-center opacity-15"></div>

        <div class="container mx-auto px-8 xl:px-6 lg:px-4 relative z-10 md:py-12">
            <div class="grid grid-cols-2 lg:!grid-cols-1 gap-12 lg:gap-8 items-center container-page">
                <div class="text-white">
                    <h1 class="text-6xl md:text-2xl font-bold mb-6 leading-tight">
                        Инновационный материал для подземной гидроизоляции
                    </h1>

                    <p class="text-2xl xl:text-xl md:text-lg sm:text-base text-white/90 mb-8 leading-relaxed">
                        ПВХ-мембрана ООО "СВ ТИМ" 1.8 / 2.5 / 3.2 мм для фундаментов, тоннелей, подземных сооружений и промышленных объектов
                    </p>

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

    {{-- BENEFITS --}}
    <section class="border-b border-[#E8EFFD] bg-white py-16 lg:py-14 md:py-12 container-page">
        <div class="container mx-auto px-4 lg:px-8 md:px-4">
            <div class="grid grid-cols-4 gap-8 lg:grid-cols-2 md:grid-cols-1">
                @foreach($benefits as $benefit)
                    <div class="flex items-start gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#E8EFFD]">
                            <svg class="h-5 w-5 text-[#3956BC]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                <circle cx="12" cy="12" r="10"/>
                            </svg>
                        </div>

                        <div>
                            <div class="mb-1 text-xl font-black leading-none text-[#3956BC]">
                                {{ $benefit['value'] }}
                            </div>

                            <div class="mb-1 text-sm font-bold text-[#1A2B5E]">
                                {{ $benefit['label'] }}
                            </div>

                            <p class="text-xs leading-relaxed text-[#68737D]">
                                {{ $benefit['desc'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="bg-[#F5F8FE] py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 lg:px-8 md:px-4">
            <div class="mb-12 text-center md:mb-8">
                <p class="mb-3 text-sm font-semibold uppercase tracking-wide text-[#3956BC]">
                    Что мы делаем
                </p>

                <h2 class="mb-4 text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                    Наши услуги
                </h2>

                <p class="mx-auto max-w-xl text-lg text-[#68737D] md:text-base">
                    Подбираем технологию под задачу объекта — от фундамента до кровли
                </p>
            </div>

            <div class="mb-8 flex flex-wrap justify-center gap-2">
                @foreach($serviceTabs as $tab)
                    <button
                        type="button"
                        @click="activeTab = '{{ $tab['id'] }}'"
                        class="rounded-full border px-6 py-2.5 text-sm font-semibold transition-all duration-200"
                        :class="activeTab === '{{ $tab['id'] }}'
                            ? 'border-[#3956BC] bg-[#3956BC] text-white shadow-md shadow-[#3956BC]/25'
                            : 'border-[#E8EFFD] bg-white text-[#68737D] hover:border-[#3956BC] hover:text-[#3956BC]'"
                    >
                        {{ $tab['label'] }}
                    </button>
                @endforeach
            </div>

            <div class="mx-auto max-w-4xl rounded-2xl border border-[#E8EFFD] bg-white p-8 shadow-sm md:p-5">
                <div class="grid grid-cols-4 gap-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
                    <template x-for="item in serviceItems[activeTab]" :key="item">
                        <a
                            href="/services"
                            class="group flex items-center gap-2 rounded-xl border border-[#E8EFFD] bg-[#F5F8FE] px-4 py-3 transition-all hover:border-[#3956BC]/30 hover:bg-[#E8EFFD]"
                        >
                            <span class="shrink-0 text-[#3956BC] transition-transform group-hover:translate-x-0.5">›</span>
                            <span class="text-sm leading-snug text-[#374151] transition-colors group-hover:text-[#3956BC]" x-text="item"></span>
                        </a>
                    </template>
                </div>

                <div class="mt-6 border-t border-[#E8EFFD] pt-6 text-center">
                    <a
                        href="/services"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-[#3956BC] transition-colors hover:text-[#2E4A92]"
                    >
                        <span>Все услуги подробно</span>
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section class="bg-white py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 lg:px-8 md:px-4">
            <div class="mx-auto grid max-w-6xl grid-cols-2 items-center gap-16 lg:grid-cols-1 lg:gap-10">
                <div class="rounded-3xl bg-gradient-to-br from-[#1A2B5E] to-[#3956BC] p-12 text-center text-white md:p-8 sm:p-6">
                    <div class="mb-2 text-8xl font-black leading-none lg:text-7xl md:text-5xl">
                        26 000
                    </div>

                    <div class="mb-8 text-2xl font-bold text-white/75 md:text-xl">
                        м² гидроизолируем ежегодно
                    </div>

                    <div class="grid grid-cols-3 gap-4 border-t border-white/20 pt-8 sm:grid-cols-1">
                        @foreach($aboutStats as $stat)
                            <div>
                                <div class="text-2xl font-black">
                                    {{ $stat['v'] }}
                                </div>
                                <div class="mt-1 text-xs text-white/55">
                                    {{ $stat['l'] }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div>
                    <p class="mb-3 text-sm font-semibold uppercase tracking-wide text-[#3956BC]">
                        О компании
                    </p>

                    <h2 class="mb-6 text-4xl font-bold leading-tight text-[#1A2B5E] lg:text-3xl md:text-2xl">
                        СВ ТИМ — индивидуальный подход к каждому проекту
                    </h2>

                    <p class="mb-6 text-lg leading-relaxed text-[#68737D] md:text-base">
                        Каждый объект рассматривается индивидуально. Решения адаптируются под конкретного клиента,
                        задачи и условия эксплуатации. Защита гарантируется по договору до 25 лет.
                    </p>

                    <ul class="mb-8 space-y-3">
                        @foreach($aboutList as $item)
                            <li class="flex items-start gap-3">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-[#3956BC]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                    <circle cx="12" cy="12" r="10"/>
                                </svg>

                                <span class="text-sm text-[#374151]">
                                    {{ $item }}
                                </span>
                            </li>
                        @endforeach
                    </ul>

                    <a
                        href="/about"
                        class="inline-flex items-center gap-2 font-semibold text-[#3956BC] transition-colors hover:text-[#2E4A92]"
                    >
                        <span>Подробнее о компании</span>
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- PROJECTS --}}
    <section class="bg-[#F5F8FE] py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 lg:px-8 md:px-4  container-page">
            <div class="mb-10 flex flex-wrap items-end justify-between gap-4">
                <div>
                    <p class="mb-3 text-sm font-semibold uppercase tracking-wide text-[#3956BC]">
                        Портфолио
                    </p>

                    <h2 class="text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                        Наши работы
                    </h2>
                </div>

                <a
                    href="/our-works"
                    class="inline-flex items-center gap-2 text-sm font-semibold text-[#3956BC] transition-colors hover:text-[#2E4A92]"
                >
                    <span>Смотреть больше проектов</span>
                    <span>→</span>
                </a>
            </div>

            <div class="grid grid-cols-3 gap-6 lg:grid-cols-2 md:grid-cols-1">
                @foreach($projects as $project)
                    <a
                        href="/our-works"
                        class="group overflow-hidden rounded-2xl border border-[#E8EFFD] bg-white shadow-sm transition-all duration-300 hover:shadow-lg"
                    >
                        <div class="h-52 overflow-hidden">
                            <img
                                src="{{ $project['image'] }}"
                                alt="{{ $project['title'] }}"
                                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                            >
                        </div>

                        <div class="p-6">
                            <span class="rounded-full bg-[#E8EFFD] px-2.5 py-1 text-xs font-semibold text-[#3956BC]">
                                {{ $project['tag'] }}
                            </span>

                            <h3 class="mb-1 mt-3 font-bold text-[#1A2B5E] transition-colors group-hover:text-[#3956BC]">
                                {{ $project['title'] }}
                            </h3>

                            <p class="mb-3 text-xs text-[#68737D]">
                                {{ $project['address'] }}
                            </p>

                            <div class="flex items-center justify-between">
                                <span class="text-sm font-semibold text-[#3956BC]">
                                    {{ $project['area'] }}
                                </span>

                                <span class="text-[#3956BC] transition-transform group-hover:translate-x-1">›</span>
                            </div>
                        </div>
                    </a>
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

<script>
    function homePage() {
        return {
            activeTab: 'hydro',
            contactOpen: false,
            phone: '',

            serviceItems: @js($serviceItems),

            submitCallback() {
                alert('Спасибо! Мы перезвоним вам в ближайшее время.');
                this.phone = '';
            },
        };
    }
</script>
