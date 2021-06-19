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
					<h3 class="page-title">Data siswa</h3>
					<a href="{{Request::url()}}/tambah" class="btn btn-primary btn-sm">Tambah siswa</a>
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
												<th>Nis</th>
												<th>Agama</th>
												<th>Tempat lahir</th>
												<th>Tanggal lahir</th>
												<th>Alamat</th>
												<th>No.telp</th>
												<th>Action</th>
											</tr>
										@forelse($daftarSiswa as $siswa)
											<tr>
												<td>{{$siswa->id}}</td>
												<td>{{$siswa->name}}</td>
												<td>{{$siswa->jenis_kelamin}}</td>
												<td>{{$siswa->nis}}</td>
												<td>{{$siswa->agama}}</td>
												<td>{{$siswa->tmptlahir}}</td>
												<td>{{$siswa->tgllahir}}</td>
												<td>{{$siswa->alamat}}</td>
												<td>{{$siswa->telp}}</td>

												<td><a href="/siswa/{{$siswa->id}}/editsiswa" class="btn btn-warning btn-sm">Edit</a>
												<a href="/siswa/{{$siswa->id}}/deletesiswa" class="btn btn-danger btn-sm fa fa-trash-o" onclick="return confirm('Yakin untuk menghapus?')"></a></td>
											</tr>
											</thead>
                                            @empty
                                            <tr>
                                                <td colspan="10" style="text-align: center">Tidak ada data</td>
                                            </tr>
											@endforelse

									</table>
								</div>
							</div>
                            </div>
							</div>
							<!-- END BORDERED TABLE -->

@stop
