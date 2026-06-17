<div class="bg-[var(--light-gray)] rounded-2xl p-8">
    <h3 class="text-2xl font-bold text-[#3956BC] mb-6">Отправить сообщение</h3>

    @if($sent)
        <div class="mb-4 rounded-lg bg-green-100 p-4 text-green-800">
            Спасибо! Мы свяжемся с вами в ближайшее время.
        </div>
    @endif

    <form wire:submit="submit" class="space-y-4">
        <div>
            <label class="block text-sm font-bold text-[#3956BC] mb-2">Название компании</label>
            <div class="relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-[var(--steel-gray)]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                <input type="text" wire:model="companyName" class="w-full pl-10 pr-4 py-3 bg-white rounded-lg border-2 border-transparent focus:border-[#3956BC] focus:outline-none transition-colors" placeholder="example@email.com">
            </div>
            @error('companyName') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-bold text-[#3956BC] mb-2">Ваше имя *</label>
            <div class="relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-[var(--steel-gray)]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                <input type="text" wire:model="name" class="w-full pl-10 pr-4 py-3 bg-white rounded-lg border-2 border-transparent focus:border-[#3956BC] focus:outline-none transition-colors" placeholder="Иван Иванов">
            </div>
            @error('name') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-bold text-[#3956BC] mb-2">Телефон *</label>
            <div class="relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-[var(--steel-gray)]" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <input type="tel" wire:model="phone" class="w-full pl-10 pr-4 py-3 bg-white rounded-lg border-2 border-transparent focus:border-[#3956BC] focus:outline-none transition-colors" placeholder="+7 (___) ___-__-__">
            </div>
            @error('phone') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block text-sm font-bold text-[#3956BC] mb-2">
                Прикрепить файлы
            </label>

            <input
                type="file"
                wire:model="files"
                multiple
                class="w-full px-4 py-3 bg-white rounded-lg border-2 border-transparent focus:border-[#3956BC] focus:outline-none transition-colors"
            >

            <div wire:loading wire:target="files" class="mt-1 text-xs text-[#3956BC]">
                Загружаем файлы...
            </div>

            @error('files') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror
            @error('files.*') <p class="mt-1 text-xs text-red-600">{{ $message }}</p> @enderror

            @if($files)
                <div class="mt-2 space-y-1">
                    @foreach($files as $file)
                        <div class="text-sm text-[var(--steel-gray)]">
                            {{ $file->getClientOriginalName() }}
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <button type="submit" class="w-full px-6 py-4 bg-gradient-to-r from-[#3956BC] to-[#4B6CD6] text-white font-bold rounded-lg hover:from-[#2E4A92] hover:to-[#3956BC] transition-all shadow-lg flex items-center justify-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" x2="11" y1="2" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            <span>Отправить сообщение</span>
        </button>
    </form>
</div>
