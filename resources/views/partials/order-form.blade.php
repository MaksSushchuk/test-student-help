<section id="order" class="py-20 px-4 bg-gradient-to-br from-blue-600 to-blue-800">
    <div
        x-data="{ show: false }"
        x-intersect.once="show = true"
        :class="show ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-6'"
        class="transition-all duration-700 max-w-xl mx-auto text-center"
    >
        <span class="inline-block bg-white/15 text-white text-sm font-semibold px-3 py-1 rounded-full mb-5">Залишити заявку</span>
        <h2 class="text-2xl sm:text-3xl font-bold text-white mb-3">Готові розпочати?</h2>
        <p class="text-blue-100 mb-8">Заповніть форму — зв'яжемось у Telegram протягом 1–2 годин у робочий час.</p>
        {{-- Форма — у Фазі 2 --}}
    </div>
</section>
