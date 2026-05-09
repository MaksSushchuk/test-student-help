<footer class="bg-gray-900 text-gray-400 py-12 px-4">
    <div class="max-w-5xl mx-auto">

        <div class="grid sm:grid-cols-3 gap-8 mb-8">
            <div>
                <span class="text-white font-bold text-xl">Stu<span class="text-amber-400">Doc</span></span>
                <p class="text-sm mt-3 leading-relaxed">Оформлення студентських робіт за ДСТУ 8302:2015 і вимогами кафедр.</p>
            </div>

            <div>
                <h3 class="font-semibold text-white mb-4">Контакти</h3>
                <p class="text-sm">Telegram: @studoc_help</p>
                <p class="text-sm mt-1">Час роботи: 10:00–20:00 (Київ)</p>
            </div>

            <div>
                <h3 class="font-semibold text-white mb-4">Документи</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('offer') }}" class="hover:text-amber-400 transition-colors">Оферта</a></li>
                    <li><a href="{{ route('policy') }}" class="hover:text-amber-400 transition-colors">Політика обробки даних</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-6 text-center text-sm text-gray-600">
            &copy; {{ date('Y') }} StuDoc — усі права захищено
        </div>

    </div>
</footer>
