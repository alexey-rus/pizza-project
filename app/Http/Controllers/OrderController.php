<?php

namespace App\Http\Controllers;

use App\Order;
use App\Http\Requests\CreateOrder;

class OrderController extends Controller
{


    public function create(CreateOrder $request)
    {
        $requestData = $request->validated();
var_dump($requestData);die();
        return response()->json(
            [

            ]
        );

    }

}