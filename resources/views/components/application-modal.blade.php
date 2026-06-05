<div
    x-show="showAddModal"
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center px-4"
>
    <div
        class="absolute inset-0 bg-black/50"
        @click="showAddModal = false"
    ></div>

    <div
        x-show="showAddModal"
        x-transition
        @click.stop
        class="relative bg-white rounded-xl shadow-xl w-full max-w-lg p-6"
    >
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-xl font-bold text-[#3956BC]">
                Добавить объект
            </h3>

            <button
                type="button"
                @click="showAddModal = false"
                class="text-gray-400 hover:text-gray-600"
            >
                ✕
            </button>
        </div>

        <form @submit.prevent="addOrder()" class="space-y-4">
            <div>
                <label class="block text-sm font-bold text-[#3956BC] mb-2">
                    Адрес объекта
                </label>
                <input
                    type="text"
                    x-model="orderForm.address"
                    required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3956BC]"
                >
            </div>

            <div>
                <label class="block text-sm font-bold text-[#3956BC] mb-2">
                    Заказчик
                </label>
                <input
                    type="text"
                    x-model="orderForm.customer"
                    required
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3956BC]"
                >
            </div>

            <div>
                <label class="block text-sm font-bold text-[#3956BC] mb-2">
                    Комментарий
                </label>
                <textarea
                    x-model="orderForm.comment"
                    rows="4"
                    class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#3956BC]"
                ></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button
                    type="button"
                    @click="showAddModal = false"
                    class="px-4 py-2 rounded-lg border border-gray-300 text-sm font-bold text-gray-600 hover:bg-gray-50"
                >
                    Отмена
                </button>

                <button
                    type="submit"
                    class="px-4 py-2 rounded-lg bg-[#3956BC] text-white text-sm font-bold hover:bg-[#2A3F8F]"
                >
                    Добавить заявку
                </button>
            </div>
        </form>
    </div>
</div>
