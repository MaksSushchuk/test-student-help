# StuDoc MVP — План для Claude Code

> Цей файл одночасно і брифінг проєкту, і план роботи. Зберігай його як `CLAUDE.md` в корені проєкту після Фази 0 — Claude Code підхопить його контекстом у наступних сесіях.

---

## 1. Контекст проєкту

Сайт-візитка для послуги оформлення дипломних, курсових і магістерських робіт за методикою вишу (ДСТУ 8302:2015 + специфіка кафедр).

**Цільова аудиторія:** українські студенти 4–6 курсу.

**Бізнес-флоу:** студент заповнює форму на сайті → власнику приходить нотифікація в Telegram → власник зв'язується зі студентом → узгоджують деталі і ціну → студент платить на банку Monobank → власник виконує і віддає роботу.

**Що сайт робить:** показує послуги, приймає заявки, шле нотифікації власнику.

**Що сайт НЕ робить:** не обробляє оплати, не має особистого кабінету, не автоматизує комунікацію з клієнтом, не відстежує статуси.

**Власник:** один розробник, він же виконавець.

---

## 2. Стек і обмеження

**Стек:**
- PHP 8.3, Laravel 11
- Blade-templates (БЕЗ Inertia, БЕЗ Livewire)
- Tailwind CSS 3
- Alpine.js для дрібної інтерактивності
- SQLite (один файл — `database/database.sqlite`)
- Vite для збірки фронтенда
- Telegram Bot API для нотифікацій
- Production: Hetzner Cloud CX22, Ubuntu 24.04, nginx, certbot

**Жорсткі обмеження — НЕ робити:**
- Filament, Nova, будь-яку готову адмінку
- Тести (це візитка, не критичний сервіс)
- Docker
- Особистий кабінет, реєстрацію, ролі
- Онлайн-оплати, інтеграцію з LiqPay/Fondy/Stripe
- Багатомовність — тільки українська
- Блог, відгуки, портфоліо
- PostgreSQL/MySQL — SQLite вистачить з 100x запасом
- Зайві JS-бібліотеки (jQuery, lodash, framer-motion тощо)

Якщо в процесі здається що "було б добре додати X" — не додавай. Запиши в `IDEAS.md` для майбутнього.

---

## 3. Code conventions

- PSR-12, прогнати Laravel Pint перед коммітом (`./vendor/bin/pint`)
- Single-action invokable controllers де одна дія (`HomeController`, `OrderStoreController`)
- Валідація — через FormRequest, не в контролері
- Логіка — у сервісних класах (`app/Services`)
- Поля БД — англійською (`name`, не `imya`)
- Коментарі тільки де неочевидно. Без описів типу "// перевіряємо чи юзер існує"
- Секрети — тільки через `.env`, ніяких хардкодів

---

## 4. Структура проєкту

```
app/
  Http/
    Controllers/
      HomeController.php          (лендинг)
      OrderStoreController.php    (приймає форму)
      OrderListController.php     (адмін-список)
      OrderFileController.php     (віддача файлів за basic auth)
      ThanksController.php
      LegalController.php         (оферта і політика)
      SitemapController.php
    Requests/
      StoreOrderRequest.php
    Middleware/
      BasicAuth.php
  Models/
    Order.php
  Services/
    TelegramNotifier.php
resources/
  views/
    layouts/
      app.blade.php
    pages/
      home.blade.php
      thanks.blade.php
      offer.blade.php
      policy.blade.php
      orders.blade.php
    partials/
      hero.blade.php
      services.blade.php
      how-it-works.blade.php
      faq.blade.php
      order-form.blade.php
      footer.blade.php
routes/
  web.php
database/
  migrations/
    *_create_orders_table.php
  database.sqlite
storage/
  app/
    orders/                       (завантажені файли клієнтів)
public/
  robots.txt
  favicon.ico
```

---

## 5. Фази розробки

Кожна фаза — окрема Claude Code сесія. Між фазами: `git commit`, ручне тестування, читання діфу. Не комбінуй фази в одній сесії.

---

### Фаза 0 — Setup (~30 хв)

1. `composer create-project laravel/laravel studoc`
2. Встановити Tailwind CSS 3 + Alpine.js через Vite (офіційний Laravel шлях)
3. Створити `database/database.sqlite` (порожній файл), у `.env` поставити `DB_CONNECTION=sqlite` і прибрати інші DB-змінні
4. Скопіювати цей файл як `CLAUDE.md` в корінь проєкту
5. У `.env.example` додати:
   ```
   TELEGRAM_BOT_TOKEN=
   TELEGRAM_CHAT_ID=
   ADMIN_USERNAME=
   ADMIN_PASSWORD=
   ```
