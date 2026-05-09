<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class OrderFileController extends Controller
{
    public function __invoke(Order $order)
    {
        if (!$order->file_path || !Storage::exists($order->file_path)) {
            abort(404);
        }

        return Storage::download($order->file_path);
    }
}
