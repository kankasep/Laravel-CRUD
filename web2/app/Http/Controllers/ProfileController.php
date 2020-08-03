<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Profile;
use PDF;

class ProfileController extends Controller
{
    public function index()
    {
        $data_profile = Profile::all();
        return view('profile', ['data_profile' => $data_profile]);
    }

    public function cetak_pdf()
    {
        $data_profile = Profile::all();

        $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadview('profile_pdf', ['data_profile' => $data_profile])->setPaper('a4', 'landscape');
        return $pdf->download('LAPORAN MAHASISWA');
    }

    public function new()
    {
        $data_profile = Profile::all();
        return view('new');
    }

    public function tambah(Request $request)
    {
        Profile::create($request->all());
        Session::flash('sukses', 'Data berhasil di tambah');
        return redirect('profile');
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('edit', ['profile' => $profile]);
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        $profile->update($request->all());
        Session::flash('sukses', 'Data berhasil di edit');
        return redirect('profile');
    }

    public function hapus($id)
    {
        $profile = Profile::find($id);
        $profile->delete($profile);
        Session::flash('sukses', 'Data berhasil di hapus');
        return redirect('profile');
    }
}