6. У `.gitignore` додати `database/database.sqlite`, `storage/app/orders/`
7. Створити `IDEAS.md` (порожній, для майбутніх ідей)
8. Перший комміт: "Initial Laravel setup"

**DONE коли:** `php artisan serve` показує дефолтну Laravel-сторінку, `npm run dev` стартує без помилок, `php artisan migrate` проходить.

---

### Фаза 1 — Лендинг-розмітка (1.5–2 год)

**Сторінки і роути:**
- `GET /` → `HomeController` → `pages.home`

**Layout `layouts/app.blade.php`:**
- DOCTYPE, lang="uk"
- Meta charset, viewport, title (через `@yield('title')` з дефолтом), description (через `@yield('description')`)
- OG-теги (`og:title`, `og:description`, `og:type=website`, `og:url`, `og:locale=uk_UA`)
- Tailwind через Vite, шрифт Inter через bunny.net (`https://fonts.bunny.net/css?family=inter:400,500,600,700`)
- Favicon link
- Slot для контенту

**Партіали:**

`hero.blade.php` — заголовок (h1), підзаголовок (1–2 речення про що сервіс), CTA-кнопка "Замовити" зі скролом до `#order` через `data-scroll-to`. Без картинок, тільки текст.

`services.blade.php` — секція з трьома картками:
- Курсова робота — від 200 грн
- Дипломна (бакалавр) — від 400 грн
- Магістерська — від 600 грн

Під картками — рядок "Презентація до диплому: +150 грн. Терміновість до 24 год: +50%."

`how-it-works.blade.php` — 4 пронумеровані кроки:
1. Заповніть форму на сайті
2. Зв'яжемось з вами в Telegram протягом 1–2 годин
3. Узгодимо деталі, ціну і термін
4. Отримаєте оформлену роботу в обумовлений час

`faq.blade.php` — accordion на Alpine.js, 5 питань-заглушок (реальні тексти власник дасть пізніше). Кожен item — `<div x-data="{ open: false }">`, заголовок з `@click="open = !open"`, відповідь з `x-show="open" x-collapse`.

`order-form.blade.php` — поки порожня секція з ID `#order` і заголовком "Залиште заявку". Сама форма — у Фазі 2.

`footer.blade.php` — три колонки: контакти (заглушка), посилання (Оферта, Політика обробки даних), копірайт `© {{ date('Y') }} StuDoc`.

**Дизайн:**
- Основний колір — `#2563eb` (Tailwind `blue-600`)
- Фон — `#ffffff`, акценти — `#f3f4f6` (gray-100), `#1f2937` (gray-800) для тексту
- Mobile-first, перевірка на 360px ширини
- Без анімацій крім простих hover-станів і accordion
- Без stockових картинок

**DONE коли:** `/` показує всі секції, виглядає прийнятно на мобільному (360px) і десктопі (1440px), FAQ розкривається/закривається, кнопка "Замовити" скролить до секції форми.

---

### Фаза 2 — Форма + бекенд + Telegram (2–3 год)

**Міграція `orders`:**
```
id              bigIncrements
name            string(100)
contact_type    string(10)         // 'tg' | 'phone'
contact_value   string(100)
work_type       string(20)         // 'coursework'|'diploma'|'master'|'other'
university      string(200) null
deadline        date null
comment         text null
file_path       string(500) null
status          string(20) default 'new'
ip              string(45) null
user_agent      string(500) null
timestamps
```

**Модель `Order`:** `$fillable`, casts для `deadline => 'date'`.

**`StoreOrderRequest` правила:**
- `name`: required|string|min:2|max:100
- `contact_type`: required|in:tg,phone
- `contact_value`: required|string|max:100
- `work_type`: required|in:coursework,diploma,master,other
- `university`: nullable|string|max:200
- `deadline`: nullable|date|after:today
- `comment`: nullable|string|max:2000
- `file`: nullable|file|mimes:doc,docx,pdf,txt|max:20480
- `website`: nullable|max:0  ← honeypot, бот заповнює

Custom messages українською для всіх полів.

