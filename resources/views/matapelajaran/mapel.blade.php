@extends('layouts.master')
    siswa
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
					<h3 class="page-title">Daftar Mata Pelajaran</h3>
					<a href="{{route('tambah_mapel')}}" class="btn btn-primary btn-sm">Tambah</a>
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
												<th>Mata Pelajaran</th>
												<th>Guru</th>
												<th>Kelas</th>
                                                <th>Jurusan</th>
												<th>Action</th>
											</tr>
										@foreach($data_mapel as $mapel)
											<tr>
												<td>{{$mapel->id}}</td>
												<td>{{$mapel->mapel}}</td>
												<td>{{$mapel->guru}}</td>
                                                <td>{{$mapel->kelas}}</td>
                                                <td>{{$mapel->jurusan}}</td>
												
												<td><a href="/matapelajaran/{{$mapel->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
												<a href="/matapelajaran/{{$mapel->id}}/delete" class="btn btn-danger btn-sm fa fa-trash-o" onclick="return confirm('Yakin untuk menghapus?')"></a></td>
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