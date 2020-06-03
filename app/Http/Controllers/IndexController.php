<?php

namespace App\Http\Controllers;
use App\Category;


class IndexController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $cart = $this->_getCart();

        return view('index', compact('categories', 'cart'));
    }
}