**`OrderStoreController` (invokable):**
1. Перевірити rate limit: 5 спроб з IP за годину (Laravel RateLimiter, ключ — `'order:' . $request->ip()`)
2. Валідація через FormRequest
3. Якщо `website` непорожнє — мовчки повернути 200 (бот не повинен знати)
4. Зберегти файл (якщо є) у `storage/app/orders/{Y-m-d}/{uuid}.{ext}`
5. Створити запис в БД, запам'ятати IP і user agent
6. Викликати `app(TelegramNotifier::class)->notifyNewOrder($order)` — у try/catch, фейл нотифікації не валить запит, тільки `Log::error`
7. Редірект на `route('thanks')`

**`TelegramNotifier`:**
```php
public function notifyNewOrder(Order $order): void
```
- Бере токен і chat_id з конфігу (`config/services.php` → `telegram`)
- Формує текст:
  ```
  🆕 Нове замовлення #{id}
  Імʼя: {name}
  Контакт: {contact_value} ({contact_type})
  Тип: {work_type_label}
  Виш: {university}
  Дедлайн: {deadline}
  Коментар: {comment}
  Файл: {file_url або '—'}
  ```
- Надсилає через `Http::post('https://api.telegram.org/bot{token}/sendMessage', [...])`
- `parse_mode: 'HTML'`, текст екранований через `e()`
- Файл-URL — `route('orders.file', $order)` (захищений basic auth)

**Сторінка `/thanks`:**
- Простий статичний контент: "Дякуємо! Зв'яжемось з вами протягом 1–2 годин у робочий час (10:00–20:00 Київ)."
- Кнопка "На головну"

**Форма у `order-form.blade.php`:**
- `<form method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data">`
- CSRF, всі поля з лейблами і помилками валідації під ними (з `$errors`)
- Honeypot — `<input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">`
- Радіокнопки `contact_type` (Telegram / Телефон), placeholder для `contact_value` міняється через Alpine
- `work_type` — `<select>` з опціями
- Кнопка submit з Alpine станом `loading`: `x-data="{ loading: false }"`, `@submit="loading = true"`, текст `<span x-show="!loading">Відправити</span><span x-show="loading">Відправляється...</span>`

**DONE коли:**
- Заповнюєш форму, відправляєш — приходить нотифікація в Telegram з усіма даними
- В БД з'явився рядок
- Файл збережений у `storage/app/orders/...`
- 6-та спроба з того самого IP за годину → 429
- Без CSRF → 419
- Невалідні дані → редірект назад з помилками під полями
- Заповнення honeypot → жодного запису в БД, жодної нотифікації, користувач бачить /thanks

---

### Фаза 3 — Юр.сторінки + адмінка + SEO (1.5 год)

**`/oferta` і `/policy`:**
- Контролер `LegalController` з двома методами або два invokable
- Сторінки `pages.offer` і `pages.policy`
- Контент — заглушки з реальною структурою розділів. Для оферти: "1. Загальні положення", "2. Предмет договору", "3. Вартість послуг", "4. Порядок надання послуг", "5. Права і обов'язки", "6. Відповідальність", "7. Контактна інформація". Для політики: "1. Які дані ми збираємо", "2. Мета обробки", "3. Термін зберігання", "4. Передача третім особам", "5. Права суб'єкта даних", "6. Контакти".
- Під кожним заголовком — Lorem ipsum український ("Тут буде текст розділу. Власник додасть пізніше.")
- Стилізація — простий typography, max-width контейнер, читабельний текст

**`/orders` — адмінка:**
- Middleware `BasicAuth` перевіряє HTTP Basic Auth з `ADMIN_USERNAME` і `ADMIN_PASSWORD` з `.env`. При невдачі — `Response::make('Auth required', 401, ['WWW-Authenticate' => 'Basic'])`
- `OrderListController` (invokable) — повертає `pages.orders` з `Order::latest()->get()`
- View — таблиця: ID, дата (`d.m.Y H:i`), ім'я, контакт (тип + значення), тип роботи (з міткою), виш, дедлайн, файл (посилання якщо є). Сортування — нові згори. Без пагінації.
- `/orders/{order}/file` — `OrderFileController`, теж за basic auth, віддає файл через `Storage::download($order->file_path)`

