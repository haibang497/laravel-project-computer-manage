<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        return view('profile.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'full_name'=>'required',
            'address'=>'required',
            'birthday'=>'required'
        ]);
        DB::table('profiles')->insert([
            'user_id'=>$request->user_id,
            'full_name'=>$request->full_name,
            'address'=>$request->address,
            'birthday'=>$request->birthday
        ]);
        return back()->with('success', 'Add success');
    }

    public function show($id)
    {
        $profile = DB::table('profiles')->where('user_id', $id)->first();
        return View('profile.show', ['profile' => $profile]);
    }


    public function edit($id)
    {
        $profile = DB::table('profiles')->where('user_id', $id)->first();
        return View('profile.edit', ['profile' => $profile]);
    }

    public function update(Request $request, $id)
    {
        $profile = new Profile();
        $profile->full_name = $request->input('full_name');
        $profile->address = $request->input('address');
        $profile->birthday = $request->input('birthday');
        $affected = DB::table('profiles')
            ->where('id', $id)
            ->update(['full_name' => $profile->full_name,
                'address' => $profile->address,
                'birthday' => $profile->birthday
            ]);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
