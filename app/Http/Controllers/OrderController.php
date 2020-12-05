<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
//        $orders=DB::table('orders')->join('users', 'orders.user_id', '=', 'users.id')
//            ->select('orders.id', 'orders.title', 'orders.dayCreate', 'orders.status', 'users.name')->get();
        $orders=Order::all();
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
//        $order=DB::table('users')
//            ->join('orders', 'users.id', '=', 'orders.user_id')
//            ->join('computer_order', 'orders.id', '=', 'computer_order.order_id')
//            ->join('computers', 'computer_order.computer_id', '=', 'computers.id')
//            ->select('orders.*', 'users.name', 'computers.productname', 'computers.brand', 'computers.price', 'computers.dayGet')
//            ->where('orders.id', $id)->first();
        $order=Order::find($id)->first();
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
        DB::table('orders')->where('id', $id)->delete();
        return back()->with('success', 'Delete Successfully');
    }

    public function getUser($id)
    {
        $user=Order::find($id)->user;
        return $user;
    }
}
