<section class="py-20 px-4 bg-white">
    <div class="max-w-2xl mx-auto">

        <div
            x-data="{ show: false }"
            x-intersect.once="show = true"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            class="transition-all duration-700 text-center mb-12"
        >
            <span class="inline-block bg-amber-50 text-amber-600 text-sm font-semibold px-3 py-1 rounded-full mb-4">FAQ</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Часті питання</h2>
        </div>

        <div
            x-data="{ show: false }"
            x-intersect.once="show = true"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            class="transition-all duration-700 delay-150 space-y-3"
        >

            @php
            $faqs = [
                ['q' => 'Чи це не плагіат? Чи не порушу я правила вишу?',
                 'a' => 'Ні. Ми не пишемо роботу за тебе — це було б академічним обманом. Ми оформлюємо текст, який ти написав сам, за вимогами твого вишу: ДСТУ 8302:2015, методичка кафедри, правильні шрифти, інтервали, нумерація. Це звичайна послуга proofreading і форматування, легальна в усьому світі.'],
                ['q' => 'Як швидко зробите?',
                 'a' => 'Стандартний строк — 24–48 годин з моменту узгодження деталей. Якщо потрібно швидше — можливо з націнкою +50%, але залежить від обсягу й черги.'],
                ['q' => 'Що, якщо мені не сподобається результат?',
                 'a' => 'До здачі роботи — безкоштовно вносимо правки за твоїми коментарями. Якщо науковий керівник вимагає переробити частину оформлення — теж безкоштовно протягом 7 днів від отримання роботи.'],
                ['q' => 'Які виші підтримуєте?',
                 'a' => 'Будь-які українські виші. Достатньо прислати методичку від кафедри. Якщо методички немає — оформимо за ДСТУ 8302:2015 і загальними вимогами для дипломних робіт.'],
                ['q' => 'А якщо у мене немає методички кафедри?',
                 'a' => 'Запитай у наукового керівника або в деканаті — це обов\'язковий документ. Якщо отримати неможливо — оформимо за стандартом ДСТУ 8302:2015. Цей стандарт — основа для більшості вишів України.'],
                ['q' => 'Чи зберігаєте ви мою роботу після виконання?',
                 'a' => 'Через 7 днів після підтвердження отримання видаляємо твій файл з нашого сервера. Робота залишається тільки в тебе.'],
                ['q' => 'Як платити?',
                 'a' => 'Картою через банку Monobank — після узгодження надсилаємо посилання. Підходить будь-яка українська або іноземна картка. Передоплата 50%, решта після перевірки готового файлу.'],
            ];
            @endphp

            @foreach ($faqs as $faq)
            <div x-data="{ open: false }" class="border border-gray-200 rounded-xl overflow-hidden">
                <button
                    @click="open = !open"
                    :aria-expanded="open"
                    class="w-full flex justify-between items-center px-5 py-4 text-left font-semibold text-gray-800 hover:bg-gray-50 transition-colors gap-3"
                >
                    <span>{{ $faq['q'] }}</span>
                    <span
                        :class="open ? 'bg-amber-400 text-white rotate-45' : 'bg-gray-100 text-gray-500'"
                        class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center transition-all duration-300 text-lg leading-none font-bold"
                        aria-hidden="true"
                    >+</span>
                </button>
                <div x-show="open" x-collapse class="px-5 pb-4 text-gray-600 text-sm leading-relaxed border-t border-gray-100">
                    <div class="pt-3">
                        {{ $faq['a'] }}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
