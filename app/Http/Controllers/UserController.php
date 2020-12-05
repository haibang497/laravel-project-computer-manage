<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return View('user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'full_name'=>'required',
            'password'=>'required',
            'email'=>'required',
            'address'=>'required',
            'birthday'=>'required'
        ]);
        DB::table('users')->insert([
            'name'=>$request->name,
            'full_name'=>$request->full_name,
            'password'=>$request->password,
            'email'=>$request->email,
            'address'=>$request->address,
            'birthday'=>$request->birthday
        ]);
        return back()->with('success', 'Add success');
    }

    public function show($id)
    {
        $user=DB::table('users')->find($id);
        return View('user.show', ['user'=>$user]);
    }

    public function edit($id)
    {
        $user=DB::table('users')->where('id', $id)->first();
        return view('user.edit', ['users'=>$user]);
    }
    public function update(Request $request, $id)
    {
        $user = new User();
        $user->full_name = $request->input('full_name');
        $user->address = $request->input('address');
        $user->birthday = $request->input('birthday');
        $affected = DB::table('users')
            ->where('id', $id)
            ->update([
                'full_name' => $user->full_name,
                'address' => $user->address,
                'birthday' => $user->birthday
            ]);
        return back()->with('success', 'Update Success');
    }
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back()->with('success', 'Delete Successfully');
    }

    public function getOrder($id)
    {
        $order=User::find($id)->order;
        return $order;
    }
}
