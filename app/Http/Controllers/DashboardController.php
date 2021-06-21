<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jurusan;
use App\Siswa;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard.index');
    }

    public function daftarJurusan()
    {
        $data = Jurusan::all();
        return view('siswa.index_siswa', ['data' => $data]);
    }

    public function daftarSiswa($jurusan, $kelas)
    {
        $data = Siswa::where('kelas', $kelas)->where('id_jurusan', $jurusan)->get();
        return view('siswa.daftar-siswa', ['daftarSiswa' => $data, 'jurusan' => $jurusan, 'kelas' => $kelas]);
    }

    public function addSiswa($jurusan, $kelas)
    {
        $data = Jurusan::all();
        return view('siswa.add-siswa', ['daftarJurusan' => $data, 'jurusan' => $jurusan, 'kelas' => $kelas]);
    }

    public function createSiswa(Request $request, $jurusan, $kelas)
    {
        $data = $request->except('jurusan');
        $data['id_jurusan'] = $request->jurusan;
        Siswa::create($data);
        return redirect()->route('daftarSiswa', [$jurusan, $kelas])->with('sukses','Data berhasil ditambahkan!');
    }
    
}
