<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class AdminController extends Controller
{
    public function history() {
        $orders = Order::all();
        return view('admin', compact('orders'));
    }  
}
