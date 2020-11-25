<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
}
