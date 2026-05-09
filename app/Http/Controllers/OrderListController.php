<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderListController extends Controller
{
    private const WORK_TYPE_LABELS = [
        'coursework' => 'Курсова',
        'diploma'    => 'Дипломна',
        'master'     => 'Магістерська',
        'other'      => 'Інше',
    ];

    private const CONTACT_TYPE_LABELS = [
        'tg'    => 'Telegram',
        'phone' => 'Телефон',
    ];

    public function __invoke()
    {
        return view('pages.orders', [
            'orders'             => Order::latest()->get(),
            'workTypeLabels'     => self::WORK_TYPE_LABELS,
            'contactTypeLabels'  => self::CONTACT_TYPE_LABELS,
        ]);
    }
}
