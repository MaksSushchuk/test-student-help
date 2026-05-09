<section class="py-16 px-4 bg-white">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-800 mb-10">Часті запитання</h2>

        <div class="space-y-3">

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-5 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 transition-colors"
                    :aria-expanded="open"
                >
                    <span>Чи це не плагіат?</span>
                    <svg :class="open ? 'rotate-180' : ''" class="w-5 h-5 text-gray-400 transition-transform flex-shrink-0 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                    Тут буде відповідь на запитання. Власник додасть текст пізніше.
                </div>
            </div>

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-5 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 transition-colors"
                    :aria-expanded="open"
                >
                    <span>Як швидко ви виконуєте роботу?</span>
                    <svg :class="open ? 'rotate-180' : ''" class="w-5 h-5 text-gray-400 transition-transform flex-shrink-0 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                    Тут буде відповідь на запитання. Власник додасть текст пізніше.
                </div>
            </div>

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-5 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 transition-colors"
                    :aria-expanded="open"
                >
                    <span>Що якщо оформлення не сподобається?</span>
                    <svg :class="open ? 'rotate-180' : ''" class="w-5 h-5 text-gray-400 transition-transform flex-shrink-0 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                    Тут буде відповідь на запитання. Власник додасть текст пізніше.
                </div>
            </div>

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-5 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 transition-colors"
                    :aria-expanded="open"
                >
                    <span>Для яких вишів ви працюєте?</span>
                    <svg :class="open ? 'rotate-180' : ''" class="w-5 h-5 text-gray-400 transition-transform flex-shrink-0 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                    Тут буде відповідь на запитання. Власник додасть текст пізніше.
                </div>
            </div>

            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                <button
                    @click="open = !open"
                    class="w-full flex justify-between items-center px-5 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 transition-colors"
                    :aria-expanded="open"
                >
                    <span>Чи дотримуєтесь ви вимог ДСТУ 8302:2015?</span>
                    <svg :class="open ? 'rotate-180' : ''" class="w-5 h-5 text-gray-400 transition-transform flex-shrink-0 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-collapse class="px-5 pb-4 text-gray-600 text-sm leading-relaxed">
                    Тут буде відповідь на запитання. Власник додасть текст пізніше.
                </div>
            </div>

        </div>
    </div>
</section>
