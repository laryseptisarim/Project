@extends('layouts.master')
    Dashboard
@section('content')

<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data Siswa</h3>
						</div>
						<div class="panel-body">
							<div class="row">
                                @foreach ($data as $jurusan)
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-user"></i></span>
										<p>
											<span class="title">{{$jurusan->nama}}</span>
											<br>
											<br>
                                            <br>
											<ul class="nav">
												<li><a href="{{ Request::url() }}/{{ $jurusan->id }}/X" class="">Kelas X</a></li>
												<li><a href="{{ Request::url() }}/{{ $jurusan->id }}/XI" class="">Kelas XI</a></li>
												<li><a href="{{ Request::url() }}/{{ $jurusan->id }}/XII" class="">Kelas XII</a></li>
											</ul>
										</p>
									</div>
								</div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@stop
