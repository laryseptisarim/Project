<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index_siswa()
    {
        $data_siswa = \App\Siswa::all();
        return view('siswa.index_siswa',['data_siswa' => $data_siswa]);
    }

    public function tambah_siswa()
    {
        return view('siswa.tambah_siswa');
    }

    public function create(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('siswa/edit',['siswa' => $siswa]);
    }

    public function update(Request $request,$id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa ->update($request->all());
        return redirect('/siswa')->with('sukses','Data berhasil diubah!');
    }

    public function delete($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa ->delete();
        return redirect('/siswa')->with('sukses','Data berhasil dihapus!');
    }

    public function tkj10()
    {
        $data_siswa = \App\Tkj10::all();
        return view('siswa.tkj10',['data_siswa' => $data_siswa]);
    }

    public function addtkj10()
    {
        return view('siswa.addtkj10');
    }

    public function createtkj(Request $request)
    {
        \App\Tkj10::create($request->all());
        return redirect('/tkj10')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edittkj10($id)
    {
        $tkj10 = \App\Tkj10::find($id);
        return view('siswa/edittkj10',['tkj10' => $tkj10]);
    }

    public function updatetkj10(Request $request,$id)
    {
        $tkj10 = \App\Tkj10::find($id);
        $tkj10 ->update($request->all());
        return redirect('/tkj10')->with('sukses','Data berhasil diubah!');
    }

    public function deletetkj10($id)
    {
        $tkj10 = \App\Tkj10::find($id);
        $tkj10 ->delete();
        return redirect('/tkj10')->with('sukses','Data berhasil dihapus!');
    }
}
