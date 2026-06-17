<div class="min-h-screen">
    {{-- Hero --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-[#1A2B5E] via-[#2E4A92] to-[#4B6CD6] py-24 text-white md:py-16">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute right-0 top-0 h-96 w-96 -translate-y-1/2 translate-x-1/2 rounded-full bg-white"></div>
            <div class="absolute bottom-0 left-0 h-64 w-64 -translate-x-1/2 translate-y-1/2 rounded-full bg-white"></div>
        </div>

        <div class="container relative mx-auto px-4 lg:px-8">
            <div class="max-w-3xl">
                <div class="mb-6 inline-flex items-center rounded-full bg-white/10 px-4 py-1.5">
                    <span class="text-sm font-medium text-white/90">Комплексные решения</span>
                </div>

                <h1 class="mb-6 text-5xl font-bold leading-tight lg:text-4xl md:text-3xl">
                    Услуги
                </h1>

                <p class="max-w-2xl text-xl leading-relaxed text-white/85 lg:text-lg md:text-base">
                    Полный цикл гидроизоляционных работ — от проектирования до авторского надзора.
                    Собственное производство, аттестованные монтажники и гарантия до 25 лет.
                </p>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="bg-[#F5F8FE] py-20 md:py-14">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="mb-14 text-center md:mb-10">
                <h2 class="mb-4 text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                    Что мы делаем
                </h2>

                <p class="mx-auto max-w-2xl text-lg text-[#68737D] md:text-base">
                    Шесть направлений работ, охватывающих весь спектр задач по гидроизоляции строительных объектов
                </p>
            </div>

            @php
                $services = [
    [
        'icon' => 'layers',
        'title' => 'Гидроизоляция',
        'short' => 'Комплексная защита строительных конструкций от влаги, грунтовых и напорных вод.',
        'description' => 'Выполняем гидроизоляцию жилых, коммерческих и промышленных объектов. Подбираем технологию под конкретную задачу: от фундаментов и подвалов до кровель, резервуаров и гидротехнических сооружений. Используем современные мембранные, инъекционные и обмазочные системы с гарантией долговечности.',
        'features' => [
            'Гидроизоляция бетонных конструкций',
            'Гидроизоляция блоков ФБС',
            'Гидроизоляция водоемов',
            'Гидроизоляция дома',
            'Гидроизоляция кровли',
            'Гидроизоляция паркинга',
            'Гидроизоляция плит перекрытия',
            'Гидроизоляция подвала',
            'Подземная гидроизоляция',
            'Гидроизоляция пола',
            'Гидроизоляция резервуаров',
            'Гидроизоляция стен',
            'Гидроизоляция стилобатов',
            'Гидроизоляция террас',
            'Гидроизоляция трещин',
            'Гидроизоляция фонтанов',
            'Гидроизоляция фундаментов',
            'Гидроизоляция цоколя',
            'Гидроизоляция деформационных и рабочих швов',
        ],
        'accent' => 'from-[#3956BC] to-[#2E4A92]',
    ],

    [
        'icon' => 'shield',
        'title' => 'Герметизация',
        'short' => 'Надежная защита инженерных узлов, вводов и технологических отверстий от проникновения влаги.',
        'description' => 'Выполняем герметизацию строительных конструкций и инженерных коммуникаций с применением современных герметиков, инъекционных материалов и специализированных уплотнительных систем. Обеспечиваем долговременную защиту от протечек и разрушения конструкций.',
        'features' => [
            'Герметизация инженерных коммуникаций',
            'Герметизация кабельных вводов',
            'Герметизация проходов труб',
            'Герметизация вводов инженерных сетей',
            'Герметизация технологических отверстий',
            'Герметизация деформационных швов',
            'Герметизация холодных швов бетонирования',
            'Устранение активных протечек',
        ],
        'accent' => 'from-[#4B6CD6] to-[#6B8FE8]',
    ],

    [
        'icon' => 'droplets',
        'title' => 'Дренаж',
        'short' => 'Эффективный отвод грунтовых и поверхностных вод для защиты зданий и сооружений.',
        'description' => 'Проектируем и устраиваем дренажные системы, предотвращающие подтопление фундаментов, подвалов и подземных сооружений. Подбираем оптимальную схему водоотведения в зависимости от особенностей участка и гидрогеологических условий.',
        'features' => [
            'Пристенный дренаж',
            'Пластовый дренаж',
            'Дренаж фундаментов',
            'Дренаж подземных сооружений',
            'Устройство дренажных систем',
            'Монтаж дренажных колодцев',
            'Монтаж дренажных труб',
            'Комплексный водоотвод участка',
        ],
        'accent' => 'from-[#2E4A92] to-[#3956BC]',
    ],

    [
        'icon' => 'file-check',
        'title' => 'Диагностика',
        'short' => 'Профессиональное обследование гидроизоляции и поиск причин возникновения протечек.',
        'description' => 'Проводим комплексную диагностику гидроизоляционных систем на объектах любого назначения. Определяем причины протечек, оцениваем состояние конструкций и разрабатываем оптимальное техническое решение по ремонту или восстановлению гидроизоляции.',
        'features' => [
            'Диагностика гидроизоляции',
            'Обследование строительных конструкций',
            'Поиск мест протечек',
            'Оценка состояния гидроизоляционного слоя',
            'Определение причин намокания',
            'Подготовка технического заключения',
            'Разработка рекомендаций по ремонту',
            'Подбор технологии восстановления',
        ],
        'accent' => 'from-[#5A7DD8] to-[#3956BC]',
    ],
];
            @endphp

            <div class="grid grid-cols-4 gap-6 lg:grid-cols-2 md:!grid-cols-1">
                @foreach($services as $service)
                    <div
                        x-data="{ open: false }"
                        class="overflow-hidden rounded-2xl border border-[#E8EFFD] bg-white shadow-sm transition-shadow duration-300 hover:shadow-md"
                    >
                        <div class="h-2 bg-gradient-to-r {{ $service['accent'] }}"></div>

                        <div class="p-8 md:p-6">

                            <h3 class="mb-3 text-xl font-bold text-[#1A2B5E]">
                                {{ $service['title'] }}
                            </h3>

                            <p class="mb-4 text-sm leading-relaxed text-[#68737D]">
                                {{ $service['short'] }}
                            </p>

                            <button
                                type="button"
                                @click="open = !open"
                                class="flex items-center gap-1 text-sm font-medium text-[#3956BC] transition-colors hover:text-[#2E4A92]"
                            >
                                <span x-text="open ? 'Свернуть' : 'Подробнее'"></span>

                                <svg
                                    x-show="!open"
                                    class="h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="m19 9-7 7-7-7"/>
                                </svg>

                                <svg
                                    x-show="open"
                                    x-cloak
                                    class="h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="m5 15 7-7 7 7"/>
                                </svg>
                            </button>

                            <div
                                x-show="open"
                                x-collapse
                                x-cloak
                                class="mt-5 border-t border-[#E8EFFD] pt-5"
                            >
                                <p class="mb-4 text-sm leading-relaxed text-[#68737D]">
                                    {{ $service['description'] }}
                                </p>

                                <ul class="space-y-2">
                                    @foreach($service['features'] as $feature)
                                        <li class="flex items-start gap-2">
                                            <svg class="mt-0.5 h-4 w-4 shrink-0 text-[#3956BC]"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>

                                            <span class="text-sm text-[#374151]">
                                                {{ $feature }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section class="bg-white py-20 md:py-14">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="mb-14 text-center md:mb-10">
                <h2 class="mb-4 text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                    Как мы работаем
                </h2>

                <p class="mx-auto max-w-xl text-lg text-[#68737D] md:text-base">
                    Прозрачный процесс от заявки до гарантийного паспорта
                </p>
            </div>

            @php
                $process = [
                    ['step' => '01', 'title' => 'Заявка', 'desc' => 'Принимаем заявку и назначаем инженера для консультации'],
                    ['step' => '02', 'title' => 'Обследование', 'desc' => 'Выезд специалиста, обследование объекта и оценка задач'],
                    ['step' => '03', 'title' => 'КП', 'desc' => 'Разработка технического решения и коммерческого предложения'],
                    ['step' => '04', 'title' => 'Договор', 'desc' => 'Согласование и подписание договора с гарантийными обязательствами'],
                    ['step' => '05', 'title' => 'Монтаж', 'desc' => 'Выполнение работ аттестованными специалистами с контролем качества'],
                    ['step' => '06', 'title' => 'Сдача', 'desc' => 'Приёмка работ, передача документации и гарантийный паспорт'],
                ];
            @endphp

            <div class="mx-auto grid max-w-5xl grid-cols-3 gap-6 lg:grid-cols-2 sm:grid-cols-1">
                @foreach($process as $item)
                    <div class="relative rounded-2xl border border-[#E8EFFD] bg-[#F5F8FE] p-7">
                        <div class="mb-3 select-none text-5xl font-black leading-none text-[#E8EFFD]">
                            {{ $item['step'] }}
                        </div>

                        <h3 class="mb-2 text-lg font-bold text-[#3956BC]">
                            {{ $item['title'] }}
                        </h3>

                        <p class="text-sm leading-relaxed text-[#68737D]">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Advantages --}}
    <section class="bg-gradient-to-r from-[#3956BC] to-[#2E4A92] py-16 text-white md:py-12">
        <div class="container mx-auto px-4 lg:px-8">
            @php
                $advantages = [
                    ['value' => '15+', 'label' => 'Лет опыта'],
                    ['value' => '500+', 'label' => 'Объектов сдано'],
                    ['value' => '25 лет', 'label' => 'Гарантия'],
                    ['value' => '50+', 'label' => 'Специалистов'],
                ];
            @endphp

            <div class="grid grid-cols-4 gap-8 text-center lg:grid-cols-2 sm:grid-cols-1">
                @foreach($advantages as $item)
                    <div>
                        <div class="mb-2 text-4xl font-black md:text-3xl">
                            {{ $item['value'] }}
                        </div>

                        <div class="text-sm text-white/75">
                            {{ $item['label'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-[#F5F8FE] py-20 text-center md:py-14">
        <div class="container mx-auto px-4 lg:px-8">
            <h2 class="mb-4 text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                Нужна консультация по вашему объекту?
            </h2>

            <p class="mx-auto mb-8 max-w-xl text-lg text-[#68737D] md:text-base">
                Инженер выедет на объект, проведёт обследование и подготовит техническое решение бесплатно
            </p>

            <button class="inline-flex items-center gap-2 rounded-xl bg-[#3956BC] px-8 py-4 font-semibold text-white shadow-lg shadow-[#3956BC]/25 transition-colors hover:bg-[#2E4A92]">
                <span>Оставить заявку</span>

                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                </svg>
            </button>
        </div>
    </section>
</div>
