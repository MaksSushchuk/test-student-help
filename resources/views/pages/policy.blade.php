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
            <p class="text-sm text-gray-400 mb-10">Редакція від {{ date('d.m.Y') }}</p>

            @php
            $sections = [
                '1. Які дані ми збираємо',
                '2. Мета обробки',
                '3. Термін зберігання',
                '4. Передача третім особам',
                '5. Права суб\'єкта даних',
                '6. Контакти',
            ];
            @endphp

            <div class="space-y-8">
                @foreach ($sections as $section)
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">{{ $section }}</h2>
                    <p class="text-gray-500 leading-relaxed">Тут буде текст розділу. Власник додасть пізніше.</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
