<section class="relative min-h-[92vh] flex flex-col justify-center overflow-hidden bg-blue-950">

    {{-- Фото-фон --}}
    <img
        src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?auto=format&fit=crop&w=1920&q=80"
        alt=""
        fetchpriority="high"
        class="absolute inset-0 w-full h-full object-cover object-center"
    >
    {{-- Градієнтний оверлей --}}
    <div class="absolute inset-0 bg-gradient-to-br from-blue-950/95 via-blue-900/88 to-blue-800/80"></div>

    {{-- Плаваючі бейджі (тільки десктоп) --}}
    <div class="anim-float hidden lg:flex absolute right-[8%] top-[22%] items-center gap-2 bg-white/10 backdrop-blur border border-white/20 text-white text-sm font-medium px-4 py-2 rounded-full shadow-lg" style="animation-delay:.3s">
        <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
        ДСТУ 8302:2015 гарантовано
    </div>
    <div class="anim-float hidden lg:flex absolute left-[7%] bottom-[32%] items-center gap-2 bg-white/10 backdrop-blur border border-white/20 text-white text-sm font-medium px-4 py-2 rounded-full shadow-lg" style="animation-delay:1.2s">
        <svg class="w-4 h-4 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        Відповідь за 1–2 години
    </div>

    {{-- Основний контент --}}
    <div class="relative z-10 max-w-4xl mx-auto px-4 py-24 text-center text-white">

        <div class="anim-in">
            <span class="inline-flex items-center gap-2 bg-amber-400/15 border border-amber-400/30 text-amber-300 text-sm font-medium px-4 py-1.5 rounded-full mb-8">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Понад 150 задоволених студентів
            </span>
        </div>

        <h1 class="anim-in-1 text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-6 tracking-tight">
            Оформимо вашу<br>
            <span class="text-amber-400">дипломну чи курсову</span><br>
            роботу за ДСТУ
        </h1>

        <p class="anim-in-2 text-lg sm:text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">
            Правильне оформлення за ДСТУ 8302:2015 і вимогами вашої кафедри. Без зайвих нервів — ви здаєте роботу вчасно.
        </p>

        <div class="anim-in-3 flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a
                href="#order"
                data-scroll-to
                class="inline-flex items-center gap-2 bg-amber-400 hover:bg-amber-300 text-blue-950 font-bold text-lg px-8 py-4 rounded-xl transition-all duration-200 hover:scale-105 shadow-lg"
            >
                Замовити зараз
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#how-it-works" class="text-blue-200 hover:text-white text-sm underline underline-offset-4 transition-colors">
                Як це працює?
            </a>
        </div>
    </div>

    {{-- Стрип зі статистикою --}}
    <div class="relative z-10 border-t border-white/10 bg-white/5 backdrop-blur-sm">
        <div class="max-w-3xl mx-auto px-4 py-5 grid grid-cols-3 gap-4 text-center text-white">

            <div
                x-data="{
                    v: 0,
                    run(n) {
                        const t = Date.now(), d = 1400;
                        const tick = () => {
                            const p = Math.min((Date.now() - t) / d, 1);
                            this.v = Math.round((1 - Math.pow(1 - p, 2)) * n);
                            if (p < 1) requestAnimationFrame(tick);
                        };
                        requestAnimationFrame(tick);
                    }
                }"
                x-intersect.once="run(150)"
            >
                <div class="text-2xl sm:text-3xl font-bold text-amber-400" x-text="v + '+'">0+</div>
                <div class="text-xs sm:text-sm text-blue-200 mt-0.5">студентів</div>
            </div>

            <div class="border-x border-white/10">
                <div class="text-2xl sm:text-3xl font-bold text-amber-400">200₴+</div>
                <div class="text-xs sm:text-sm text-blue-200 mt-0.5">від 200 грн</div>
            </div>

            <div
                x-data="{
                    v: 0,
                    run(n) {
                        const t = Date.now(), d = 1200;
                        const tick = () => {
                            const p = Math.min((Date.now() - t) / d, 1);
                            this.v = Math.round((1 - Math.pow(1 - p, 2)) * n);
                            if (p < 1) requestAnimationFrame(tick);
                        };
                        requestAnimationFrame(tick);
                    }
                }"
                x-intersect.once="run(3)"
            >
                <div class="text-2xl sm:text-3xl font-bold text-amber-400" x-text="v + ' год'">0 год</div>
                <div class="text-xs sm:text-sm text-blue-200 mt-0.5">середній час відповіді</div>
            </div>

        </div>
    </div>

</section>
