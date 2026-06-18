<div
    x-data="productsPage()"
    class="min-h-screen"
>
    @php
        $categories = [
            ['id' => 'all', 'label' => 'Все материалы'],
            ['id' => 'pvc', 'label' => 'ПВХ мембраны'],
            ['id' => 'profile', 'label' => 'Профилированные мембраны'],
            ['id' => 'thermo', 'label' => 'Теплоизоляция'],
            ['id' => 'mastic', 'label' => 'Полиуретановая мастика'],
            ['id' => 'accessories', 'label' => 'Сопутствующие материалы'],
        ];

$products = [
    [
        'id' => 1,
        'category' => 'pvc',
        'name' => 'LOGICBASE V-SL',
        'subtitle' => 'ПВХ мембрана',
        'description' => 'Двухслойная неармированная мембрана для гидроизоляции строительных конструкций и подземных сооружений, включая транспортные и гидротехнические тоннели. Производится методом коэкструзии. Жёлтый сигнальный слой позволяет оперативно выявить повреждения при монтаже.',
        'color' => 'Жёлтый / Чёрный',
        'specs' => [
            ['param' => 'Цвет', 'value' => 'Жёлтый (лицевая) / Чёрный (тыльная)'],
            ['param' => 'Армирование', 'value' => 'Отсутствует'],
            ['param' => 'Толщина', 'value' => '1,5 / 2,0 мм'],
        ],
        'advantages' => [
            'Долговечность',
            'Устойчивость к микроорганизмам',
            'Устойчивость к механическим воздействиям',
            'Высокая химическая стойкость',
            'Устойчивость к прорастанию корней',
            'Высокая прочность и эластичность',
        ],
        'application' => [
            [
                'type' => 'Гражданское',
                'object' => 'Офисные, жилые, торговые, гостиничные комплексы',
                'purpose' => 'Гидроизоляция фундаментов и подземных частей',
            ],
            [
                'type' => 'Транспортное',
                'object' => 'Железнодорожные, автодорожные тоннели, метрополитен, вокзалы, депо',
                'purpose' => 'Гидроизоляция строительных конструкций',
            ],
            [
                'type' => 'Промышленное',
                'object' => 'Здания атомных электростанций',
                'purpose' => 'Гидроизоляция строительных конструкций',
            ],
            [
                'type' => 'Гидротехническое',
                'object' => 'Тоннели, каналы, водоёмы, резервуары',
                'purpose' => 'Гидроизоляция строительных конструкций',
            ],
            [
                'type' => 'Гидротехническое',
                'object' => 'Дамбы, плотины',
                'purpose' => 'Устройство противофильтрационных экранов',
            ],
        ],
        'gradient' => 'from-[#1A2B5E] to-[#3956BC]',
        'badge' => 'Сигнальный слой',
    ],

    [
        'id' => 2,
        'category' => 'pvc',
        'name' => 'LOGICBASE V-ST',
        'subtitle' => 'ПВХ мембрана',
        'description' => 'Неармированная гидроизоляционная мембрана на основе ПВХ с наполнителями и технологическими добавками, сформированная в единое полотно.',
        'color' => 'Зелёный',
        'specs' => [
            ['param' => 'Цвет', 'value' => 'Зелёный'],
            ['param' => 'Армирование', 'value' => 'Отсутствует'],
            ['param' => 'Толщина', 'value' => '1,5 / 2 мм (стандартная — 1,6 мм)'],
        ],
        'advantages' => [
            'Устойчивость к микроорганизмам и прорастанию корней',
            'Долговечность',
            'Высокая химическая стойкость',
            'Устойчивость к механическим воздействиям',
            'Высокая прочность и эластичность',
        ],
        'application' => [
            [
                'type' => 'Гражданское',
                'object' => 'Офисы, жильё, торговые / гостиничные комплексы',
                'purpose' => 'Гидроизоляция фундаментов и подземных покрытий',
            ],
            [
                'type' => 'Транспортное',
                'object' => 'Тоннели (ж/д, авто, метро), вокзалы, депо, гаражи',
                'purpose' => 'Гидроизоляция конструкций',
            ],
            [
                'type' => 'Промышленное',
                'object' => 'Здания АЭС',
                'purpose' => 'Гидроизоляция конструкций',
            ],
            [
                'type' => 'Гидротехническое',
                'object' => 'Тоннели, резервуары, каналы, водоёмы',
                'purpose' => 'Гидроизоляция конструкций',
            ],
            [
                'type' => 'Гидротехническое',
                'object' => 'Дамбы, плотины',
                'purpose' => 'Противофильтрационные экраны',
            ],
        ],
        'gradient' => 'from-[#2E4A92] to-[#5A7DD8]',
    ],

    [
        'id' => 3,
        'category' => 'pvc',
        'name' => 'LOGICBASE V-RP',
        'subtitle' => 'ПВХ мембрана кровельная',
        'description' => 'Кровельная полимерная мембрана на основе пластифицированного ПВХ. Стабилизирована против УФ-излучения системой TRI-P®, содержит антипирены и специальные стабилизаторы. Обладает повышенной эластичностью для монтажа при низких температурах.',
        'color' => 'Серый (также: белый, красный, зелёный, синий)',
        'specs' => [
            ['param' => 'Цвет', 'value' => 'Серый (также: белый, красный, зелёный, синий)'],
            ['param' => 'Армирование', 'value' => 'Армированная'],
            ['param' => 'Толщина', 'value' => '1,5 / 2 мм'],
            ['param' => 'Размер рулона', 'value' => '2,10 × 25–15 м'],
        ],
        'advantages' => [
            'Высокая прочность и гибкость',
            'Технологичный монтаж',
            'Высокие гидроизоляционные свойства',
            'Долговечность',
            'УФ-стабилизация TRI-P®',
        ],
        'application' => [
            [
                'type' => 'Гражданское',
                'object' => 'Офисы, жильё, торговые комплексы',
                'purpose' => 'Гидроизоляция кровель',
            ],
            [
                'type' => 'Транспортное',
                'object' => 'Тоннели, вокзалы, депо',
                'purpose' => 'Гидроизоляция конструкций',
            ],
            [
                'type' => 'Промышленное',
                'object' => 'АЭС',
                'purpose' => 'Гидроизоляция конструкций',
            ],
            [
                'type' => 'Гидротехническое',
                'object' => 'Каналы, резервуары',
                'purpose' => 'Гидроизоляция',
            ],
        ],
        'gradient' => 'from-[#3956BC] to-[#6B8FE8]',
        'badge' => 'Армированная',
    ],

    [
        'id' => 4,
        'category' => 'pvc',
        'name' => 'ECOBASE V-SL',
        'subtitle' => 'ПВХ мембрана',
        'description' => 'Полимерная гидроизоляционная неармированная мембрана с сигнальным слоем. Производится экструзией ПВХ с наполнителями и технологическими добавками.',
        'color' => 'Жёлтый / Чёрный',
        'specs' => [
            ['param' => 'Цвет', 'value' => 'Жёлтый / Чёрный'],
            ['param' => 'Армирование', 'value' => 'Нет'],
            ['param' => 'Толщина', 'value' => '1,5 / 2,0 мм'],
        ],
        'advantages' => [
            'Высокая прочность',
            'Химическая стойкость',
            'Биостойкость',
            'Надёжные сварные швы',
            'Быстрый монтаж',
        ],
        'application' => [
            [
                'type' => 'Гражданское',
                'object' => 'Фундаменты и подземные части',
                'purpose' => 'Гидроизоляция',
            ],
        ],
        'gradient' => 'from-[#4B6CD6] to-[#2E4A92]',
        'badge' => 'Эконом-класс',
    ],

    [
        'id' => 5,
        'category' => 'pvc',
        'name' => 'ECOBASE V-ST',
        'subtitle' => 'ПВХ мембрана',
        'description' => 'Полимерная гидроизоляционная мембрана с фактурной поверхностью для улучшенной адгезии к бетонным основаниям.',
        'color' => 'Серый / Чёрный',
        'specs' => [
            ['param' => 'Цвет', 'value' => 'Серый / Чёрный'],
            ['param' => 'Армирование', 'value' => 'Нет'],
            ['param' => 'Толщина', 'value' => '1,2 / 1,5 / 2,0 мм'],
        ],
        'advantages' => [
            'Высокая прочность',
            'Фактурная поверхность',
            'Ремонтопригодность',
            'Крупноформатные рулоны',
        ],
        'application' => [
            [
                'type' => 'Гражданское',
                'object' => 'Фундаменты',
                'purpose' => 'Гидроизоляция',
            ],
        ],
        'gradient' => 'from-[#2E4A92] to-[#4B6CD6]',
    ],

    [
        'id' => 6,
        'category' => 'profile',
        'name' => 'Planter Standart',
        'subtitle' => 'Профилированная мембрана',
        'description' => 'Полотно из HDPE с округлыми выступами высотой 8,5 мм для защиты гидроизоляции и распределения нагрузки.',
        'color' => 'Чёрный',
        'specs' => [
            ['param' => 'Материал', 'value' => 'HDPE'],
            ['param' => 'Цвет', 'value' => 'Чёрный'],
            ['param' => 'Геотекстиль', 'value' => 'Нет'],
            ['param' => 'Высота шипа', 'value' => '8,5 мм'],
        ],
        'advantages' => [
            'Высокая прочность',
            'Гибкость',
            'Химическая стойкость',
            'Простой монтаж',
            'Долговечность',
        ],
        'application' => [
            [
                'type' => 'Гражданское',
                'object' => 'Фундаменты',
                'purpose' => 'Защита гидроизоляции',
            ],
        ],
        'gradient' => 'from-[#1A2B5E] to-[#3956BC]',
    ],

    [
        'id' => 7,
        'category' => 'profile',
        'name' => 'Planter Geo',
        'subtitle' => 'Профилированная дренажная мембрана',
        'description' => 'Двухслойное полотно из HDPE с термоскреплённым геотекстилем для устройства вертикального и горизонтального дренажа.',
        'color' => 'Чёрный',
        'specs' => [
            ['param' => 'Материал', 'value' => 'HDPE + геотекстиль'],
            ['param' => 'Цвет', 'value' => 'Чёрный'],
            ['param' => 'Высота шипа', 'value' => '8,5 мм'],
        ],
        'advantages' => [
            'Эффективный дренаж',
            'Высокая прочность',
            'Стойкость к химии',
            'Устойчивость к корням',
            'Долговечность',
        ],
        'application' => [
            [
                'type' => 'Гражданское',
                'object' => 'Фундаменты, зелёные кровли',
                'purpose' => 'Дренаж и защита гидроизоляции',
            ],
        ],
        'gradient' => 'from-[#3956BC] to-[#5A7DD8]',
        'badge' => 'С геотекстилем',
    ],
    [
    'id' => 8,
    'category' => 'profile',
    'name' => 'Planter Extra Geo',
    'subtitle' => 'Профилированная дренажная мембрана',
    'description' => 'Усиленная версия Planter Geo. Двухслойное полотно HDPE + термоскреплённый геотекстиль с повышенной прочностью. Используется для горизонтального и вертикального дренажа, зелёных и эксплуатируемых кровель.',
    'color' => 'Чёрный',
    'specs' => [
        ['param' => 'Материал', 'value' => 'HDPE + геотекстиль'],
        ['param' => 'Цвет', 'value' => 'Чёрный'],
        ['param' => 'Геотекстиль', 'value' => 'Есть'],
        ['param' => 'Высота шипа', 'value' => '8,5 мм'],
        ['param' => 'Прочность', 'value' => 'Повышенная'],
    ],
    'advantages' => [
        'Повышенная прочность',
        'Эффективный дренаж',
        'Сокращение времени монтажа',
        'Устойчивость к прорастанию корней',
        'Долговечность',
    ],
    'application' => [
        [
            'type' => 'Гражданское',
            'object' => 'Фундаменты, стилобаты, эксплуатируемые кровли',
            'purpose' => 'Дренаж и защита гидроизоляции',
        ],
    ],
    'gradient' => 'from-[#2E4A92] to-[#6B8FE8]',
    'badge' => 'Усиленная',
],

[
    'id' => 9,
    'category' => 'thermo',
    'name' => 'ТермоВайт',
    'subtitle' => 'Гранулированная теплоизоляция',
    'description' => 'Тепло- и звукоизоляционная система на минеральной основе с гранулами переработанного полистирола. Обеспечивает бесшовный монтаж без мостиков холода и звука.',
    'color' => 'Белый',
    'specs' => [
        ['param' => 'Основа', 'value' => 'Минеральные наполнители + гранулы полистирола'],
        ['param' => 'Технология', 'value' => 'Австрийская запатентованная'],
        ['param' => 'Производство', 'value' => 'Подмосковье'],
        ['param' => 'Готовность к стяжке', 'value' => '12–36 часов'],
        ['param' => 'Производительность', 'value' => 'До 1000 м² / смена'],
    ],
    'advantages' => [
        'Теплоизоляция',
        'Защита от ударного шума',
        'Бесшовный монтаж',
        'Нет мостиков холода',
        'Малый вес',
        'Быстрое высыхание',
    ],
    'application' => [
        [
            'type' => 'Жилое',
            'object' => 'Частные и многоквартирные дома',
            'purpose' => 'Тепло- и звукоизоляция перекрытий',
        ],
        [
            'type' => 'Общественное',
            'object' => 'Общественные здания',
            'purpose' => 'Тепло- и звукоизоляция перекрытий',
        ],
    ],
    'gradient' => 'from-[#4B6CD6] to-[#3956BC]',
],

[
    'id' => 10,
    'category' => 'mastic',
    'name' => 'HYDROLASTA',
    'subtitle' => 'Полиуретановая мастика',
    'description' => 'Однокомпонентная гидроизоляционная полиуретановая мастика для долгосрочной защиты различных поверхностей от влаги. Подходит для новых оснований и нанесения поверх старых битумных покрытий.',
    'color' => 'Серый / Чёрный',
    'specs' => [
        ['param' => 'Тип', 'value' => 'Однокомпонентная'],
        ['param' => 'Основа', 'value' => 'Полиуретан'],
        ['param' => 'Совместимость', 'value' => 'Бетон, металл, дерево, битумные покрытия'],
    ],
    'advantages' => [
        'Удобство нанесения',
        'Высокая УФ-стойкость',
        'Универсальность применения',
        'Экологичность',
        'Высокая эластичность',
        'Ремонтопригодность',
    ],
    'application' => [
        [
            'type' => 'Кровля',
            'object' => 'Кровли, козырьки, балконы, террасы',
            'purpose' => 'Гидроизоляция',
        ],
        [
            'type' => 'Подземное',
            'object' => 'Тоннели, фундаменты, автостоянки',
            'purpose' => 'Гидроизоляция конструкций',
        ],
        [
            'type' => 'Интерьер',
            'object' => 'Ванные комнаты',
            'purpose' => 'Гидроизоляция под стяжку или плитку',
        ],
        [
            'type' => 'Металл',
            'object' => 'Металлоконструкции',
            'purpose' => 'Защита от коррозии и агрессивных сред',
        ],
    ],
    'gradient' => 'from-[#5A7DD8] to-[#2E4A92]',
],

[
    'id' => 11,
    'category' => 'accessories',
    'name' => 'Геотекстиль',
    'subtitle' => 'Сопутствующий материал',
    'description' => 'Нетканый геотекстиль для разделения, фильтрации, дренажа и защиты гидроизоляционных систем. Применяется вместе с профилированными мембранами и другими материалами.',
    'color' => 'Белый / Серый',
    'specs' => [
        ['param' => 'Тип', 'value' => 'Нетканый'],
        ['param' => 'Назначение', 'value' => 'Разделение, фильтрация, дренаж, защита'],
    ],
    'advantages' => [
        'Высокая прочность на разрыв',
        'Фильтрующие свойства',
        'Совместимость с ПВХ и HDPE мембранами',
        'Долговечность',
    ],
    'application' => [
        [
            'type' => 'Гражданское',
            'object' => 'Фундаменты, подземные части зданий',
            'purpose' => 'Разделение слоёв и дренаж',
        ],
        [
            'type' => 'Транспортное',
            'object' => 'Тоннели, дороги',
            'purpose' => 'Армирование и разделение',
        ],
    ],
    'gradient' => 'from-[#3956BC] to-[#4B6CD6]',
],

[
    'id' => 12,
    'category' => 'accessories',
    'name' => 'Герметики',
    'subtitle' => 'Сопутствующий материал',
    'description' => 'Герметизирующие составы для уплотнения примыканий, швов и сопряжений в гидроизоляционных системах на основе ПВХ-мембран.',
    'color' => 'Различные',
    'specs' => [
        ['param' => 'Тип', 'value' => 'Полиуретановые, силиконовые'],
        ['param' => 'Применение', 'value' => 'Швы, примыкания, сопряжения'],
    ],
    'advantages' => [
        'Высокая адгезия к ПВХ и бетону',
        'Эластичность при эксплуатации',
        'Морозостойкость',
        'Химическая стойкость',
    ],
    'application' => [
        [
            'type' => 'Гражданское',
            'object' => 'Объекты с ПВХ-гидроизоляцией',
            'purpose' => 'Герметизация швов и примыканий',
        ],
    ],
    'gradient' => 'from-[#2E4A92] to-[#3956BC]',
],

[
    'id' => 13,
    'category' => 'accessories',
    'name' => 'Гидрошпонки',
    'subtitle' => 'Сопутствующий материал',
    'description' => 'Профильные ленты из ПВХ для герметизации деформационных и рабочих швов в бетонных конструкциях. Устанавливаются в тело бетона при заливке.',
    'color' => 'Серый',
    'specs' => [
        ['param' => 'Материал', 'value' => 'ПВХ'],
        ['param' => 'Тип установки', 'value' => 'Встраиваемые в бетон'],
        ['param' => 'Типы швов', 'value' => 'Деформационные и рабочие'],
    ],
    'advantages' => [
        'Надёжная герметизация швов',
        'Совместимость с ПВХ-гидроизоляцией',
        'Высокое давление водоупора',
        'Долговечность',
    ],
    'application' => [
        [
            'type' => 'Подземное',
            'object' => 'Тоннели, паркинги, подвалы',
            'purpose' => 'Герметизация деформационных швов',
        ],
        [
            'type' => 'Гидротехническое',
            'object' => 'Резервуары, плотины',
            'purpose' => 'Герметизация рабочих швов',
        ],
    ],
    'gradient' => 'from-[#4B6CD6] to-[#2E4A92]',
],
];
    @endphp

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-[#1A2B5E] via-[#2E4A92] to-[#4B6CD6] py-24 text-white lg:py-20 md:py-16 sm:py-12">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute right-0 top-0 h-96 w-96 -translate-y-1/2 translate-x-1/2 rounded-full bg-white"></div>
            <div class="absolute bottom-0 left-0 h-64 w-64 -translate-x-1/2 translate-y-1/2 rounded-full bg-white"></div>
        </div>

        <div class="container relative mx-auto px-4 lg:px-8 md:px-4 container-page">
            <div class="max-w-3xl">
                <div class="mb-6 inline-flex items-center rounded-full bg-white/10 px-4 py-1.5">
                    <span class="text-sm font-medium text-white/90">Каталог материалов</span>
                </div>

                <h1 class="mb-6 text-5xl font-bold leading-tight lg:text-4xl md:text-3xl">
                    Каталог и цены
                </h1>

                <p class="max-w-2xl text-xl leading-relaxed text-white/85 lg:text-lg md:text-base">
                    Полный ассортимент гидроизоляционных материалов: ПВХ мембраны,
                    профилированные мембраны, теплоизоляция, полиуретановые мастики
                    и сопутствующие материалы
                </p>
            </div>

            <div class="mt-14 grid grid-cols-4 gap-6 border-t border-white/20 pt-14 lg:grid-cols-2 md:mt-10 md:pt-10 sm:grid-cols-1">
                <template x-for="item in stats" :key="item.label">
                    <div>
                        <div class="mb-1 text-3xl font-black md:text-2xl" x-text="item.value"></div>
                        <div class="text-sm text-white/65" x-text="item.label"></div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    {{-- Catalog --}}
    <section class="bg-[#F5F8FE] py-20 lg:py-16 md:py-12">
        <div class="container mx-auto px-4 lg:px-8 md:px-4 container-page">

            {{-- Category tabs --}}
            <div class="mb-10 flex flex-wrap justify-center gap-2 md:justify-start">
                @foreach($categories as $category)
                    <button
                        type="button"
                        @click="activeCategory = '{{ $category['id'] }}'"
                        class="rounded-full border px-5 py-2.5 text-sm font-semibold transition-all duration-200"
                        :class="activeCategory === '{{ $category['id'] }}'
                            ? 'border-[#3956BC] bg-[#3956BC] text-white shadow-md shadow-[#3956BC]/25'
                            : 'border-[#E8EFFD] bg-white text-[#68737D] hover:border-[#3956BC] hover:text-[#3956BC]'"
                    >
                        {{ $category['label'] }}
                    </button>
                @endforeach
            </div>

            <p class="mb-8 text-center text-sm text-[#68737D] md:text-left">
                Показано:
                <span class="font-semibold text-[#3956BC]" x-text="filteredProducts().length"></span>
                из
                <span x-text="products.length"></span>
            </p>

            <div class="grid grid-cols-3 gap-6 lg:grid-cols-2 md:!grid-cols-1">
                <template x-for="product in filteredProducts()" :key="product.id">
                    <article class="flex flex-col overflow-hidden rounded-2xl border border-[#E8EFFD] bg-white shadow-sm transition-shadow duration-300 hover:shadow-md">
                        <div class="h-2 bg-gradient-to-r" :class="product.gradient"></div>

                        <div class="bg-gradient-to-br px-6 pb-4 pt-6" :class="product.gradient">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="mb-1 text-xs font-semibold uppercase tracking-wide text-white/75" x-text="product.subtitle"></p>
                                    <h3 class="text-xl font-black text-white md:text-lg" x-text="product.name"></h3>
                                </div>

                                <template x-if="product.badge">
                                    <span class="shrink-0 rounded-full border border-white/30 bg-white/20 px-2.5 py-1 text-xs font-semibold text-white" x-text="product.badge"></span>
                                </template>
                            </div>
                        </div>

                        <div x-data="{ specsOpen: false }" class="flex flex-1 flex-col px-6 py-4 md:px-5">
                            <p
                                class="mb-4 flex-1 text-sm leading-relaxed text-[#68737D]"
                                x-text="product.description.length > 160 ? product.description.slice(0, 160) + '...' : product.description"
                            ></p>

                            <button
                                type="button"
                                @click="specsOpen = !specsOpen"
                                class="mb-2 flex w-full items-center justify-between text-sm font-semibold text-[#3956BC] transition-colors hover:text-[#2E4A92]"
                            >
                                <span>Характеристики</span>

                                <svg x-show="!specsOpen" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                </svg>

                                <svg x-show="specsOpen" x-cloak class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7"/>
                                </svg>
                            </button>

                            <div
                                x-show="specsOpen"
                                x-collapse
                                x-cloak
                                class="mb-4 overflow-hidden rounded-xl border border-[#E8EFFD]"
                            >
                                <table class="w-full text-xs">
                                    <tbody>
                                    <template x-for="(spec, index) in product.specs" :key="spec.param">
                                        <tr :class="index % 2 === 0 ? 'bg-[#F5F8FE]' : 'bg-white'">
                                            <td class="w-2/5 px-3 py-2 font-semibold text-[#3956BC]" x-text="spec.param"></td>
                                            <td class="px-3 py-2 text-[#374151]" x-text="spec.value"></td>
                                        </tr>
                                    </template>
                                    </tbody>
                                </table>
                            </div>

                            <button
                                type="button"
                                @click="selectedProduct = product"
                                class="mt-auto flex w-full items-center justify-center gap-2 rounded-xl bg-[#3956BC] px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-[#2E4A92]"
                            >
                                <span>Подробнее</span>

                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                                </svg>
                            </button>
                        </div>
                    </article>
                </template>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-gradient-to-br from-[#2E4A92] to-[#3956BC] py-20 text-white lg:py-16 md:py-12">
        <div class="container mx-auto px-4 text-center lg:px-8 md:px-4">
            <h2 class="mb-4 text-4xl font-bold lg:text-3xl md:text-2xl">
                Нужна консультация по выбору материала?
            </h2>

            <p class="mx-auto mb-8 max-w-xl text-lg text-white/85 md:text-base">
                Наши технические специалисты подберут оптимальное решение под ваш объект и бюджет
            </p>

            <div class="flex justify-center gap-4 sm:flex-col">
                <button
                    type="button"
                    @click="contactOpen = true"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-8 py-4 font-semibold text-[#3956BC] transition-colors hover:bg-[#F5F8FE]"
                >
                    <span>Оставить заявку</span>
                </button>

                <a
                    href="tel:+74951988986"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border-2 border-white/40 px-8 py-4 font-semibold text-white transition-colors hover:border-white hover:bg-white/10"
                >
                    <span>+7 (495) 198-89-86</span>
                </a>
            </div>
        </div>
    </section>

    {{-- Product modal --}}
    <div
        x-show="selectedProduct"
        x-cloak
        x-transition.opacity
        @keydown.escape.window="selectedProduct = null"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 p-4 backdrop-blur-sm"
        @click.self="selectedProduct = null"
    >
        <div class="max-h-[90vh] w-full max-w-3xl overflow-y-auto rounded-2xl bg-white shadow-2xl">
            <template x-if="selectedProduct">
                <div>
                    <div class="relative overflow-hidden bg-gradient-to-br p-8 md:p-6" :class="selectedProduct.gradient">
                        <div class="absolute inset-0 opacity-10">
                            <div class="absolute right-0 top-0 h-48 w-48 -translate-y-1/2 translate-x-1/2 rounded-full bg-white"></div>
                        </div>

                        <button
                            type="button"
                            @click="selectedProduct = null"
                            class="absolute right-4 top-4 flex h-9 w-9 items-center justify-center rounded-full bg-white/20 transition-colors hover:bg-white/30"
                        >
                            <span class="text-xl leading-none text-white">×</span>
                        </button>

                        <div class="relative">
                            <p class="mb-1 text-sm font-medium text-white/70" x-text="selectedProduct.subtitle"></p>
                            <h2 class="mb-3 text-3xl font-black text-white md:text-2xl" x-text="selectedProduct.name"></h2>

                            <template x-if="selectedProduct.badge">
                                <span class="inline-block rounded-full border border-white/30 bg-white/20 px-3 py-1 text-xs font-semibold text-white" x-text="selectedProduct.badge"></span>
                            </template>
                        </div>
                    </div>

                    <div class="space-y-8 p-8 md:p-6">
                        <p class="leading-relaxed text-[#374151]" x-text="selectedProduct.description"></p>

                        <div>
                            <h3 class="mb-4 text-lg font-bold text-[#1A2B5E]">
                                Технические характеристики
                            </h3>

                            <div class="overflow-hidden rounded-xl border border-[#E8EFFD]">
                                <table class="w-full text-sm md:text-xs">
                                    <tbody>
                                    <template x-for="(spec, index) in selectedProduct.specs" :key="spec.param">
                                        <tr :class="index % 2 === 0 ? 'bg-[#F5F8FE]' : 'bg-white'">
                                            <td class="w-2/5 px-4 py-3 font-semibold text-[#3956BC] md:px-3" x-text="spec.param"></td>
                                            <td class="px-4 py-3 text-[#374151] md:px-3" x-text="spec.value"></td>
                                        </tr>
                                    </template>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div>
                            <h3 class="mb-4 text-lg font-bold text-[#1A2B5E]">
                                Преимущества
                            </h3>

                            <div class="grid grid-cols-2 gap-2 md:!grid-cols-1">
                                <template x-for="advantage in selectedProduct.advantages" :key="advantage">
                                    <div class="flex items-start gap-2">
                                        <svg class="mt-0.5 h-4 w-4 shrink-0 text-[#3956BC]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                                            <circle cx="12" cy="12" r="10"/>
                                        </svg>

                                        <span class="text-sm text-[#374151]" x-text="advantage"></span>
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div>
                            <h3 class="mb-4 text-lg font-bold text-[#1A2B5E]">
                                Область применения
                            </h3>

                            <div class="overflow-x-auto rounded-xl border border-[#E8EFFD]">
                                <table class="w-full min-w-[680px] text-sm md:text-xs">
                                    <thead>
                                    <tr class="bg-[#3956BC] text-white">
                                        <th class="px-4 py-2.5 text-left font-semibold">Тип строительства</th>
                                        <th class="px-4 py-2.5 text-left font-semibold">Объект</th>
                                        <th class="px-4 py-2.5 text-left font-semibold">Назначение</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <template x-for="(row, index) in selectedProduct.application" :key="index">
                                        <tr :class="index % 2 === 0 ? 'bg-[#F5F8FE]' : 'bg-white'">
                                            <td class="px-4 py-2.5 font-medium text-[#3956BC]" x-text="row.type"></td>
                                            <td class="px-4 py-2.5 text-[#374151]" x-text="row.object"></td>
                                            <td class="px-4 py-2.5 text-[#68737D]" x-text="row.purpose"></td>
                                        </tr>
                                    </template>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>

    {{-- Contact modal --}}
    <div
        x-show="contactOpen"
        x-cloak
        x-transition.opacity
        @keydown.escape.window="contactOpen = false"
        class="fixed inset-0 z-[60] flex items-center justify-center bg-black/50 p-4"
        @click.self="contactOpen = false"
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
    function productsPage() {
        return {
            activeCategory: 'all',
            selectedProduct: null,
            contactOpen: false,

            products: @js($products),

            stats: [
                { value: '13', label: 'Наименований' },
                { value: '5', label: 'Категорий' },
                { value: 'ПВХ / HDPE', label: 'Материалы основы' },
                { value: '25 лет', label: 'Гарантия' },
            ],

            filteredProducts() {
                if (this.activeCategory === 'all') {
                    return this.products;
                }

                return this.products.filter(product => product.category === this.activeCategory);
            },
        };
    }
</script>
