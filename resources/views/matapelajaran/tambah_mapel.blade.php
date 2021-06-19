@extends('layouts.master')
   Tambah Siswa
@section('content')

<div class="main">
<div class="main-content">
<div class="container-fluid">
<h3 class="page-title">Tambah Mata Pelajaran</h3>
<div class="col-md-12">
<form action="/matapelajaran/create" method="POST">
{{csrf_field()}}
  <div class="row mb-3">
   <label class="col-sm-2 col-form-label">Mata Pelajaran</label>
    <div class="col-sm-10">
      <input name="mapel" type="text" class="form-control" placeholder="Nama mata pelajaran">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Guru</label>
    <div class="col-sm-10">
      <input name="guru" type="text" class="form-control" placeholder="Guru yang mengajar">
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
      <select name="kelas" type="text" class="form-control">
      <option>X</option>
      <option>XI</option>
      <option>XII</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
      <select name="jurusan" type="text" class="form-control">
      <option>TJK (Teknik Komputer Jaringan)</option>
      <option>Perhotelan</option>
      <option>Otomatisasi dan Tata Kelola Perkanttoran</option>
      <option>Akuntansi dan Keuangan Lembaga</optiion>
      </select>
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