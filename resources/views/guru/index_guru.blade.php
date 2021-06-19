@extends('layouts.master')
    guru
@section('content')

<div class="main">
<div class="main-content">
				<div class="container-fluid">	
				@if(session('sukses'))
				<div class="alert alert-success" role="alert">
				<i class="fa fa-check-circle"></i>
 				 {{session('sukses')}}
				</div>		
				</div>
				@endif
					<h3 class="page-title">Data guru</h3>
					<a href="{{route('tambah_guru')}}" class="btn btn-primary btn-sm">Tambah guru</a>
					<div class="row">
						<div class="col-md-12">
<!-- BORDERED TABLE -->
<div class="panel">	
								<div class="col-md-14">
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Lengkap</th>
												<th>P/L</th>
												<th>Nik</th>
												<th>Jabatan</th>
												<th>Tempat lahir</th>
												<th>Tanggal lahir</th>
												<th>Alamat</th>
												<th>No.telp</th>
												<th>Action</th>
											</tr>
										@foreach($data_guru as $guru)
											<tr>
												<td>{{$guru->id}}</td>
												<td>{{$guru->name}}</td>
												<td>{{$guru->jenis_kelamin}}</td>
												<td>{{$guru->nik}}</td>
												<td>{{$guru->jabatan}}</td>
												<td>{{$guru->tmptlahir}}</td>
												<td>{{$guru->tgllahir}}</td>
												<td>{{$guru->alamat}}</td>
												<td>{{$guru->telp}}</td>
												<td><a href="/guru/{{$guru->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
												<a href="/guru/{{$guru->id}}/delete" class="btn btn-danger btn-sm fa fa-trash-o" onclick="return confirm('Yakin untuk menghapus?')"></a></td>
											</tr>
											</thead>
											@endforeach
									</table>
								</div>
							</div>
                            </div>
							</div>
							<!-- END BORDERED TABLE -->

@stop