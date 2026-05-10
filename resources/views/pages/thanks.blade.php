@extends('layouts.app')

@section('title', 'Дякуємо за заявку — StuDoc')
@section('description', "Ваша заявка прийнята. Зв'яжемось з вами найближчим часом.")

@section('content')
<main class="min-h-screen bg-gray-50 flex items-center justify-center px-4 py-16">
    <div class="max-w-md w-full text-center">

        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
            </svg>
        </div>

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Дякуємо! Заявка прийнята.</h1>

        <p class="text-gray-600 leading-relaxed mb-4">
            Зв'яжемось з тобою в Telegram протягом 1–2 годин у робочий час<br>
            <span class="font-semibold text-gray-800">(10:00–20:00, Київ)</span>.
        </p>

        <p class="text-gray-600 leading-relaxed mb-4">
            Якщо заявка залишена пізно ввечері або у вихідні — відповімо першим ділом у наступний робочий день.
        </p>

        <p class="text-sm text-gray-400 leading-relaxed mb-8">
            Перевір, що в Telegram у тебе не вимкнені повідомлення від нових контактів.
        </p>

        <a
            href="{{ route('home') }}"
            class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-xl transition-colors"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            На головну
        </a>

    </div>
</main>
@endsection
