<div class="min-h-screen">
    <!-- Hero -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-gradient-to-br from-[#2E4A92] to-[#4B6CD6] text-white">
        <div class="container mx-auto px-8 lg:px-4 container-page">
            <h1 class="text-6xl lg:text-5xl md:text-4xl sm:text-3xl font-bold mb-6 md:mb-4">
                О компании ООО "СВ ТИМ"
            </h1>

            <p class="text-2xl lg:text-xl md:text-lg sm:text-base text-white/90 max-w-3xl">
                Ведущий производитель инновационных решений для подземной гидроизоляции в России
            </p>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-white">
        <div class="container mx-auto px-8 lg:px-4">
            <div class="grid grid-cols-4 lg:grid-cols-2 md:grid-cols-1 gap-8 md:gap-6 container-page">
                @foreach($stats as $stat)
                    <div class="text-center">
                        <div class="w-16 h-16 md:w-14 md:h-14 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-full flex items-center justify-center mx-auto mb-4">
                            <x-dynamic-component
                                :component="$stat['icon']"
                                class="w-8 h-8 text-white"
                            />
                        </div>

                        <div class="text-4xl md:text-3xl font-bold text-[#3956BC] mb-2">
                            {{ $stat['value'] }}
                        </div>

                        <div class="text-[var(--steel-gray)] md:text-sm">
                            {{ $stat['label'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Mission -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-[var(--light-gray)]">
        <div class="container mx-auto px-8 lg:px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-8 md:mb-6 text-center">
                    Наша миссия
                </h2>

                <p class="text-xl lg:text-lg md:text-base text-[var(--steel-gray)] leading-relaxed text-center mb-8 md:mb-6">
                    Разработка и производство надежных гидроизоляционных систем, которые защищают строительные объекты от
                    воздействия грунтовых вод и обеспечивают долговечность конструкций.
                </p>

                <div class="grid grid-cols-3 md:grid-cols-1 gap-6">
                    <div class="bg-white rounded-xl p-6 md:p-5 text-center">
                        <h3 class="font-bold text-[#3956BC] mb-2">
                            Инновации
                        </h3>

                        <p class="text-[var(--steel-gray)] text-sm">
                            Постоянное совершенствование технологий
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 md:p-5 text-center">
                        <h3 class="font-bold text-[#3956BC] mb-2">
                            Качество
                        </h3>

                        <p class="text-[var(--steel-gray)] text-sm">
                            Международные стандарты производства
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-6 md:p-5 text-center">
                        <h3 class="font-bold text-[#3956BC] mb-2">
                            Надежность
                        </h3>

                        <p class="text-[var(--steel-gray)] text-sm">
                            Гарантия 25 лет на всю продукцию
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-white">
        <div class="container mx-auto px-8 lg:px-4">
            <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-12 md:mb-8 text-center">
                История развития
            </h2>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-8 md:space-y-6">
                    @foreach($timeline as $item)
                        <div class="flex items-start gap-6 md:gap-4 sm:flex-col sm:items-stretch">
                            <div class="shrink-0 w-20 h-20 md:w-16 md:h-16 bg-gradient-to-br from-[#6B8FE8] to-[#3956BC] rounded-full flex items-center justify-center shadow-md">
                                <span class="text-white font-bold md:text-sm">
                                    {{ $item['year'] }}
                                </span>
                            </div>

                            <div class="flex-1 bg-[var(--light-gray)] rounded-xl p-6 md:p-5">
                                <p class="text-lg md:text-base text-[#3956BC] font-medium">
                                    {{ $item['event'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section class="py-20 lg:py-16 md:py-12 sm:py-10 bg-[var(--light-gray)]">
        <div class="container mx-auto px-8 lg:px-4">
            <h2 class="text-4xl md:text-3xl sm:text-2xl font-bold text-[#3956BC] mb-12 md:mb-8 text-center">
                Сертификаты и лицензии
            </h2>

            <div class="grid grid-cols-3 md:grid-cols-1 gap-6 max-w-4xl mx-auto">
                @foreach(['ISO 9001:2015', 'ГОСТ 32626-2014', 'Сертификат соответствия'] as $cert)
                    <div class="bg-white rounded-xl p-8 md:p-6 text-center">
                        <svg class="w-16 h-16 md:w-12 md:h-12 text-[#3956BC] mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z"/>
                        </svg>

                        <h3 class="font-bold text-[#3956BC]">
                            {{ $cert }}
                        </h3>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
