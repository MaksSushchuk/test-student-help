@extends('layouts.app')

@section('title', 'Замовлення — StuDoc Admin')

@section('content')
<div class="min-h-screen bg-gray-50 py-10 px-4">
    <div class="max-w-7xl mx-auto">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-xl font-bold text-gray-900">Замовлення</h1>
                <p class="text-sm text-gray-500 mt-0.5">Всього: {{ $orders->count() }}</p>
            </div>
        </div>

        @if ($orders->isEmpty())
            <div class="bg-white rounded-xl border border-gray-200 p-12 text-center text-gray-400">
                Замовлень ще немає.
            </div>
        @else
            <div class="bg-white rounded-xl border border-gray-200 overflow-x-auto shadow-sm">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50 border-b border-gray-200">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide">#</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide">Дата</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide">Ім'я</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide">Контакт</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide">Тип</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide">Виш</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide">Дедлайн</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide">Файл</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($orders as $order)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3 text-gray-400 font-mono">{{ $order->id }}</td>
                            <td class="px-4 py-3 text-gray-600 whitespace-nowrap">{{ $order->created_at->format('d.m.Y H:i') }}</td>
                            <td class="px-4 py-3 font-medium text-gray-900">{{ $order->name }}</td>
                            <td class="px-4 py-3 text-gray-600">
                                <span class="text-gray-400 text-xs">{{ $contactTypeLabels[$order->contact_type] ?? $order->contact_type }}:</span><br>
                                {{ $order->contact_value }}
                            </td>
                            <td class="px-4 py-3 text-gray-700">{{ $workTypeLabels[$order->work_type] ?? $order->work_type }}</td>
                            <td class="px-4 py-3 text-gray-600">{{ $order->university ?? '—' }}</td>
                            <td class="px-4 py-3 text-gray-600 whitespace-nowrap">
                                {{ $order->deadline ? $order->deadline->format('d.m.Y') : '—' }}
                            </td>
                            <td class="px-4 py-3">
                                @if ($order->file_path)
                                    <a href="{{ route('orders.file', $order) }}" class="text-blue-600 hover:text-blue-800 underline underline-offset-2 text-xs transition-colors">
                                        Завантажити
                                    </a>
                                @else
                                    <span class="text-gray-400">—</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif

    </div>
</div>
@endsection
