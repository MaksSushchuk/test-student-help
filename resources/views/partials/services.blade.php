<section class="py-20 px-4 bg-white">
    <div class="max-w-5xl mx-auto">

        <div
            x-data="{ show: false }"
            x-intersect.once="show = true"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
            class="transition-all duration-700 text-center mb-12"
        >
            <span class="inline-block bg-amber-50 text-amber-600 text-sm font-semibold px-3 py-1 rounded-full mb-4">Ціни та послуги</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Що оформлюємо</h2>
            <p class="text-gray-500 mt-3 text-sm sm:text-base">За ДСТУ 8302:2015 і методичкою твоєї кафедри</p>
        </div>

        <div
            x-data="{ show: false }"
            x-intersect.once="show = true"
            class="grid sm:grid-cols-3 gap-6"
        >
            <div
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 group bg-white border border-gray-200 rounded-2xl p-7 text-center hover:shadow-xl hover:-translate-y-1 hover:border-blue-200 cursor-default"
            >
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:bg-blue-100 transition-colors">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Курсова робота</h3>
                <p class="text-3xl font-bold text-amber-500 mb-1">від 200 грн</p>
                <p class="text-xs text-gray-400 mb-4">Строк: 24 години</p>
                <ul class="text-sm text-gray-500 text-left space-y-1.5">
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Оформлення тексту за ДСТУ 8302:2015</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Підгонка під методичку твого вишу</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Поля, шрифти, абзаци, інтервали</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Автоматичний зміст з нумерацією</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Підписи рисунків і таблиць</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Список літератури за стандартом</li>
                </ul>
            </div>

            <div
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 delay-150 group bg-blue-600 rounded-2xl p-7 text-center hover:shadow-2xl hover:-translate-y-1 cursor-default relative overflow-hidden"
            >
                <div class="absolute top-3 right-3 bg-amber-400 text-blue-950 text-xs font-bold px-2.5 py-0.5 rounded-full">Найпопулярніше</div>
                <div class="w-14 h-14 bg-white/15 rounded-2xl flex items-center justify-center mx-auto mb-5">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                </div>
                <h3 class="text-lg font-semibold text-white mb-2">Дипломна (бакалавр)</h3>
                <p class="text-3xl font-bold text-amber-400 mb-1">від 400 грн</p>
                <p class="text-xs text-blue-200/70 mb-4">Строк: 24–48 годин</p>
                <ul class="text-sm text-blue-100 text-left space-y-1.5">
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-amber-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Усе з курсової</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-amber-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Анотація і реферат за вимогами</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-amber-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Перелік умовних позначень</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-amber-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Додатки за ДСТУ</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-amber-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Нумерація формул і посилань</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-amber-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Перевірка структури роботи</li>
                </ul>
            </div>

            <div
                :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
                class="transition-all duration-700 delay-300 group bg-white border border-gray-200 rounded-2xl p-7 text-center hover:shadow-xl hover:-translate-y-1 hover:border-blue-200 cursor-default"
            >
                <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-5 group-hover:bg-blue-100 transition-colors">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Магістерська</h3>
                <p class="text-3xl font-bold text-amber-500 mb-1">від 600 грн</p>
                <p class="text-xs text-gray-400 mb-4">Строк: 48 годин</p>
                <ul class="text-sm text-gray-500 text-left space-y-1.5">
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Усе з дипломної</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Складна структура (розділи, підрозділи)</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Складне форматування формул</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Підготовка до вимог кафедри</li>
                    <li class="flex items-start gap-2"><svg class="w-4 h-4 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>Анотація українською та англійською</li>
                </ul>
            </div>
        </div>

        <div
            x-data="{ show: false }"
            x-intersect.once="show = true"
            :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'"
            class="transition-all duration-700 delay-300 mt-8 flex flex-wrap justify-center gap-3"
        >
            <span class="inline-flex items-center gap-1.5 bg-gray-100 text-gray-600 text-sm px-4 py-2 rounded-full">
                <svg class="w-4 h-4 text-amber-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Презентація до диплому: +150 грн
            </span>
            <span class="inline-flex items-center gap-1.5 bg-gray-100 text-gray-600 text-sm px-4 py-2 rounded-full">
                <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                Терміновість до 24 год: +50%
            </span>
            <span class="inline-flex items-center gap-1.5 bg-gray-100 text-gray-600 text-sm px-4 py-2 rounded-full">
                <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                Правки після наукового керівника — безкоштовно 7 днів
            </span>
        </div>

    </div>
</section>
