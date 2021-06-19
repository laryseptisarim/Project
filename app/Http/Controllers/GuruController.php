<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index_guru()
    {
        $data_guru = \App\guru::all();
        return view('guru.index_guru',['data_guru' => $data_guru]);
    }

    public function tambah_guru()
    {
        return view('guru.tambah_guru');
    }

    public function create(Request $request)
    {
        \App\guru::create($request->all());
        return redirect('/guru')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $guru = \App\guru::find($id);
        return view('guru/edit',['guru' => $guru]);
    }

    public function update(Request $request,$id)
    {
        $guru = \App\guru::find($id);
        $guru ->update($request->all());
        return redirect('/guru')->with('sukses','Data berhasil diubah!');
    }

    public function delete($id)
    {
        $guru = \App\guru::find($id);
        $guru ->delete();
        return redirect('/guru')->with('sukses','Data berhasil dihapus!');
    }
}
