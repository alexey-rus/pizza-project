<?php

namespace App\Http\Controllers;

use App\Order;
use App\Http\Requests\CreateOrder;

class OrderController extends Controller
{


    public function create(CreateOrder $request)
    {
        $requestData = $request->validated();
        $requestData['total_amount'] = \Cart::getTotal();
        $order = Order::create($requestData);
        $order->addProducts(\Cart::getContent());
        \Cart::clear();

        return response()->json(
            [
                'order_id' => $order->id
            ]
        );

    }

}