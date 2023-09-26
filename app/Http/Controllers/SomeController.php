<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\merchants;
use App\Models\Order;
use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function showHomepage()
    {
        $merchants = merchants::all();
        $products = Product::all();
        // $orders = Order::all();
        return view('welcome', ['products' => $products, 'merchants' => $merchants,]);
    }
}

