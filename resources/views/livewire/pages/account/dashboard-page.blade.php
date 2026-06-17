<div
    x-data="{ showAddForm: false }"
    @order-added.window="showAddForm = false"
    class="min-h-screen bg-[var(--light-gray)]"
>
    <div class="container mx-auto px-8 lg:px-4 py-12 md:py-8">
        <div class="flex items-center justify-between gap-4 mb-8 md:flex-col md:items-start">
            <h1 class="text-4xl lg:text-3xl md:text-2xl sm:text-xl font-bold text-[#3956BC]">
                Личный кабинет
            </h1>

            <button
                type="button"
                @click="showAddForm = !showAddForm"
                class="px-6 py-3 md:px-4 md:py-2 bg-[#3956BC] text-white font-bold rounded-lg hover:bg-[#2A3F8F] transition-colors flex items-center gap-2 md:w-full md:justify-center"
            >
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>

                <span x-text="showAddForm ? 'Скрыть форму' : 'Создать объект'"></span>
            </button>
        </div>

        <div class="grid grid-cols-3 md:!grid-cols-1 gap-6 md:gap-4 mb-8">
            <div class="bg-white rounded-xl p-6 md:p-5">
                <div class="text-3xl md:text-2xl font-bold text-[#3956BC] mb-2">
                    {{ $this->applications->count() }}
                </div>
                <div class="text-[var(--steel-gray)] md:text-sm">
                    Всего объектов
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 md:p-5">
                <div class="text-3xl md:text-2xl font-bold text-green-600 mb-2">
                    {{ $this->applications->where('status', 'Закреплен')->count() }}
                </div>
                <div class="text-[var(--steel-gray)] md:text-sm">
                    Закреплено
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 md:p-5">
                <div class="text-3xl md:text-2xl font-bold text-yellow-600 mb-2">
                    {{ $this->applications->where('status', 'На рассмотрении')->count() }}
                </div>
                <div class="text-[var(--steel-gray)] md:text-sm">
                    На рассмотрении
                </div>
            </div>
        </div>

        <div
            x-show="showAddForm"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-3"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-3"
            x-cloak
            class="bg-white rounded-xl shadow-md p-6 md:p-4 mb-8"
        >
            <form wire:submit.prevent="addOrder" class="grid grid-cols-3 lg:grid-cols-2 md:!grid-cols-1 gap-4">
                <div>
                    <label class="block text-sm font-bold text-[#3956BC] mb-2">
                        Дата
                    </label>
                    <input
                        type="date"
                        wire:model="date"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3956BC]"
                    >
                    @error('date')
                    <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-[#3956BC] mb-2">
                        Адрес
                    </label>
                    <input
                        type="text"
                        wire:model="address"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3956BC]"
                    >
                    @error('address')
                    <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-[#3956BC] mb-2">
                        Заказчик
                    </label>
                    <input
                        type="text"
                        wire:model="customer"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3956BC]"
                    >
                    @error('customer')
                    <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-[#3956BC] mb-2">
                        Площадь
                    </label>
                    <input
                        type="number"
                        step="0.01"
                        wire:model="area"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3956BC]"
                    >
                    @error('area')
                    <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-[#3956BC] mb-2">
                        Тип объекта
                    </label>
                    <input
                        type="text"
                        wire:model="type"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3956BC]"
                    >
                    @error('type')
                    <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-bold text-[#3956BC] mb-2">
                        Комментарий
                    </label>
                    <input
                        type="text"
                        wire:model="comment"
                        class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3956BC]"
                    >
                    @error('comment')
                    <div class="text-red-600 text-xs mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-span-3 lg:col-span-2 md:col-span-1 flex justify-end gap-3 md:flex-col">
                    <button
                        type="button"
                        @click="showAddForm = false"
                        class="px-5 py-2 rounded-lg border border-gray-300 text-sm font-bold text-gray-600 hover:bg-gray-50 md:w-full"
                    >
                        Отмена
                    </button>

                    <button
                        type="submit"
                        class="px-5 py-2 rounded-lg bg-[#3956BC] text-white text-sm font-bold hover:bg-[#2A3F8F] md:w-full"
                    >
                        Отправить заявку
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-white rounded-xl overflow-hidden shadow-md">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[1000px]">
                    <thead class="bg-[#3956BC] text-white">
                    <tr>
                        <th class="px-6 py-4 text-left">Дата</th>
                        <th class="px-6 py-4 text-left">Адрес</th>
                        <th class="px-6 py-4 text-left">Заказчик</th>
                        <th class="px-6 py-4 text-left">Тип</th>
                        <th class="px-6 py-4 text-left">Площадь</th>
                        <th class="px-6 py-4 text-left">Комментарий</th>
                        <th class="px-6 py-4 text-left">Статус</th>
                        <th class="px-6 py-4 text-left">Действия</th>
                    </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                    @forelse($this->applications as $application)
                        <tr class="hover:bg-[var(--light-gray)] transition-colors">
                            <td class="px-6 py-4 text-[#3956BC] whitespace-nowrap">
                                {{ $application->date }}
                            </td>

                            <td class="px-6 py-4 text-[#3956BC]">
                                {{ $application->address }}
                            </td>

                            <td class="px-6 py-4 text-[#3956BC]">
                                {{ $application->customer }}
                            </td>

                            <td class="px-6 py-4 text-[var(--steel-gray)]">
                                {{ $application->type ?: '—' }}
                            </td>

                            <td class="px-6 py-4 text-[var(--steel-gray)] whitespace-nowrap">
                                {{ $application->area ? $application->area . ' м²' : '—' }}
                            </td>

                            <td class="px-6 py-4 text-[var(--steel-gray)]">
                                {{ $application->comment ?: '—' }}
                            </td>

                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded-full text-sm font-medium {{ $this->getStatusClass($application->status) }}">
                                    {{ $application->status }}
                                </span>
                            </td>

                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <button
                                        type="button"
                                        class="p-2 text-[#3956BC] hover:bg-[var(--light-gray)] rounded-lg transition-colors"
                                        title="Просмотр"
                                    >
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>

                                    <button
                                        type="button"
                                        class="p-2 text-[#3956BC] hover:bg-[var(--light-gray)] rounded-lg transition-colors"
                                        title="Редактировать"
                                    >
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </button>

                                    <button
                                        type="button"
                                        wire:click="deleteOrder({{ $application->id }})"
                                        wire:confirm="Удалить заявку?"
                                        class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors"
                                        title="Удалить"
                                    >
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6m2 0H7m3-3h4a1 1 0 011 1v2H9V5a1 1 0 011-1z"/>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-10 text-center text-[var(--steel-gray)]">
                                Заявок пока нет
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
