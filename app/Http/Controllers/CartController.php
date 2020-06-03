<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\CartCondition;
class CartController extends Controller
{


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

    public function checkout()
    {
        $deliveryCost = config('shop.delivery_cost');
        $condition = new CartCondition([
            'name'   => 'Shipping cost',
            'type'   => 'shipping',
            'target' => 'total',
            'value'  => $deliveryCost,
            'order'  => 1
        ]);
        \Cart::condition($condition);

        $cart = $this->_getCart();

        $cart['total'] = \Cart::getTotal();

        return view('cart.checkout', compact('cart', 'deliveryCost'));

    }
}