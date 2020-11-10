<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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
        //$profile = DB::table('profiles')->find($id);
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
