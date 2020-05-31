<?php

namespace App\Http\Controllers;
use App\Category;


class IndexController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $cart = [
            'rows' => \Cart::getContent()->sort(),
            'subTotal' => \Cart::getSubTotal(),
            'isEmpty' => \Cart::isEmpty()
        ];

        return view('index', compact('categories', 'cart'));
    }
}