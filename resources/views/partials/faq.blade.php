<section class="py-20 px-4 bg-white">
    <div class="max-w-2xl mx-auto">

        <div
            x-data="{ show: false }"
            x-intersect.once="show = true"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            class="transition-all duration-700 text-center mb-12"
        >
            <span class="inline-block bg-amber-50 text-amber-600 text-sm font-semibold px-3 py-1 rounded-full mb-4">FAQ</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Часті запитання</h2>
        </div>

        <div
            x-data="{ show: false }"
            x-intersect.once="show = true"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            class="transition-all duration-700 delay-150 space-y-3"
        >

            @php
            $faqs = [
                'Чи це не плагіат?',
                'Як швидко ви виконуєте роботу?',
                'Що якщо оформлення не сподобається?',
                'Для яких вишів ви працюєте?',
                'Чи дотримуєтесь ви вимог ДСТУ 8302:2015?',
            ];
            @endphp

            @foreach ($faqs as $question)
            <div x-data="{ open: false }" class="border border-gray-200 rounded-xl overflow-hidden">
                <button
                    @click="open = !open"
                    :aria-expanded="open"
                    class="w-full flex justify-between items-center px-5 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 transition-colors gap-3"
                >
                    <span>{{ $question }}</span>
                    <span
                        :class="open ? 'bg-amber-400 text-white rotate-45' : 'bg-gray-100 text-gray-500'"
                        class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center transition-all duration-300 text-lg leading-none font-bold"
                        aria-hidden="true"
                    >+</span>
                </button>
                <div x-show="open" x-collapse class="px-5 pb-4 text-gray-600 text-sm leading-relaxed border-t border-gray-100">
                    <div class="pt-3">
                        Тут буде відповідь на запитання. Власник додасть текст пізніше.
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
