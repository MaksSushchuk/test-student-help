<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Services\TelegramNotifier;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class OrderStoreController extends Controller
{
    public function __invoke(StoreOrderRequest $request)
    {
        // Honeypot: bot filled the hidden field — silently redirect
        if ($request->filled('website')) {
            return redirect()->route('thanks');
        }

        $filePath = null;
        if ($request->hasFile('file')) {
            $file     = $request->file('file');
            $dir      = 'orders/' . now()->format('Y-m-d');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs($dir, $filename);
        }

        $order = Order::create([
            'name'          => $request->name,
            'contact_type'  => $request->contact_type,
            'contact_value' => $request->contact_value,
            'work_type'     => $request->work_type,
            'university'    => $request->university,
            'deadline'      => $request->deadline,
            'comment'       => $request->comment,
            'file_path'     => $filePath,
            'ip'            => $request->ip(),
            'user_agent'    => $request->userAgent(),
        ]);

        try {
            app(TelegramNotifier::class)->notifyNewOrder($order);
        } catch (\Throwable $e) {
            Log::error('Telegram notification failed', [
                'order_id' => $order->id,
                'error'    => $e->getMessage(),
            ]);
        }

        return redirect()->route('thanks');
    }
}
