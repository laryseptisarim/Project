@extends('layouts.master')
   Tambah Siswa
@section('content')

<div class="main">
<div class="main-content">
<div class="container-fluid">
<h3 class="page-title">Edit Data Siswa</h3>
<div class="col-md-12">
<form action="/siswa/{{$siswa->id}}/update" method="POST">
{{csrf_field()}}
  <div class="row mb-3">
   <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Siswa</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Nama lengkap" value="{{$siswa->name}}">
    </div>
  </div>
  <br>
  <fieldset class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <div class="form-check">
        <input name="jenis_kelamin" class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="L" @if($siswa->jenis_kelamin == 'L') selected @endif checked>
        <label class="form-check-label" for="gridRadios1">
          Laki-laki
        </label>
      </div>
      <div class="form-check">
        <input name="jenis_kelamin" class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>
        <label class="form-check-label" for="gridRadios2">
          Perempuan
        </label>
      </div>
    </div>
  </fieldset>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NIS</label>
    <div class="col-sm-10">
      <input name="nis" type="text" class="form-control" id="inputEmail3" placeholder="Nomor Induk Siswa" value="{{$siswa->nis}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <input name="kelas" type="text" class="form-control" id="inputPassword3" value="{{$siswa->kelas}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
      <input name="jurusan" type="text" class="form-control" id="inputEmail3" value="{{$siswa->jurusan}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea name="alamat" class="form-control" id="sinputEmail3">{{$siswa->alamat}}</textarea>
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telpon</label>
    <div class="col-sm-10">
      <input name="telp" type="text" class="form-control" id="inputEmail3" value="{{$siswa->telp}}">
    </div>
  </div>
  <div class="row">
	<div class="col-md-6">
	<div class="panel-body">
	<p class="demo-button">
    <button type="submit" class="btn btn-success">Update</button>
	<button type="reset" class="btn btn-warning">Reset</button>										
	</p>
    </div>
    </div>
</div>
</form>

    </div>
  </div>
  </div>

 @stop