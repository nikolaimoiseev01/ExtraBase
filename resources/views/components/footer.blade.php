<footer class="bg-gradient-to-br from-[#2E4A92] to-[#3956BC] text-white">
    <div class="container mx-auto px-8 lg:px-4 py-16 md:py-12 sm:py-10">
        <div class="grid grid-cols-4 lg:grid-cols-2 md:!grid-cols-1 gap-12 lg:gap-8 md:gap-6">
            <!-- Company Info -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <x-logo class="h-8 md:h-7 w-auto brightness-0 invert" />
                    <span class="text-2xl md:text-xl font-bold"></span>
                </div>

                <p class="text-white/70 mb-6 text-sm leading-relaxed">
                    Инновационные решения для подземной гидроизоляции. ПВХ-мембрана премиум качества для фундаментов,
                    тоннелей и промышленных объектов.
                </p>

                <div class="flex gap-4">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>

                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>
                    </a>

                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center hover:bg-white/20 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </a>
                </div>
            </div>

            <!-- Products -->
            <div>
                <h3 class="font-bold mb-4 md:mb-3">Продукция</h3>

                <ul class="space-y-3 md:space-y-2">
                    <li>
                        <a wire:navigate href="{{ route('portal.products') }}" class="text-white/70 hover:text-white transition-colors text-sm">
                            ПВХ-мембрана
                        </a>
                    </li>

                    <li>
                        <a wire:navigate href="{{ route('portal.products') }}#accessories" class="text-white/70 hover:text-white transition-colors text-sm">
                            Аксессуары
                        </a>
                    </li>

                    <li>
                        <a wire:navigate href="{{ route('portal.products') }}#services" class="text-white/70 hover:text-white transition-colors text-sm">
                            Услуги монтажа
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Company -->
            <div>
                <h3 class="font-bold mb-4 md:mb-3">Навигация</h3>

                <ul class="space-y-3 md:space-y-2">
                    <li>
                        <a wire:navigate href="{{ route('portal.about') }}" class="text-white/70 hover:text-white transition-colors text-sm">
                            О нас
                        </a>
                    </li>

                    <li>
                        <a wire:navigate href="{{ route('portal.partners') }}" class="text-white/70 hover:text-white transition-colors text-sm">
                            Партнеры
                        </a>
                    </li>

                    <li>
                        <a wire:navigate href="{{ route('portal.documentation') }}" class="text-white/70 hover:text-white transition-colors text-sm">
                            Документация
                        </a>
                    </li>

                    <li>
                        <a wire:navigate href="{{ route('portal.technical-solutions') }}" class="text-white/70 hover:text-white transition-colors text-sm">
                            Технические решения
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="font-bold mb-4 md:mb-3">Контакты</h3>

                <ul class="space-y-3 md:space-y-2">
                    <li class="flex items-start gap-3">
                        <svg class="shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6B8FE8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>

                        <span class="text-white/70 text-sm">
                             г.Москва, Староалексеевская, д.5
                        </span>
                    </li>

                    <li class="flex items-center gap-3">
                        <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6B8FE8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>

                        <a href="tel:+74951988986" class="text-white/70 hover:text-white transition-colors text-sm">
                            +7 (495) 198-89-86
                        </a>
                    </li>

                    <li class="flex items-center gap-3">
                        <svg class="shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#6B8FE8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>

                        <a href="mailto:info@svtym.ru" class="text-white/70 hover:text-white transition-colors text-sm">
                            info@svtym.ru
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/10 mt-12 md:mt-8 pt-8 md:pt-6 flex justify-between items-center gap-4 md:flex-col md:items-start">
            <div class="text-sm text-white/50">
                © {{ now()->year }} . Все права защищены.
            </div>

            <div class="flex gap-6 md:gap-4 sm:flex-col sm:gap-2 text-sm">
                <a href="#" class="text-white/50 hover:text-white transition-colors">
                    Политика конфиденциальности
                </a>

                <a wire:navigate href="{{ route('login') }}" class="text-white/50 hover:text-white transition-colors">
                    Вход для партнеров
                </a>
            </div>
        </div>
    </div>
</footer>