**SEO:**
- `layouts/app.blade.php` — `<title>@yield('title', 'StuDoc — оформлення робіт за ДСТУ')</title>`, meta description через `@yield('description', '...')`, OG-теги
- На головній: `@section('title', 'StuDoc — оформлення дипломних і курсових робіт за ДСТУ 8302:2015')`, description ~155 символів
- `routes/web.php`: `Route::get('/sitemap.xml', SitemapController::class)`
- `SitemapController` (invokable): генерує валідний XML з трьох URL — `/`, `/oferta`, `/policy`. Response з `Content-Type: application/xml`
- `public/robots.txt`:
  ```
  User-agent: *
  Allow: /
  Disallow: /orders
  Sitemap: {APP_URL}/sitemap.xml
  ```
- Favicon — згенерувати простий SVG з літерою S на синьому квадраті, конвертнути в .ico (32x32). Або використати https://favicon.io/favicon-generator/

**DONE коли:**
- `/oferta` і `/policy` відкриваються, тексти-заглушки на місці, посилання з футера працюють
- `/orders` без логіну — браузерне віконце Basic Auth. З логіном — таблиця замовлень.
- `/orders/1/file` за basic auth віддає файл клієнта (404 якщо немає файла)
- View source головної містить title, description, og-теги
- `/sitemap.xml` віддає валідний XML
- `/robots.txt` віддає текст з твоїм APP_URL
- Favicon показується у вкладці браузера

---

### Фаза 4 — Deploy (1.5–2 год)

Цю фазу робимо разом у звичайному чаті, не в Claude Code — багато ручних кроків з сервером.

Послідовність:
1. Купити домен на imena.ua
2. Hetzner Cloud → Create Server → CX22, Ubuntu 24.04, locality Helsinki, SSH-ключ
3. A-запис домена → IP сервера
4. SSH на сервер: оновлення, nginx, PHP 8.3 + потрібні extensions, Composer, Node 20, Git
5. Створити non-root deploy-юзера, додати йому SSH-ключ
6. Згенерувати SSH-ключ на сервері, додати як deploy key в GitHub
7. `git clone`, `composer install --no-dev --optimize-autoloader`, `npm ci`, `npm run build`
8. `.env` з production-значеннями, `php artisan key:generate`, `php artisan migrate --force`
9. Права: `chown -R www-data:deploy storage bootstrap/cache`, `chmod -R 775 storage bootstrap/cache`
10. nginx vhost, `nginx -t`, reload
11. Certbot для SSL: `certbot --nginx -d studoc.com.ua -d www.studoc.com.ua`
12. Кешування Laravel: `php artisan config:cache route:cache view:cache`
13. Crontab для `schedule:run` (на майбутнє)
14. Перевірка: форма → Telegram, /orders за паролем, https працює

---

## 6. Що готує власник паралельно з кодом

1. **Тексти лендингу** — hero-заголовок, підзаголовок, опис послуг, FAQ (5–7 питань: "Чи це не плагіат?", "Як швидко?", "Що якщо не сподобається?", "Які виші?", "Чи дотримуєтесь ДСТУ?")
2. **Текст оферти** — на основі шаблону, з реальним ім'ям/контактами
3. **Текст політики обробки даних** — на основі шаблону
4. **Telegram-бот** — створити через @BotFather, отримати токен. Свій chat_id — через @userinfobot
5. **Banka Monobank** — створити (для прийому оплат у майбутньому)
6. **Назва домену** — підтвердити, перевірити доступність на imena.ua

---

## 7. Як працювати з Claude Code по цьому плану

**Один сеанс = одна фаза.** Не комбінувати.

Початок сеансу:
> Прочитай CLAUDE.md і виконай Фазу N. Не виходь за рамки фази, не додавай нічого з `IDEAS.md` чи позасценарних покращень. Якщо щось здається неоднозначним — спершу запитай у мене, не вгадуй.

Після виконання:
1. `git diff` — прочитати все, що Claude Code наробив
2. `php artisan serve` + `npm run dev` — запустити локально, перевірити критерії DONE з фази
3. Якщо щось не працює — попросити Claude Code пофіксити, **не починаючи нової фази**
4. Коли DONE — `git add . && git commit -m "Phase N: ..."` і нова сесія

**Якщо Claude Code пропонує додати щось не з плану** (тести, Docker, додаткові пакети, "красивіший дизайн", додаткові поля у формі) — зупинити і сказати: "це не входить в MVP цієї фази, не роби". Це теж тренування — тримати скоуп.

**Якщо застрягаєш** — пишеш мені в чат, разом розбираємо.
