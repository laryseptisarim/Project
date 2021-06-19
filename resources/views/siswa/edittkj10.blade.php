@extends('layouts.master')
   Tambah Siswa
@section('content')

<div class="main">
<div class="main-content">
<div class="container-fluid">
<h3 class="page-title">Tambah Siswa</h3>
<div class="col-md-12">
<form action="/tkj10/{{$tkj10->id}}/updatetkj10" method="POST">
{{csrf_field()}}
  <div class="row mb-3">
   <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Siswa</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" placeholder="Nama lengkap" value="{{$tkj10->name}}">
    </div>
  </div>
  <br>
  <fieldset class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
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
    <label for="inputEmail3" class="col-sm-2 col-form-label">NIS</label>
    <div class="col-sm-10">
      <input name="nis" type="text" class="form-control" placeholder="Nomor Induk Siswa" value="{{$tkj10->nis}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Agama</label>
    <div class="col-sm-10">
      <select name="agama" type="text" class="form-control" value="{{$tkj10->agama}}">
      <option>Islam</option>
      <option>Kristen</option>
      <option>Hindu</option>
      <option>Budha</option>
      <option>Katolik</option>
      <option>Atheis</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input name="tmptlahir" type="text" class="form-control" placeholder="Kota/tempat kelahiran" value="{{$tkj10->tmptlahir}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input name="tgllahir" type="date" class="form-control" value="{{$tkj10->tgllahir}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat lengkap">{{$tkj10->alamat}}</textarea>
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telpon</label>
    <div class="col-sm-10">
      <input name="telp" type="text" class="form-control" placeholder="Nomor telepon siswa" value="{{$tkj10->telp}}">
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