@extends('layouts.app')

@section('title', 'Політика обробки даних — StuDoc')
@section('description', 'Політика конфіденційності та обробки персональних даних StuDoc.')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4">
    <div class="max-w-3xl mx-auto">

        <a href="{{ route('home') }}" class="inline-flex items-center gap-1.5 text-sm text-blue-600 hover:text-blue-800 mb-8 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
            На головну
        </a>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 sm:p-12">

            <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Політика обробки персональних даних</h1>
            <p class="text-sm text-gray-400 mb-10">Чинна з 9 травня 2026 року</p>

            <div class="space-y-8 text-gray-600 leading-relaxed text-sm sm:text-base">

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">1. Загальні положення</h2>
                    <p class="mb-2">1.1. Ця Політика описує, як StuDoc (далі — Власник) збирає, використовує і захищає персональні дані відвідувачів та клієнтів сайту https://studoc.com.ua.</p>
                    <p class="mb-2">1.2. Обробка персональних даних здійснюється відповідно до Закону України "Про захист персональних даних" від 1 червня 2010 року № 2297-VI.</p>
                    <p>1.3. Користуючись сайтом і надсилаючи заявку через форму, відвідувач підтверджує, що ознайомився з цією Політикою і погоджується з її умовами.</p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">2. Які дані ми збираємо</h2>
                    <p class="mb-2">При заповненні форми замовлення збираємо:</p>
                    <ul class="list-disc list-inside space-y-1 mb-4 ml-2">
                        <li>Ім'я (як ви його вказали)</li>
                        <li>Контактний Telegram або номер телефону</li>
                        <li>Тип роботи, навчальний заклад</li>
                        <li>Бажаний термін виконання</li>
                        <li>Текст коментаря (за наявності)</li>
                        <li>Завантажений файл роботи або методички (за наявності)</li>
                    </ul>
                    <p class="mb-2">Автоматично при відвідуванні сайту:</p>
                    <ul class="list-disc list-inside space-y-1 ml-2">
                        <li>IP-адреса</li>
                        <li>User Agent (тип браузера і пристрою)</li>
                        <li>Час відправки заявки</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">3. Мета обробки даних</h2>
                    <p class="mb-2">Зібрані дані використовуються виключно для:</p>
                    <ul class="list-disc list-inside space-y-1 mb-4 ml-2">
                        <li>Зв'язку з вами щодо вашого замовлення</li>
                        <li>Виконання послуг з оформлення документів</li>
                        <li>Захисту від спаму і автоматизованих заявок</li>
                        <li>Внутрішнього обліку замовлень</li>
                    </ul>
                    <p class="mb-2">Ми <strong>не використовуємо</strong> ваші дані для:</p>
                    <ul class="list-disc list-inside space-y-1 ml-2">
                        <li>Розсилок маркетингових повідомлень</li>
                        <li>Передачі третім особам у комерційних цілях</li>
                        <li>Профілювання чи таргетованої реклами</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">4. Підстава обробки</h2>
                    <p class="mb-2">Підставою для обробки персональних даних є:</p>
                    <ul class="list-disc list-inside space-y-1 ml-2">
                        <li>Згода суб'єкта персональних даних (надається через відправку заявки)</li>
                        <li>Необхідність виконання договору, стороною якого є суб'єкт даних</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">5. Термін зберігання</h2>
                    <p class="mb-2">5.1. Контактні дані замовлення зберігаються протягом 12 місяців з моменту останньої взаємодії.</p>
                    <p class="mb-2">5.2. Завантажені файли робіт видаляються через 7 днів після завершення виконання.</p>
                    <p>5.3. Технічні дані (IP, User Agent) зберігаються 30 днів для цілей безпеки і антиспаму.</p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">6. Передача даних третім особам</h2>
                    <p class="mb-2">Дані можуть оброблятися такими сервісами:</p>
                    <ul class="list-disc list-inside space-y-1 mb-4 ml-2">
                        <li><strong>Telegram</strong> (Telegram Messenger Inc.) — для прийому нотифікацій про замовлення (передається тільки інформація про замовлення, не ваші особисті дані без потреби)</li>
                        <li><strong>Monobank</strong> — при оплаті послуг (передаються тільки реквізити, потрібні для проведення платежу)</li>
                        <li><strong>Хостинг-провайдер</strong> — для технічного зберігання даних на сервері в межах ЄС/України</li>
                    </ul>
                    <p>Ми не передаємо ваші дані будь-яким іншим третім особам без вашої згоди, крім випадків, прямо передбачених законом.</p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">7. Ваші права</h2>
                    <p class="mb-2">Згідно із Законом України "Про захист персональних даних", ви маєте право:</p>
                    <ul class="list-disc list-inside space-y-1 mb-4 ml-2">
                        <li>Знати, які ваші дані обробляються</li>
                        <li>Вимагати виправлення неточних даних</li>
                        <li>Вимагати видалення ваших даних з нашої бази</li>
                        <li>Відкликати згоду на обробку в будь-який момент</li>
                    </ul>
                    <p>Для реалізації цих прав напишіть нам через Telegram @studoc_help або на email studoc_help@gmail.com.</p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">8. Захист даних</h2>
                    <p>Сайт використовує SSL-шифрування для передачі даних. Доступ до бази даних обмежений і захищений паролем. Доступ до фізичного сервера обмежений двофакторною авторизацією.</p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">9. Файли cookies</h2>
                    <p>Сайт використовує тільки технічні cookies, необхідні для роботи (зокрема CSRF-токен Laravel). Маркетингові і аналітичні cookies не встановлюються.</p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">10. Зміни Політики</h2>
                    <p>Ми можемо оновлювати цю Політику. Дата чинної версії вказана зверху сторінки. Суттєві зміни будуть позначені на сайті.</p>
                </div>

                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">11. Контакти</h2>
                    <p class="mb-1">З питань обробки персональних даних:</p>
                    <p class="mb-1">Telegram: @studoc_help</p>
                    <p>Email: studoc_help@gmail.com</p>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
