<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        $oredrCount = Order::where('user_id', auth()->id())->count();
        return view('user.dashboard',  compact('oredrCount'));
    }

    public function orders(Request $request)
    {
        $category = Category::where('status', 1)->get();
        $orders = Order::join('users','orders.user_id', 'users.id')
        ->join('categories', 'orders.category_id', 'categories.id')
        ->select('orders.*', 'users.name as user_name', 'categories.name as category_name')
        ->where('orders.user_id', Auth::user()->id)
        ->get();
        return view('user.order.orders', compact('category', 'orders'));
    }

    public function orders_post(Request $request)
    {
        if($request->type != ""){
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->category_id = $request->type;
            $order->subcribe = $request->subscribe;
            $order->save();
            return back();
        }
    }
}
