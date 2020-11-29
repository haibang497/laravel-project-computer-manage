<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComputerController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        return view('computer.create');
    }
    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required',
            'brand'=>'required',
            'price'=>'required',
            'dayGet'=>'required',
            'image'=>'required',
            'category_id'=>'required'
        ]);
        DB::table('computers')->insert([
            'name'=>$request->name,
            'brand'=>$request->brand,
            'price'=>$request->price,
            'dayGet'=>$request->dayGet,
            'image'=>$request->image,
            'category_id'=>$request->category_id
        ]);
        return back()->with('success', 'Add successfully');
    }
    public function show($id)
    {
        $computer = DB::table('computers')->where('id', $id)->first();
        return View('computer.detail', ['computer' => $computer]);
    }
    public function edit($id)
    {
        $computer = DB::table('computers')->where('id', $id)->first();
        return View('computer.edit', ['computer' => $computer]);
    }
    public function update(Request $request, $id)
    {
        $computer = new Computer();
        $computer->name = $request->input('name');
        $computer->brand = $request->input('brand');
        $computer->price = $request->input('price');
        $computer->dayGet = $request->input('dayGet');
        $computer->status = $request->input('image');
        $computer->category_id = $request->input('category_id');
        $affected = DB::table('computers')
            ->where('id', $id)
            ->update(['name' => $computer->name,
                'brand' => $computer->brand,
                'price' => $computer->price,
                'dayGet' => $computer->dayGet,
                'image' => $computer->image,
                'category_id'=>$computer->category_id
            ]);
        return back()->with('success', 'Update Success');
    }
    public function destroy($id)
    {
        DB::table('computers')->where('id', $id)->delete();
        return back()->with('success', 'Delete Successfully');
    }
}
