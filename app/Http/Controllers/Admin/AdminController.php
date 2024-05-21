<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        if(Auth::user()->role == "founder"){
            $usersCount = User::where('role','user')->count();
            $oredersCount = Order::all()->count();
            return view('dashboard', compact('usersCount', 'oredersCount'));
        }else{
            return redirect(route('user.dashboard'));
        }

    }
    public function showUsers(Request $request)
    {
        if (Auth::user()->role == "founder") {
            $users = User::where('role', 'user')->get();
            return view('admin.users.users_all',[
                'user' => $request->user(),
                'users'=> $users
            ]);
        }else {
            abort(401);
        }
    }

    public function show_category(Request $request)
    {
        if (Auth::user()->role == "founder") {
            $users = Category::all();
            return view('admin.category.category_all',[
                'user' => $request->user(),
                'users'=> $users
            ]);
        }else {
            abort(401);
        }
    }

    public function category_post(Request $request)
    {
        if($request->name != ""){
            $category = new Category();
            $category->name = $request->name;
            $category->status = $request->status;
            $category->save();
            return back();
        }
    }

    public function show_orders(Request $request)
    {
        if (Auth::user()->role == "founder") {
            $users = Order::join('users','orders.user_id', 'users.id')
            ->join('categories', 'orders.category_id', 'categories.id')
            ->select('orders.*', 'users.name as user_name', 'users.phone as user_phone', 'categories.name as category_name')
            ->get();
            return view('admin.orders.orders_all',[
                'user' => $request->user(),
                'users'=> $users
            ]);
        }else {
            abort(401);
        }
    }
}
