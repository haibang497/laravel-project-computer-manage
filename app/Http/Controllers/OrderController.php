<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders=DB::table('orders')->get();
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
        $order=DB::table('orders')->where('id', $id)->first();
        return view('order.detail', ['order'=>$order]);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
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
