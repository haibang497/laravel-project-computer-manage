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
           'productname'=>'required',
            'brand'=>'required',
            'price'=>'required',
            'dayGet'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png,xlx,xls,pdf|max:2048',
            'category_id'=>'required'
        ]);
        DB::table('computers')->insert([
            'productname'=>$request->productname,
            'brand'=>$request->brand,
            'price'=>$request->price,
            'dayGet'=>$request->dayGet,
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
//        $computer = new Computer();
        $computer = Computer::find($id);
        $computer->productname = $request->input('productname');
        $computer->brand = $request->input('brand');
        $computer->price = $request->input('price');
        $computer->dayGet = $request->input('dayGet');

        if ($request->file()) {
            $fileName = $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
            //tham số thứ 3 là chỉ lưu trên disk 'public', tham số thứ 1:  lưu trong thư mục 'uploads' của disk 'public'
            $computer->image = '/storage/' . $filePath;
            // $filepath='uploads/'+$fileName --> $profile->avatar = 'storage/uploads/tenfile --> đường dẫn hình trong thư mục public
        }

        $computer->save();
        return back()->with('success', 'Update Success')->with('file', $fileName);
    }
    public function destroy($id)
    {
        DB::table('computers')->where('id', $id)->delete();
        return back()->with('success', 'Delete Successfully');
    }
}
