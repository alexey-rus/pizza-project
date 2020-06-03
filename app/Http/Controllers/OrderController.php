<?php

namespace App\Http\Controllers;

use App\Order;
use App\Http\Requests\CreateOrder;

class OrderController extends Controller
{


    public function create(CreateOrder $request)
    {
        if (\Cart::isEmpty())
            abort(400, 'Cart is empty');

        $requestData = $request->validated();
        $requestData['total_amount'] = \Cart::getTotal();
        $order = Order::create($requestData);
        $order->addProducts(\Cart::getContent());
        \Cart::clear();

        return response()->json(
            [
                'order_token' => $order->token,
            ]
        );

    }

    public function show(string $token)
    {
        $order = Order::where('token', '=', $token)->firstOrFail();
        return view('order.show', compact('order'));
    }

}