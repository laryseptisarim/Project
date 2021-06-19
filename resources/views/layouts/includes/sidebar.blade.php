<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="{{route('dashboard')}}" class="active"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
						<li><a href="{{route('smk')}}" class=""><i class="fa fa-map"></i> <span>Profil Sekolah</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="fa fa-file"></i> <span>Master Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="{{route('siswa')}}" class="">Siswa</a></li>
									<li><a href="{{route('guru')}}" class="">Guru</a></li>
									<li><a href="{{route('mapel')}}" class="">Mata Pelajaran</a></li>									
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>