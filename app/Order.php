<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Darryldecode\Cart\CartCollection;
use Illuminate\Support\Str;

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

    public function save(array $options = [])
    {
        if (!$this->exists) {
            $this->token = $this->getRandomToken();
        }
        parent::save($options);
    }

    public function getRandomToken()
    {
        do {
            $token = Str::random(8);
        } while (self::firstWhere('token', $token));
        return $token;
    }
}
