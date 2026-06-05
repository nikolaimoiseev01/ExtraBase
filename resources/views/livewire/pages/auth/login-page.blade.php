<div
    x-data="{ contactFormOpen: false }"
    class="min-h-screen flex items-center justify-center relative overflow-hidden px-4 py-10"
>
    <!-- Background -->
    <div
        class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2070')] bg-cover bg-center scale-105 blur"
    ></div>

    <div class="absolute inset-0 bg-gradient-to-br from-[#2E4A92]/85 to-[#3956BC]/85"></div>

    <!-- Login Form -->
    <div class="relative z-10 w-full max-w-md sm:max-w-full">
        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 md:p-6 sm:p-5 border border-white/20">
            <div class="text-center mb-8 md:mb-6">
                <a href="/" wire:navigate class="text-4xl md:text-3xl sm:text-2xl font-bold text-white mb-2">
                    Extra Base
                </a>

                <p class="text-white/80">
                    Вход для партнеров
                </p>
            </div>

            <form wire:submit.prevent="login" class="space-y-6 md:space-y-5">
                <div>
                    <label class="block text-white font-medium mb-2">
                        Email или логин
                    </label>

                    <div class="relative">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-white/50"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>

                        <input
                            type="text"
                            wire:model="form.email"
                            required
                            placeholder="partner@example.com"
                            class="w-full pl-12 pr-4 py-3 bg-white/20 text-white placeholder-white/50 rounded-lg border-2 border-white/30 focus:border-white focus:outline-none backdrop-blur-sm"
                        >
                    </div>


                    @error('form.email')
                    <div class="mt-2 text-sm text-red-200">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div>
                    <label class="block text-white font-medium mb-2">
                        Пароль
                    </label>

                    <div class="relative">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-white/50"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>

                        <input
                            type="password"
                            wire:model="form.password"
                            required
                            placeholder="••••••••"
                            class="w-full pl-12 pr-4 py-3 bg-white/20 text-white placeholder-white/50 rounded-lg border-2 border-white/30 focus:border-white focus:outline-none backdrop-blur-sm"
                        >
                    </div>

                    @error('form.password')
                    <div class="mt-2 text-sm text-red-200">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="flex items-center justify-between gap-4 sm:flex-col sm:items-start">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input
                            type="checkbox"
                            wire:model="remember"
                            class="w-4 h-4 rounded"
                        >

                        <span class="text-white/80 text-sm">
                            Запомнить меня
                        </span>
                    </label>

{{--                    <a--}}
{{--                        href="{{ route('password.request') }}"--}}
{{--                        wire:navigate--}}
{{--                        class="text-white hover:underline text-sm"--}}
{{--                    >--}}
{{--                        Забыли пароль?--}}
{{--                    </a>--}}
                </div>

                <button
                    type="submit"
                    class="w-full py-4 bg-[#3956BC] text-white font-bold rounded-lg hover:bg-[#2A3F8F] transition-all transform hover:scale-105 disabled:opacity-60 disabled:cursor-not-allowed"
                    wire:loading.attr="disabled"
                >
                    <span wire:loading.remove>
                        Войти
                    </span>

                    <span wire:loading>
                        Вход...
                    </span>
                </button>
            </form>

            <div class="mt-8 md:mt-6 text-center">
                <p class="text-white/80 text-sm">
                    Еще не партнер?

                    <button
                        type="button"
                        @click="contactFormOpen = true"
                        class="text-white hover:underline font-medium"
                    >
                        Оставить заявку
                    </button>
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Form Modal -->
    <div
        x-show="contactFormOpen"
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
            @click.away="contactFormOpen = false"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="relative w-full max-w-lg bg-white rounded-2xl shadow-xl"
        >
            <button
                type="button"
                @click="contactFormOpen = false"
                class="absolute right-4 top-4 text-gray-400 hover:text-gray-600"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
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
