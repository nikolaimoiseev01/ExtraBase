<div x-data="worksPage()" class="min-h-screen">
    @php
        $works = [
            [
                'id' => 1,
                'title' => 'Детская больница святой Ольги, стр. 1–4',
                'address' => 'Орлово-Давыдовский пер. 2А, стр. 1, 2, 3, 4',
                'city' => 'Москва',
                'duration' => '10 месяцев',
                'area' => '10 500 м²',
                'tag' => 'Реконструкция',
                'description' => 'Разработка проекта и выполнение гидроизоляции фундаментов реконструируемых зданий больницы и возводимого подземного паркинга.',
                'works' => [
                    'Гидроизоляция ПВХ мембраной горизонтальных и вертикальных частей фундаментов',
                    'Гидроизоляция подземного паркинга и его стилобата',
                    'Изоляция свай, инженерных коммуникаций, опалубочных отверстий',
                    'Утепление стен экструзионным пенополистиролом и ТермоВайтом',
                    'Гидроизоляция деформационных швов',
                ],
                'images' => [
                    '/fixed/works/1.1.jpg',
                    '/fixed/works/1.2.jpg',
                    '/fixed/works/1.3.jpg',
                ],
            ],
            [
                'id' => 2,
                'title' => 'Жилой дом с подземной автостоянкой',
                'address' => 'ул. Каспийская, вл. 28',
                'city' => 'Москва',
                'duration' => '2 месяца',
                'area' => '2 300 м²',
                'tag' => 'Реновация',
                'description' => 'Строительство жилого дома в рамках программы реновации. Гидроизоляция выполнена для дальнейших строительно-монтажных работ.',
                'works' => [
                    'Гидроизоляция стен фундамента',
                    'Гидроизоляция кровли паркинга',
                    'Установка штуцеров и инъекционных трубок',
                ],
                'images' => [
                    '/fixed/works/2.1.jpg',
                    '/fixed/works/2.2.jpg',
                    '/fixed/works/2.3.jpg',
                ],
            ],
            [
                'id' => 3,
                'title' => 'Жилой дом из 2-х корпусов',
                'address' => 'ул. Гаражная, вл. 3',
                'city' => 'Москва',
                'duration' => '6 месяцев',
                'area' => '3 500 м²',
                'tag' => 'Реновация',
                'description' => 'Строительство двухкорпусного жилого дома по программе реновации. Применён комплекс гидроизоляционных решений.',
                'works' => [
                    'Гидроизоляция оголовков свай',
                    'Гидроизоляция плиты фундамента — ПВХ мембрана',
                    'Переходная лента на битумные материалы',
                    'Гидроизоляция стен фундамента',
                ],
                'images' => [
                    '/fixed/works/3.1.jpg',
                    '/fixed/works/3.2.jpg',
                    '/fixed/works/3.3.jpg',
                    '/fixed/works/3.4.jpg'
                ],
            ],
            [
                'id' => 4,
                'title' => 'Детская больница святой Ольги — подземный паркинг',
                'address' => 'Орлово-Давыдовский пер. 2А',
                'city' => 'Москва',
                'duration' => '4 месяца',
                'area' => '1 700 м²',
                'tag' => 'Подземный паркинг',
                'description' => 'Строительство подземного паркинга для детской больницы. Применена система ПВХ мембран разной толщины.',
                'works' => [
                    'Гидроизоляция фундамента и стен — ПВХ мембрана 2,0 мм',
                    'Гидроизоляция стилобатной части — ПВХ мембрана 3,2 мм',
                    'Уклонообразующий слой и утепление',
                    'Гидроизоляция вводов и технических проёмов',
                ],
                'images' => [
                    '/fixed/works/4.1.jpg',
                    '/fixed/works/4.2.jpg',
                    '/fixed/works/4.3.jpg',
                    '/fixed/works/4.4.jpg'
                ],
            ],
            [
                'id' => 5,
                'title' => 'Многоквартирный жилой дом',
                'address' => 'Потаповский пер., 5с4',
                'city' => 'Москва',
                'duration' => '9 месяцев',
                'area' => '2 500 м²',
                'tag' => 'Реконструкция',
                'description' => 'Реконструкция существующего жилого здания в историческом центре Москвы. Применены инъекционные технологии.',
                'works' => [
                    'Инъектирование полиуретановыми смолами',
                    'Отсечная гидроизоляция на подземном паркинге',
                    'Устройство гильз для инженерных коммуникаций',
                ],
                'images' => [
                    '/fixed/works/5.1.jpg',
                    '/fixed/works/5.2.jpg',
                    '/fixed/works/5.3.jpg',
                ],
            ],
            [
                'id' => 6,
                'title' => 'Здание Пробирной палаты и Пробирного училища',
                'address' => 'Набережная канала Грибоедова, 51',
                'city' => 'Санкт-Петербург',
                'duration' => '2 месяца',
                'area' => '3 500 м²',
                'status' => 'В производстве работ',
                'tag' => 'Историческое здание',
                'description' => 'Ремонтнопригодная гидроизоляция фундамента исторического здания в Санкт-Петербурге.',
                'works' => [
                    'Гидроизоляция фундамента — ПВХ мембрана ExtraBase UW-S, 2,5 мм',
                    'Гидроизоляция — ПВХ мембрана ExtraBase UW-T, 1,5 мм',
                    'Создание ремонтнопригодной системы гидроизоляции',
                ],
                'images' => [
                    '/fixed/works/6.1.jpg',
                    '/fixed/works/6.2.jpg',
                    '/fixed/works/6.3.jpg',
                    '/fixed/works/6.4.jpg',
                ],
            ],
            [
                'id' => 7,
                'title' => 'Подземная парковка А29, ЖК СберСити',
                'address' => 'Рублево-Архангельское, ЖК СберСити',
                'city' => 'Москва',
                'duration' => '2 месяца',
                'area' => '30 000 м²',
                'status' => 'В производстве работ',
                'tag' => 'Подземный паркинг',
                'description' => 'Гидроизоляция подземной парковки А29 в составе жилого комплекса СберСити на площади 30 000 м².',
                'works' => [
                    'Гидроизоляция фундамента — ПВХ мембрана LogicBase V-SL 2,0 мм',
                    'Устройство защитной цементно-песчаной стяжки',
                ],
                'images' => [
                    '/fixed/works/7.1.jpg',
                    '/fixed/works/7.2.jpg',
                    '/fixed/works/7.3.jpg',
                    '/fixed/works/7.4.jpg',
                ],
            ],
        ];
    @endphp

    {{-- Hero --}}
    <section
        class="relative overflow-hidden bg-gradient-to-br from-[#1A2B5E] via-[#2E4A92] to-[#3956BC] py-24 text-white lg:py-20 md:py-16 sm:py-12">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute right-0 top-0 h-96 w-96 -translate-y-1/2 translate-x-1/2 rounded-full bg-white"></div>
            <div
                class="absolute bottom-0 left-0 h-64 w-64 -translate-x-1/2 translate-y-1/2 rounded-full bg-white"></div>
        </div>

        <div class="container relative mx-auto px-4 lg:px-8 md:px-4 container-page">
            <div class="max-w-3xl">
                <div class="mb-6 inline-flex items-center rounded-full bg-white/10 px-4 py-1.5">
                    <span class="text-sm font-medium text-white/90">Портфолио</span>
                </div>

                <h1 class="mb-6 text-5xl font-bold leading-tight lg:text-4xl md:text-3xl">
                    Наши работы
                </h1>

                <p class="max-w-2xl text-xl leading-relaxed text-white/85 lg:text-lg md:text-base">
                    Реализованные объекты по гидроизоляции фундаментов, подземных паркингов
                    и исторических зданий в Москве и Санкт-Петербурге
                </p>
            </div>

            <div
                class="mt-14 grid grid-cols-4 gap-6 border-t border-white/20 pt-14 lg:grid-cols-2 md:mt-10 md:pt-10 sm:grid-cols-1">
                <template x-for="stat in stats" :key="stat.label">
                    <div>
                        <div class="mb-1 text-3xl font-black md:text-2xl" x-text="stat.value"></div>
                        <div class="text-sm text-white/65" x-text="stat.label"></div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    {{-- Works --}}
    <section class="bg-[#F5F8FE] py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 lg:px-8 md:px-4 container-page">
            <div class="mb-12 text-center md:mb-8">
                <h2 class="mb-3 text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                    Выполненные объекты
                </h2>

                <p class="mx-auto max-w-xl text-lg text-[#68737D] md:text-base">
                    Нажмите на карточку, чтобы узнать подробности о проекте и увидеть все фотографии
                </p>
            </div>

            <div class="grid grid-cols-3 gap-6 lg:grid-cols-2 md:!grid-cols-1">
                <template x-for="work in works" :key="work.id">
                    <article
                        @click="openWork(work)"
                        class="group cursor-pointer overflow-hidden rounded-2xl border border-[#E8EFFD] bg-white shadow-sm transition-all duration-300 hover:shadow-lg"
                    >
                        <div x-data="{ current: 0 }"
                             class="group/gallery relative h-64 overflow-hidden rounded-xl bg-[#1A2B5E] md:h-56">
                            <img
                                :src="work.images[current]"
                                :alt="work.title"
                                class="h-full w-full object-cover transition-opacity duration-300"
                            >

                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>

                            <template x-if="work.images.length > 1">
                                <div>
                                    <button
                                        type="button"
                                        @click.stop="current = (current - 1 + work.images.length) % work.images.length"
                                        class="absolute left-3 top-1/2 flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-full bg-black/40 text-white opacity-0 transition-opacity hover:bg-black/60 group-hover/gallery:opacity-100"
                                    >
                                        ‹
                                    </button>

                                    <button
                                        type="button"
                                        @click.stop="current = (current + 1) % work.images.length"
                                        class="absolute right-3 top-1/2 flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-full bg-black/40 text-white opacity-0 transition-opacity hover:bg-black/60 group-hover/gallery:opacity-100"
                                    >
                                        ›
                                    </button>

                                    <div class="absolute bottom-3 left-1/2 flex -translate-x-1/2 gap-1.5">
                                        <template x-for="(image, index) in work.images" :key="index">
                                            <button
                                                type="button"
                                                @click.stop="current = index"
                                                class="h-1.5 rounded-full transition-all"
                                                :class="index === current ? 'w-4 bg-white' : 'w-1.5 bg-white/50'"
                                            ></button>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div class="p-6 md:p-5">
                            <div class="mb-3 flex flex-wrap items-center gap-2">
                                <span class="rounded-full bg-[#E8EFFD] px-2.5 py-1 text-xs font-semibold text-[#3956BC]"
                                      x-text="work.tag"></span>

                                <template x-if="work.status">
                                    <span
                                        class="rounded-full border border-amber-200 bg-amber-50 px-2.5 py-1 text-xs font-semibold text-amber-600"
                                        x-text="work.status"></span>
                                </template>
                            </div>

                            <h3 class="mb-3 text-lg font-bold leading-snug text-[#1A2B5E] transition-colors group-hover:text-[#3956BC]"
                                x-text="work.title"></h3>

                            <div class="mb-4 flex flex-wrap gap-x-4 gap-y-1.5 text-xs text-[#68737D]">
                                <span x-text="work.city + ', ' + work.address"></span>
                                <span x-text="work.area"></span>
                                <span x-text="work.duration"></span>
                            </div>

                            <p class="mb-4 line-clamp-2 text-sm leading-relaxed text-[#68737D]"
                               x-text="work.description"></p>

                            <div
                                class="flex items-center text-sm font-semibold text-[#3956BC] transition-colors group-hover:text-[#2E4A92]">
                                <span>Подробнее</span>
                                <span class="ml-1 transition-transform group-hover:translate-x-1">→</span>
                            </div>
                        </div>
                    </article>
                </template>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-white py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 text-center lg:px-8 md:px-4">
            <h2 class="mb-4 text-4xl font-bold text-[#1A2B5E] lg:text-3xl md:text-2xl">
                Готовы обсудить ваш объект?
            </h2>

            <p class="mx-auto mb-8 max-w-xl text-lg text-[#68737D] md:text-base">
                Расскажите о задаче — подберём решение и рассчитаем стоимость в течение 24 часов
            </p>

            <div class="flex justify-center gap-4 sm:flex-col">
                <button
                    type="button"
                    @click="contactOpen = true"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-[#3956BC] px-8 py-4 font-semibold text-white shadow-lg shadow-[#3956BC]/25 transition-colors hover:bg-[#2E4A92]"
                >
                    Оставить заявку
                </button>

                <a
                    href="tel:+74951234567"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border-2 border-[#3956BC] px-8 py-4 font-semibold text-[#3956BC] transition-colors hover:bg-[#3956BC] hover:text-white"
                >
                    +7 (495) 198-89-86
                </a>
            </div>
        </div>
    </section>

    {{-- Work modal --}}
    <div
        x-show="selectedWork"
        x-cloak
        x-transition.opacity
        @keydown.escape.window="selectedWork = null"
        @click.self="selectedWork = null"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 p-4 backdrop-blur-sm"
    >
        <template x-if="selectedWork">
            <div class="max-h-[92vh] w-full max-w-2xl overflow-y-auto rounded-2xl bg-white shadow-2xl">
                <div class="group relative h-72 bg-[#1A2B5E] md:h-60">
                    <img :src="selectedWork.images[modalImageIndex]" :alt="selectedWork.title"
                         class="h-full w-full object-cover">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>

                    <button
                        type="button"
                        @click="selectedWork = null"
                        class="absolute right-4 top-4 flex h-9 w-9 items-center justify-center rounded-full bg-black/40 text-white transition-colors hover:bg-black/60"
                    >
                        ✕
                    </button>

                    <template x-if="selectedWork.images.length > 1">
                        <div>
                            <button
                                type="button"
                                @click="modalImageIndex = (modalImageIndex - 1 + selectedWork.images.length) % selectedWork.images.length"
                                class="absolute left-4 top-1/2 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-full bg-black/40 text-white opacity-0 transition-opacity hover:bg-black/60 group-hover:opacity-100"
                            >
                                ‹
                            </button>

                            <button
                                type="button"
                                @click="modalImageIndex = (modalImageIndex + 1) % selectedWork.images.length"
                                class="absolute right-4 top-1/2 flex h-9 w-9 -translate-y-1/2 items-center justify-center rounded-full bg-black/40 text-white opacity-0 transition-opacity hover:bg-black/60 group-hover:opacity-100"
                            >
                                ›
                            </button>
                        </div>
                    </template>

                    <div class="absolute inset-x-0 bottom-0 p-6">
                        <div class="mb-2 flex flex-wrap gap-2">
                            <span
                                class="rounded-full border border-white/30 bg-white/20 px-2.5 py-1 text-xs font-semibold text-white backdrop-blur-sm"
                                x-text="selectedWork.tag"></span>

                            <template x-if="selectedWork.status">
                                <span class="rounded-full bg-amber-500/80 px-2.5 py-1 text-xs font-semibold text-white"
                                      x-text="selectedWork.status"></span>
                            </template>
                        </div>

                        <h2 class="text-xl font-bold leading-snug text-white drop-shadow"
                            x-text="selectedWork.title"></h2>
                    </div>
                </div>

                <div class="space-y-6 p-7 md:p-5">
                    <div class="grid grid-cols-3 gap-3 sm:grid-cols-1">
                        <div class="rounded-xl bg-[#F5F8FE] p-3 text-center">
                            <div class="mb-0.5 text-[10px] text-[#68737D]">Город</div>
                            <div class="text-sm font-bold text-[#1A2B5E]" x-text="selectedWork.city"></div>
                        </div>

                        <div class="rounded-xl bg-[#F5F8FE] p-3 text-center">
                            <div class="mb-0.5 text-[10px] text-[#68737D]">Площадь</div>
                            <div class="text-sm font-bold text-[#1A2B5E]" x-text="selectedWork.area"></div>
                        </div>

                        <div class="rounded-xl bg-[#F5F8FE] p-3 text-center">
                            <div class="mb-0.5 text-[10px] text-[#68737D]">Срок</div>
                            <div class="text-sm font-bold text-[#1A2B5E]" x-text="selectedWork.duration"></div>
                        </div>
                    </div>

                    <div>
                        <p class="mb-1 text-xs font-semibold uppercase tracking-wide text-[#3956BC]">Адрес объекта</p>
                        <p class="text-sm text-[#374151]" x-text="selectedWork.city + ', ' + selectedWork.address"></p>
                    </div>

                    <div>
                        <p class="mb-2 text-xs font-semibold uppercase tracking-wide text-[#3956BC]">О проекте</p>
                        <p class="text-sm leading-relaxed text-[#374151]" x-text="selectedWork.description"></p>
                    </div>

                    <div>
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wide text-[#3956BC]">Выполненные
                            работы</p>

                        <ul class="space-y-2">
                            <template x-for="item in selectedWork.works" :key="item">
                                <li class="flex items-start gap-2.5">
                                    <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#3956BC]"></span>
                                    <span class="text-sm leading-relaxed text-[#374151]" x-text="item"></span>
                                </li>
                            </template>
                        </ul>
                    </div>

                    <template x-if="selectedWork.images.length > 1">
                        <div>
                            <p class="mb-3 text-xs font-semibold uppercase tracking-wide text-[#3956BC]">Фотографии</p>

                            <div class="flex gap-2 overflow-x-auto pb-1">
                                <template x-for="(image, index) in selectedWork.images" :key="index">
                                    <button
                                        type="button"
                                        @click="modalImageIndex = index"
                                        class="h-14 w-20 shrink-0 overflow-hidden rounded-lg border-2 transition-all"
                                        :class="index === modalImageIndex ? 'border-[#3956BC]' : 'border-transparent opacity-70 hover:opacity-100'"
                                    >
                                        <img :src="image" alt="" class="h-full w-full object-cover">
                                    </button>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </template>
    </div>

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
                <livewire:components.contact-form/>
            </div>
        </div>
    </div>
</div>

<script>
    function worksPage() {
        return {
            works: @js($works),

            selectedWork: null,
            modalImageIndex: 0,
            contactOpen: false,

            stats: [
                { value: '7', label: 'Объектов в портфолио' },
                { value: '54 000 м²', label: 'Изолированных поверхностей' },
                { value: '2', label: 'Города' },
                { value: '2', label: 'В производстве' },
            ],

            openWork(work) {
                this.selectedWork = work;
                this.modalImageIndex = 0;
            },
        };
    }
</script>
