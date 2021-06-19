@extends('layouts.master')
   Tambah guru
@section('content')

<div class="main">
<div class="main-content">
<div class="container-fluid">
<h3 class="page-title">Tambah Guru</h3>
<div class="col-md-12">
<form action="/guru/create" method="POST">
{{csrf_field()}}
  <div class="row mb-3">
   <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Guru</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Nama lengkap">
    </div>
  </div>
  <br>
  <fieldset class="row mb-3">
  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <div class="form-check">
        <input name="jenis_kelamin" class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="L" checked>
        <label class="form-check-label" for="gridRadios1">
          Laki-laki
        </label>
      </div>
      <div class="form-check">
        <input name="jenis_kelamin" class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="P">
        <label class="form-check-label" for="gridRadios2">
          Perempuan
        </label>
      </div>
    </div>
  </fieldset>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
    <div class="col-sm-10">
      <input name="nik" type="text" class="form-control" id="inputEmail3" placeholder="NIK">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jabatan/Tugas</label>
    <div class="col-sm-10">
      <input name="jabatan" type="text" class="form-control" placeholder="Jabatan/tugas tambahan">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input name="tmptlahir" type="text" class="form-control" placeholder="Kota/tempat kelahiran">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input name="tgllahir" type="date" class="form-control">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat lengkap"></textarea>
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telpon</label>
    <div class="col-sm-10">
      <input name="telp" type="text" class="form-control" placeholder="Nomor telepon guru">
    </div>
  </div>
  <div class="row">
	<div class="col-md-6">
	<div class="panel-body">
	<p class="demo-button">
    <button type="submit" class="btn btn-success">Save</button>
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