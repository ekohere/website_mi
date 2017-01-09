<!DOCTYPE html>
<html>
<head>
	@include('frontend.include.library-top')
	@yield('library-top')
</head>
	<body>
	<div class="body">
			@include('frontend.include.header')
			<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Features</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Kurikulum</h1>
							</div>
						</div>
					</div>
				</section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="alert alert-info alert-admin">
								<div class="row">
									<div class="col-md-8">
										<h4>Admin Extension</h4>
										<p><strong class="warning"><i class="fa fa-warning"></i> Warning!</strong> This page is part of the admin extension and is <strong>NOT</strong> included on Porto - Responsive HTML5 Template, to get all features, purchase both templates: <a target="_blank" href="http://www.themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">Porto ($16)</a> + <a target="_blank" href="http://www.themeforest.net/item/porto-admin-responsive-html5-template/8539472?ref=Okler">Porto Admin ($24)</a>: <strong>$40 Total.</strong></p>
										<p>
											<a class="btn btn-lg btn-sm btn-primary" target="_blank" href="http://www.themeforest.net/item/porto-admin-responsive-html5-template/8539472?ref=Okler">View Porto Admin!</a>
										</p>
									</div>
									<div class="col-md-4 visible-md visible-lg">
										<img class="appear-animation pull-right" src="img/admin-banner.png" data-appear-animation="fadeIn">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="alert alert-info">
						Resize the browser to see the responsiveness in action.
					</div>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
					
							<h2 class="panel-title">Semester 1</h2>
						</header>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-condensed mb-none">
									<thead>
										<tr  height="50" >
									
											<th width="80px"><center>Nomor</center></th>
											<th width="600px"><center>Nama Matakuliah</center></th>
											<th width="200px"><center>Jumlah SKS</center></th>
											
											
										</tr>
									</thead>
									<tbody align="center">
										<tr  height="50">
											<td>1</td>
											<td>BAHASA INDONESIA</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>2</td>
											<td>PENGANTAR TEKNOLOGI INFORMASI</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>3</td>
											<td>APLIKASI PERKANTORAN</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>4</td>
											<td>ALGORITMA DAN PEMROGRAMAN I</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>5</td>
											<td>MATEMATIKA</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>6</td>
											<td>AGAMA</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>7</td>
											<td>BAHASA INGGRIS I</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>8</td>
											<td>PANCASILA</td>
											<td></td>

										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
					
							<h2 class="panel-title">Semester 2</h2>
						</header>
						<div class="panel-body">
							<table class="table table-bordered table-striped table-condensed mb-none">
								<thead>
										<tr  height="50">
									
											<th width="80px"><center>Nomor</center></th>
											<th width="600px"><center>Nama Matakuliah</center></th>
											<th width="200px"><center>Jumlah SKS</center></th>
											
											
										</tr>
									</thead>
									<tbody align="center">
										<tr  height="50">
											<td>1</td>
											<td>BAHASA INGGRIS II</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>2</td>
											<td>BASIS DATA I</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>3</td>
											<td>STRUKTUR DATA</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>4</td>
											<td>KEWARGANEGARAAN</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>5</td>
											<td>PEMROGRAMAN VISUAL I</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>6</td>
											<td>ALGORITMA DAN PEMROGRAMAN II</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>7</td>
											<td>ILMU SOSIAL DAN BUDAYA DASAR</td>
											<td></td>
											
										</tr>
										
										
									</tbody>
							</table>
						</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
					
							<h2 class="panel-title">Semester 3</h2>
						</header>
						<div class="panel-body">
							<table class="table table-no-more table-bordered table-striped mb-none">
								<thead>
										<tr  height="50">
									
											<th width="80px"><center>Nomor</center></th>
											<th width="600px"><center>Nama Matakuliah</center></th>
											<th width="200px"><center>Jumlah SKS</center></th>
											
											
										</tr>
									</thead>
									<tbody align="center">
										<tr  height="50">
											<td>1</td>
											<td>STATISTIKA</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>2</td>
											<td>BASIS DATA II</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>3</td>
											<td>PEMROGRAMAN VISUAL II</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>4</td>
											<td>AKUNTANSI</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>5</td>
											<td>MATEMATIKA DISKRIT</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>6</td>
											<td>PENGANTAR ILMU PERKEBUNAN</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>7</td>
											<td>TEKNIK PERANGKAT KERAS</td>
											<td></td>
											
										</tr>
										
									</tbody>
							</table>
						</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
					
							<h2 class="panel-title">Semester 4</h2>
						</header>
						<div class="panel-body">
							<table class="table table-no-more table-bordered table-striped mb-none">
								<thead>
										<tr  height="50">
									
											<th width="80px"><center>Nomor</center></th>
											<th width="600px"><center>Nama Matakuliah</center></th>
											<th width="200px"><center>Jumlah SKS</center></th>
											
											
										</tr>
									</thead>
									<tbody align="center">
										<tr  height="50">
											<td>1</td>
											<td>JARINGAN KOMPUTER</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>2</td>
											<td>PEMROGRAMAN WEB I</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>3</td>
											<td>PEMROGRAMAN BERORIENTASI OBJEK</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>4</td>
											<td>MULTIMEDIA</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>5</td>
											<td>PENGOLAHAN CITRA DIJITAL</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>6</td>
											<td>DASAR MANAJEMEN</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>7</td>
											<td>SISTEM DIJITAL</td>
											<td></td>
											
										</tr>
										
									</tbody>
							</table>
						</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
					
							<h2 class="panel-title">Semester 5</h2>
						</header>
						<div class="panel-body">
							<table class="table table-no-more table-bordered table-striped mb-none">
								<thead>
										<tr  height="50">
									
											<th width="80px"><center>Nomor</center></th>
											<th width="600px"><center>Nama Matakuliah</center></th>
											<th width="200px"><center>Jumlah SKS</center></th>
											
											
										</tr>
									</thead>
									<tbody align="center">
										<tr  height="50">
											<td>1</td>
											<td>REKAYASA PERANGKAT LUNAK</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>2</td>
											<td>ANALISA DESAIN SISTEM</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>3</td>
											<td>PEMROGRAMAN WEB II</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>4</td>
											<td>SISTEM INFORMASI GEOGRAFIS</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>5</td>
											<td>KEWIRAUSAHAAN</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>6</td>
											<td>SISTEM OPERASI</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>7</td>
											<td>JARINGAN KOMPUTER NIRKABEL</td>
											<td></td>
											
										</tr>
										
									</tbody>
							</table>
						</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
					
							<h2 class="panel-title">Semester 6</h2>
						</header>
						<div class="panel-body">
							<table class="table table-no-more table-bordered table-striped mb-none">
								<thead>
										<tr  height="50">
									
											<th width="80px"><center>Nomor</center></th>
											<th width="600px"><center>Nama Matakuliah</center></th>
											<th width="200px"><center>Jumlah SKS</center></th>
											
											
										</tr>
									</thead>
									<tbody align="center">
										<tr  height="50">
											<td>1</td>
											<td>INTERAKSI MANUSIA DAN KOMPUTER</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>2</td>
											<td>PEMROGRAMAN PERANGKAT BERGERAK</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>3</td>
											<td>SISTEM SIMULASI DAN MODELING</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>4</td>
											<td>KECERDASAN BUATAN</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>5</td>
											<td>BASIS DATA SPASIAL</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>6</td>
											<td>KOMPUTER DAN MASYARAKAT</td>
											<td></td>

										</tr>
										
									</tbody>
							</table>
						</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
					
							<h2 class="panel-title">Semester 7</h2>
						</header>
						<div class="panel-body">
							<table class="table table-no-more table-bordered table-striped mb-none">
								<thead>
										<tr  height="50">
									
											<th width="80px"><center>Nomor</center></th>
											<th width="600px"><center>Nama Matakuliah</center></th>
											<th width="200px"><center>Jumlah SKS</center></th>
											
											
										</tr>
									</thead>
									<tbody align="center">
										<tr  height="50">
											<td>1</td>
											<td>METODOLOGI PENELITIAN</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>2</td>
											<td>MANAJEMEN PROYEK SISTEM INFORMASI</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>3</td>
											<td>KOMPUTASI PARALEL</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>4</td>
											<td>SISTEM FUZZY</td>
											<td></td>

										</tr>
										<tr height="50">
											<td>5</td>
											<td>ETIKA PROFESI</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>6</td>
											<td>DATA MINING</td>
											<td></td>

										</tr>
										
									</tbody>
							</table>
						</div>
					</section>
					
					<section class="panel">
						<header class="panel-heading">
							<div class="panel-actions">
								<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
								<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
							</div>
					
							<h2 class="panel-title">Semester 8</h2>
						</header>
						<div class="panel-body">
							<table class="table table-no-more table-bordered table-striped mb-none">
								<thead>
										<tr  height="50">
									
											<th width="80px"><center>Nomor</center></th>
											<th width="600px"><center>Nama Matakuliah</center></th>
											<th width="200px"><center>Jumlah SKS</center></th>
											
											
										</tr>
									</thead>
									<tbody align="center">
										<tr  height="50">
											<td>1</td>
											<td>PRAKTIK KERJA LAPANGAN (PKL)</td>
											<td></td>
											
										</tr>
										<tr height="50">
											<td>2</td>
											<td>TUGAS AKHIR (TA)</td>
											<td></td>

										</tr>
										
									</tbody>
							</table>
						</div>
					</section>
				</div>	
				

			@include('frontend.include.footer')

			@yield('library-bottom')
			@include('frontend.include.library-bottom')
	</div>
	</body>
</html>