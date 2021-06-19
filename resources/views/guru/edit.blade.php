@extends('layouts.master')
   Tambah guru
@section('content')

<div class="main">
<div class="main-content">
<div class="container-fluid">
<h3 class="page-title">Edit Data Guru</h3>
<div class="col-md-12">
<form action="/guru/{{$guru->id}}/update" method="POST">
{{csrf_field()}}
  <div class="row mb-3">
   <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Guru</label>
    <div class="col-sm-10">
      <input name="name" type="text" class="form-control" id="inputEmail3" placeholder="Nama lengkap" value="{{$guru->name}}">
    </div>
  </div>
  <br>
  <fieldset class="row mb-3">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <div class="form-check">
        <input name="jenis_kelamin" class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="L" @if($guru->jenis_kelamin == 'L') selected @endif checked>
        <label class="form-check-label" for="gridRadios1">
          Laki-laki
        </label>
      </div>
      <div class="form-check">
        <input name="jenis_kelamin" class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="P" @if($guru->jenis_kelamin == 'P') selected @endif>
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
      <input name="nik" type="text" class="form-control" id="inputEmail3" placeholder="NIK" value="{{$guru->nik}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">jabatan</label>
    <div class="col-sm-10">
      <input name="jabatan" type="text" class="form-control" id="inputPassword3" value="{{$guru->jabatan}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat Lahir</label>
    <div class="col-sm-10">
      <input name="tmptlahir" type="text" class="form-control" value="{{$guru->tmptlahir}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input name="tgllahir" type="text" class="form-control" id="inputEmail3" value="{{$guru->tgllahir}}">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea name="alamat" class="form-control" id="sinputEmail3">{{$guru->alamat}}</textarea>
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telpon</label>
    <div class="col-sm-10">
      <input name="telp" type="text" class="form-control"  value="{{$guru->telp}}">
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