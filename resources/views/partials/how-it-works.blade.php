<section id="how-it-works" class="py-20 px-4 bg-gray-50">
    <div class="max-w-2xl mx-auto">

        <div
            x-data="{ show: false }"
            x-intersect.once="show = true"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            class="transition-all duration-700 text-center mb-14"
        >
            <span class="inline-block bg-blue-50 text-blue-600 text-sm font-semibold px-3 py-1 rounded-full mb-4">Процес</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Як це працює</h2>
            <p class="text-gray-500 mt-3 text-sm sm:text-base">Чотири кроки від заявки до готової роботи</p>
        </div>

        <ol class="relative space-y-0">

            {{-- Вертикальна лінія --}}
            <div class="absolute left-5 top-5 bottom-5 w-0.5 bg-gradient-to-b from-blue-600 via-blue-400 to-gray-200 hidden sm:block" aria-hidden="true"></div>

            @php
            $steps = [
                ['num' => '1', 'title' => 'Залишаєш заявку',              'desc' => 'Заповнюєш форму на сайті, прикріплюєш свій текст роботи і методичку від кафедри.',                            'delay' => ''],
                ['num' => '2', 'title' => 'Зв\'язуємось у Telegram',      'desc' => 'Протягом 1–2 годин у робочий час уточнюємо деталі й називаємо точну вартість.',                               'delay' => 'delay-150'],
                ['num' => '3', 'title' => 'Узгоджуємо термін і оплату',   'desc' => 'Надсилаємо посилання на банку Monobank. Передоплата 50%, решта після перевірки.',                             'delay' => 'delay-300'],
                ['num' => '4', 'title' => 'Отримуєш готову роботу',       'desc' => 'У домовлений строк надсилаємо файл Word, готовий до здачі.',                                                   'delay' => 'delay-500'],
            ];
            @endphp

            <div x-data="{ show: false }" x-intersect.once="show = true" class="space-y-0">
                @foreach ($steps as $step)
                <li
                    :class="show ? 'opacity-100 translate-x-0' : 'opacity-0 -translate-x-6'"
                    class="transition-all duration-700 {{ $step['delay'] }} flex gap-6 pb-10 last:pb-0"
                >
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-base shadow-md shadow-blue-600/30 relative z-10">
                        {{ $step['num'] }}
                    </div>
                    <div class="pt-1.5">
                        <p class="font-semibold text-gray-900 text-lg leading-snug">{{ $step['title'] }}</p>
                        <p class="text-gray-500 text-sm mt-1.5">{{ $step['desc'] }}</p>
                    </div>
                </li>
                @endforeach
            </div>

        </ol>

    </div>
</section>
