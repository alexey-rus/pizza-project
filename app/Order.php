<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Darryldecode\Cart\CartCollection;
class Order extends Model
{

    protected $guarded = ['is_paid'];

    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function addProducts(CartCollection $products)
    {
        foreach ($products as $product) {
            $this->products()->create(['product_id' => $product->id, 'quantity' => $product->quantity]);
        }
    }
}
