<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data_profile = \App\Profile::all();
        return view('profile',['data_profile' => $data_profile]);
    }

    public function new()
    {
        $data_profile = \App\Profile::all();
        return view('new');
    }

    public function tambah(Request $request)
    {
        \App\Profile::create($request->all());
        return redirect('profile');
    }

    public function edit($id)
    {
        $profile = \App\Profile::find($id);
        return view('edit',['profile' => $profile]);
    }

    public function update(Request $request,$id)
    {
        $profile = \App\Profile::find($id);
        $profile->update($request->all());
        return redirect('profile');
    }

    public function hapus($id)
    {
        $profile = \App\Profile::find($id);
        $profile->delete($profile);
        return redirect('profile');
    }

}
