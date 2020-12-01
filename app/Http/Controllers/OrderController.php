<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders=DB::table('orders')->join('users', 'orders.user_id', '=', 'users.id')
            ->select('orders.id', 'orders.title', 'orders.dayCreate', 'orders.status', 'users.name')->get();
        return view('order.show', ['orders'=>$orders]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        $order=DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->select('orders.id', 'orders.title', 'orders.dayCreate', 'orders.status', 'users.name')
            ->where('orders.id', $id)->first();
        return view('order.detail', ['order'=>$order]);
    }
    public function edit($id)
    {
        $order=DB::table('orders')->where('id', $id)->first();
        return view('order.edit', ['order'=>$order]);
    }
    public function update(Request $request, $id)
    {
        $order=new Order();
        $order->status=$request->input('status');
        $affected = DB::table('orders')
            ->where('id', $id)
            ->update(['status'=>$order->status]);
        return back()->with('success', 'Update Success');
    }
    public function destroy($id)
    {
        //
    }

    public function getUser($id)
    {
        $user=Order::find($id)->user;
        return $user;
    }
}
