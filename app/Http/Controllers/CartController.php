<?php

namespace App\Http\Controllers;

use App\Product;

class CartController extends Controller
{
    protected function _getCart()
    {
        return [
            'rows'     => \Cart::getContent()->sort(),
            'subTotal' => \Cart::getSubTotal(),
            'isEmpty'  => \Cart::isEmpty()
        ];
    }

    public function add(Product $product)
    {
        \Cart::add([
            'id'              => $product->id,
            'name'            => $product->name,
            'price'           => $product->price,
            'quantity'        => 1,
            'attributes'      => [],
            'associatedModel' => $product
        ]);
        return response()->json(
            [
                'items'    => \Cart::getContent()->count(),
                'subtotal' => \Cart::getSubTotal(),
                'view'     => view('cart._items', ['cart' => $this->_getCart()])->render(),
            ]
        );

    }

    public function update(int $itemId)
    {
        \Cart::update($itemId, [
            'quantity' => [
                'relative' => false,
                'value'    => request('quantity')
            ],
        ]);
        return response()->json(
            [
                'items'          => \Cart::getContent()->count(),
                'subtotal'       => \Cart::getSubTotal(),
                'itemPriceTotal' => \Cart::get($itemId)->getPriceSum(),
            ]
        );

    }

    public function remove(int $itemId)
    {
        \Cart::remove($itemId);
        return response()->json(
            [
                'items'    => \Cart::getContent()->count(),
                'subtotal' => \Cart::getSubTotal(),
            ]
        );
    }
}