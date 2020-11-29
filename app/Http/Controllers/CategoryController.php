<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {
        $cates=DB::table('categories')->get();
        return view('category.showCat',['cates'=>$cates]);
    }
    public function create()
    {
        return view('category.addCat');
    }

    public function addCate(Request $request)
    {
        $request->validate([
           'name' =>'required',
            'description'=>'required'
        ]);
        DB::table('categories')->insert([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return back()->with('success', 'Add successfully');
    }

    public function getProductFromCate($id)
    {
        $computers=Category::find($id)->computers;
        return $computers;
    }

    public function show($id)
    {
        $cate_product=Computer::where('category_id', $id)->get();
        return view('category.showProduct', ['cate_product'=>$cate_product]);
    }

    public function edit($id)
    {
        $category=DB::table('categories')->where('id', $id)->first();
        return View('category.edit', ['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $category=new Category();
        $category->name=$request->input('name');
        $category->description=$request->input('description');
        $affected = DB::table('categories')
            ->where('id', $id)
            ->update([
                'name'=>$category->name,
                'description'=>$category->description
            ]);
        return back()->with('success', 'Update Success');
    }

    public function destroy($id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return back()->with('success', 'Delete Successfully');
    }
}
