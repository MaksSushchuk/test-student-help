<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Http;

class TelegramNotifier
{
    private const WORK_TYPE_LABELS = [
        'coursework' => 'Курсова робота',
        'diploma'    => 'Дипломна (бакалавр)',
        'master'     => 'Магістерська',
        'other'      => 'Інше',
    ];

    private const CONTACT_TYPE_LABELS = [
        'tg'    => 'Telegram',
        'phone' => 'Телефон',
    ];

    public function notifyNewOrder(Order $order): void
    {
        $token  = config('services.telegram.token');
        $chatId = config('services.telegram.chat_id');

        $fileUrl      = $order->file_path ? route('orders.file', $order) : '—';
        $deadline     = $order->deadline?->format('d.m.Y') ?? '—';
        $workLabel    = self::WORK_TYPE_LABELS[$order->work_type]    ?? $order->work_type;
        $contactLabel = self::CONTACT_TYPE_LABELS[$order->contact_type] ?? $order->contact_type;

        $text = "🆕 <b>Нове замовлення #{$order->id}</b>\n\n"
            . '<b>Імʼя:</b> ' . e($order->name) . "\n"
            . '<b>Контакт:</b> ' . e($order->contact_value) . " ({$contactLabel})\n"
            . "<b>Тип:</b> {$workLabel}\n"
            . '<b>ВИШ:</b> ' . e($order->university ?? '—') . "\n"
            . "<b>Дедлайн:</b> {$deadline}\n"
            . '<b>Коментар:</b> ' . e($order->comment ?? '—') . "\n"
            . "<b>Файл:</b> {$fileUrl}";

        Http::post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id'    => $chatId,
            'text'       => $text,
            'parse_mode' => 'HTML',
        ])->throw();
    }
}
