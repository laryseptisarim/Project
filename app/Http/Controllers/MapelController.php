<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function mapel()
    {
        $data_mapel = \App\Mapel::all();
        return view('matapelajaran.mapel',['data_mapel' => $data_mapel]);
    }

    public function tambah_mapel()
    {
        return view('matapelajaran.tambah_mapel');
    }

    public function create(Request $request)
    {
        \App\Mapel::create($request->all());
        return redirect('/matapelajaran')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $mapel = \App\Mapel::find($id);
        return view('matapelajaran/edit',['mapel' => $mapel]);
    }

    public function update(Request $request,$id)
    {
        $mapel = \App\Mapel::find($id);
        $mapel ->update($request->all());
        return redirect('/matapelajaran')->with('sukses','Data berhasil diubah!');
    }

    public function delete($id)
    {
        $mapel = \App\Mapel::find($id);
        $mapel ->delete();
        return redirect('/matapelajaran')->with('sukses','Data berhasil dihapus!');
    }
}
