<div
    x-data="portfolioSlider()"
    x-init="startAutoplay()"
    class="min-h-screen"
>
    @php
        $stats = [
            ['value' => '7', 'label' => 'Объектов в портфолио'],
            ['value' => '54 000 м²', 'label' => 'Изолированных поверхностей'],
            ['value' => '2', 'label' => 'Города'],
            ['value' => '2', 'label' => 'В производстве'],
        ];

        $slides = [
            [
                'src' => '/fixed/works/1.1.jpg',
                'alt' => 'Детская больница святой Ольги',
            ],
            [
                'src' => '/fixed/works/2.1.jpg',
                'alt' => 'Подземный паркинг',
            ],
            [
                'src' => '/fixed/works/3.1.jpg',
                'alt' => 'Гидроизоляция фундамента',
            ],
            [
                'src' => '/fixed/works/4.1.jpg',
                'alt' => 'Жилой дом с подземной автостоянкой',
            ],
            [
                'src' => '/fixed/works/5.1.jpg',
                'alt' => 'Жилой комплекс',
            ],
            [
                'src' => '/fixed/works/6.1.jpg',
                'alt' => 'Историческое здание',
            ],
            [
                'src' => '/fixed/works/7.1.jpg',
                'alt' => 'Подземная парковка ЖК СберСити',
            ],
        ];
    @endphp

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
                    Альбом технических решений
                </h1>

                <p class="max-w-2xl text-xl leading-relaxed text-white/85 lg:text-lg md:text-base">
                    Реализованные объекты по гидроизоляции фундаментов, подземных паркингов
                    и исторических зданий в Москве и Санкт-Петербурге
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F8FE] py-20 lg:py-16 md:py-12 sm:py-10">
        <div class="container mx-auto px-4 lg:px-8 md:px-4">
            <div
                class="relative mx-auto max-w-7xl"
                @mouseenter="stopAutoplay()"
                @mouseleave="startAutoplay()"
            >
                <div
                    class="group relative overflow-hidden rounded-[32px] bg-[#1A2B5E] shadow-2xl shadow-[#1A2B5E]/20 md:rounded-2xl"
                >
                    <div class="relative aspect-[16/8] w-full lg:aspect-[16/9] md:aspect-[4/3] sm:aspect-square">
                        <template x-for="(slide, index) in slides" :key="index">
                            <img
                                x-show="currentSlide === index"
                                x-transition.opacity.duration.500ms
                                :src="slide.src"
                                :alt="slide.alt"
                                @click="fullscreenOpen = true"
                                class="absolute inset-0 h-full w-full cursor-zoom-in object-cover"
                            >
                        </template>

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/35 via-transparent to-black/10"></div>

                        <button
                            type="button"
                            @click="prevSlide()"
                            class="absolute left-6 top-1/2 flex h-14 w-14 -translate-y-1/2 items-center justify-center rounded-full bg-white/90 text-[#1A2B5E] shadow-lg backdrop-blur transition-all hover:scale-105 hover:bg-white md:left-3 md:h-11 md:w-11"
                        >
                            <svg class="h-6 w-6 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19 8 12l7-7"/>
                            </svg>
                        </button>

                        <button
                            type="button"
                            @click="nextSlide()"
                            class="absolute right-6 top-1/2 flex h-14 w-14 -translate-y-1/2 items-center justify-center rounded-full bg-white/90 text-[#1A2B5E] shadow-lg backdrop-blur transition-all hover:scale-105 hover:bg-white md:right-3 md:h-11 md:w-11"
                        >
                            <svg class="h-6 w-6 md:h-5 md:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                            </svg>
                        </button>

                        <div class="absolute bottom-6 left-1/2 flex -translate-x-1/2 gap-2 md:bottom-4">
                            <template x-for="(slide, index) in slides" :key="index">
                                <button
                                    type="button"
                                    @click="goToSlide(index)"
                                    class="h-2 rounded-full transition-all"
                                    :class="currentSlide === index ? 'w-8 bg-white' : 'w-2 bg-white/50 hover:bg-white/80'"
                                ></button>
                            </template>
                        </div>
                    </div>
                </div>

                <div class="mt-8 overflow-x-auto pb-3 md:mt-5">
                    <div class="flex min-w-max justify-center gap-4 md:gap-3">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button
                                type="button"
                                @click="goToSlide(index)"
                                class="relative h-24 w-36 shrink-0 overflow-hidden rounded-2xl border-2 transition-all duration-300 md:h-20 md:w-28 sm:h-16 sm:w-24"
                                :class="currentSlide === index
                                    ? 'scale-105 border-[#3956BC] shadow-lg shadow-[#3956BC]/25'
                                    : 'border-transparent opacity-60 hover:scale-105 hover:opacity-100'"
                            >
                                <img
                                    :src="slide.src"
                                    :alt="slide.alt"
                                    class="h-full w-full object-cover"
                                >

                                <div
                                    x-show="currentSlide === index"
                                    class="absolute inset-0 ring-4 ring-inset ring-[#3956BC]/20"
                                ></div>
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div
        x-show="fullscreenOpen"
        x-cloak
        x-transition.opacity
        @keydown.escape.window="fullscreenOpen = false"
        @click.self="fullscreenOpen = false"
        class="fixed inset-0 z-[70] flex items-center justify-center bg-black/90 p-4"
    >
        <button
            type="button"
            @click="fullscreenOpen = false"
            class="absolute right-6 top-6 z-10 flex h-11 w-11 items-center justify-center rounded-full bg-white/10 text-white backdrop-blur transition-colors hover:bg-white/20"
        >
            ✕
        </button>

        <button
            type="button"
            @click.stop="prevSlide()"
            class="absolute left-6 top-1/2 z-10 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white/10 text-white backdrop-blur transition-colors hover:bg-white/20 md:left-3"
        >
            ‹
        </button>

        <img
            :src="slides[currentSlide].src"
            :alt="slides[currentSlide].alt"
            class="max-h-[90vh] max-w-[92vw] rounded-2xl object-contain shadow-2xl"
        >

        <button
            type="button"
            @click.stop="nextSlide()"
            class="absolute right-6 top-1/2 z-10 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full bg-white/10 text-white backdrop-blur transition-colors hover:bg-white/20 md:right-3"
        >
            ›
        </button>
    </div>
</div>

<script>
    function portfolioSlider() {
        return {
            currentSlide: 0,
            fullscreenOpen: false,
            autoplay: null,

            slides: @js($slides),

            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
            },

            prevSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
            },

            goToSlide(index) {
                this.currentSlide = index;
            },

            startAutoplay() {
                this.stopAutoplay();

                this.autoplay = setInterval(() => {
                    if (!this.fullscreenOpen) {
                        this.nextSlide();
                    }
                }, 5000);
            },

            stopAutoplay() {
                if (this.autoplay) {
                    clearInterval(this.autoplay);
                    this.autoplay = null;
                }
            },
        };
    }
</script>
