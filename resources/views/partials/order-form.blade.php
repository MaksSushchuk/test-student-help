<section id="order" class="py-20 px-4 bg-gradient-to-br from-blue-600 to-blue-800">
    <div class="max-w-xl mx-auto">

        <div class="text-center mb-8">
            <span class="inline-block bg-white/15 text-white text-sm font-semibold px-3 py-1 rounded-full mb-4">Залишити заявку</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-white mb-2">Готові розпочати?</h2>
            <p class="text-blue-100 text-sm">Заповніть форму — зв'яжемось у Telegram протягом 1–2 годин у робочий час.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-2xl p-6 sm:p-8">
            <form
                method="POST"
                action="{{ route('orders.store') }}"
                enctype="multipart/form-data"
                x-data="{ loading: false, contactType: '{{ old('contact_type', 'tg') }}' }"
                @submit="loading = true"
            >
                @csrf

                {{-- Honeypot --}}
                <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                {{-- Ім'я --}}
                <div class="mb-5">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Ім'я <span class="text-red-500">*</span>
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Як до вас звертатись?"
                        class="w-full px-4 py-3 rounded-xl border transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent {{ $errors->has('name') ? 'border-red-400 bg-red-50' : 'border-gray-300' }}"
                    >
                    @error('name')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Спосіб зв'язку --}}
                <div class="mb-5">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Спосіб зв'язку <span class="text-red-500">*</span>
                    </label>
                    <div class="flex gap-5 mb-3">
                        <label class="flex items-center gap-2 cursor-pointer select-none">
                            <input
                                type="radio"
                                name="contact_type"
                                value="tg"
                                x-model="contactType"
                                class="text-blue-600 focus:ring-blue-500 w-4 h-4"
                            >
                            <span class="text-sm text-gray-700">Telegram</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer select-none">
                            <input
                                type="radio"
                                name="contact_type"
                                value="phone"
                                x-model="contactType"
                                class="text-blue-600 focus:ring-blue-500 w-4 h-4"
                            >
                            <span class="text-sm text-gray-700">Телефон</span>
                        </label>
                    </div>
                    <input
                        type="text"
                        name="contact_value"
                        value="{{ old('contact_value') }}"
                        :placeholder="contactType === 'tg' ? '@username в Telegram' : '+380 XX XXX XX XX'"
                        class="w-full px-4 py-3 rounded-xl border transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent {{ $errors->has('contact_value') ? 'border-red-400 bg-red-50' : 'border-gray-300' }}"
                    >
                    @error('contact_type')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    @error('contact_value')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Тип роботи --}}
                <div class="mb-5">
                    <label for="work_type" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Тип роботи <span class="text-red-500">*</span>
                    </label>
                    <select
                        id="work_type"
                        name="work_type"
                        class="w-full px-4 py-3 rounded-xl border bg-white transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent {{ $errors->has('work_type') ? 'border-red-400 bg-red-50' : 'border-gray-300' }}"
                    >
                        <option value="" disabled {{ old('work_type') ? '' : 'selected' }}>Оберіть тип</option>
                        <option value="coursework" {{ old('work_type') === 'coursework' ? 'selected' : '' }}>Курсова робота</option>
                        <option value="diploma"    {{ old('work_type') === 'diploma'    ? 'selected' : '' }}>Дипломна (бакалавр)</option>
                        <option value="master"     {{ old('work_type') === 'master'     ? 'selected' : '' }}>Магістерська</option>
                        <option value="other"      {{ old('work_type') === 'other'      ? 'selected' : '' }}>Інше</option>
                    </select>
                    @error('work_type')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Виш --}}
                <div class="mb-5">
                    <label for="university" class="block text-sm font-medium text-gray-700 mb-1.5">
                        ВИШ <span class="text-gray-400 text-xs font-normal">(необов'язково)</span>
                    </label>
                    <input
                        type="text"
                        id="university"
                        name="university"
                        value="{{ old('university') }}"
                        placeholder="КПІ ім. Сікорського, НАУ, КНУ..."
                        class="w-full px-4 py-3 rounded-xl border transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent {{ $errors->has('university') ? 'border-red-400 bg-red-50' : 'border-gray-300' }}"
                    >
                    @error('university')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Дедлайн --}}
                <div class="mb-5">
                    <label for="deadline" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Дедлайн <span class="text-gray-400 text-xs font-normal">(необов'язково)</span>
                    </label>
                    <input
                        type="date"
                        id="deadline"
                        name="deadline"
                        value="{{ old('deadline') }}"
                        min="{{ now()->addDay()->format('Y-m-d') }}"
                        class="w-full px-4 py-3 rounded-xl border transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent {{ $errors->has('deadline') ? 'border-red-400 bg-red-50' : 'border-gray-300' }}"
                    >
                    @error('deadline')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Коментар --}}
                <div class="mb-5">
                    <label for="comment" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Коментар <span class="text-gray-400 text-xs font-normal">(необов'язково)</span>
                    </label>
                    <textarea
                        id="comment"
                        name="comment"
                        rows="3"
                        placeholder="Особливі вимоги кафедри, деталі роботи..."
                        class="w-full px-4 py-3 rounded-xl border transition focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent resize-none {{ $errors->has('comment') ? 'border-red-400 bg-red-50' : 'border-gray-300' }}"
                    >{{ old('comment') }}</textarea>
                    @error('comment')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Файл --}}
                <div class="mb-7">
                    <label for="file" class="block text-sm font-medium text-gray-700 mb-1.5">
                        Файл <span class="text-gray-400 text-xs font-normal">(doc, docx, pdf, txt — до 20 МБ)</span>
                    </label>
                    <input
                        type="file"
                        id="file"
                        name="file"
                        accept=".doc,.docx,.pdf,.txt"
                        class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100 transition"
                    >
                    @error('file')
                        <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Submit --}}
                <button
                    type="submit"
                    :disabled="loading"
                    class="w-full flex items-center justify-center gap-2 bg-amber-400 hover:bg-amber-300 disabled:opacity-70 disabled:cursor-not-allowed text-blue-950 font-bold text-lg px-8 py-4 rounded-xl transition-all"
                >
                    <span x-show="!loading">Відправити</span>
                    <span x-show="loading" class="flex items-center gap-2">
                        <svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                        </svg>
                        Відправляється...
                    </span>
                </button>

            </form>
        </div>
    </div>
</section>
