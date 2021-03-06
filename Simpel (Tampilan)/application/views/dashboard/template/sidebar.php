<!-- begin app-header -->
<header class="app-header top-bar">
	<!-- begin navbar -->
	<nav class="navbar navbar-expand-md">

		<!-- begin navbar-header -->
		<div class="navbar-header d-flex align-items-center">
			<a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
			<a class="navbar-brand" href="<?= base_url(); ?>Dashboard">
				<img src="<?= base_url();?>assets/home/images/pemkotdepok.png" height="50" width="50" alt="Pemkot Depok">
				SIMPEL
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="ti ti-align-left"></i>
		</button>
		<!-- end navbar-header -->
		<!-- begin navigation -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="navigation d-flex">
				<ul class="navbar-nav nav-left">
					<li class="nav-item">
						<a href="javascript:void(0)" class="nav-link sidebar-toggle">
							<i class="ti ti-align-right"></i>
						</a>
					</li>
					<li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
						<a href="javascript:void(0)" class="nav-link expand">
							<i class="icon-size-fullscreen"></i>
						</a>
					</li>
				</ul>
				<ul class="navbar-nav nav-right ml-auto">
					<li class="nav-item dropdown">
<!-- 						<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="ti ti-email"></i>
						</a> -->
						<div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
							<ul>
								<li class="dropdown-header bg-gradient p-4 text-white text-left">Messages
									<label class="label label-info label-round">6</label>
									<a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
										<span class="font-13"> Mark all as read</span></a>
									</li>
									<li class="dropdown-body">
										<ul class="scrollbar scroll_dark max-h-240">
											<li>
												<a href="javascript:void(0)">
													<div class="notification d-flex flex-row align-items-center">
														<div class="notify-icon bg-img align-self-center">
															<img class="img-fluid" src="<?= base_url(); ?>assets/dashboard/img/avtar/03.jpg" alt="user3">
														</div>
														<div class="notify-message">
															<p class="font-weight-bold">Brianing Leyon</p>
															<small>You will sail along until you...</small>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<div class="notification d-flex flex-row align-items-center">
														<div class="notify-icon bg-img align-self-center">
															<img class="img-fluid" src="<?= base_url(); ?>assets/dashboard/img/avtar/01.jpg" alt="user">
														</div>
														<div class="notify-message">
															<p class="font-weight-bold">Jimmyimg Leyon</p>
															<small>Okay</small>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<div class="notification d-flex flex-row align-items-center">
														<div class="notify-icon bg-img align-self-center">
															<img class="img-fluid" src="<?= base_url(); ?>assets/dashboard/img/avtar/02.jpg" alt="user2">
														</div>
														<div class="notify-message">
															<p class="font-weight-bold">Brainjon Leyon</p>
															<small>So, make the decision...</small>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<div class="notification d-flex flex-row align-items-center">
														<div class="notify-icon bg-img align-self-center">
															<img class="img-fluid" src="<?= base_url(); ?>assets/dashboard/img/avtar/04.jpg" alt="user4">
														</div>
														<div class="notify-message">
															<p class="font-weight-bold">Smithmin Leyon</p>
															<small>Thanks</small>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<div class="notification d-flex flex-row align-items-center">
														<div class="notify-icon bg-img align-self-center">
															<img class="img-fluid" src="<?= base_url(); ?>assets/dashboard/img/avtar/05.jpg" alt="user5">
														</div>
														<div class="notify-message">
															<p class="font-weight-bold">Jennyns Leyon</p>
															<small>How are you</small>
														</div>
													</div>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<div class="notification d-flex flex-row align-items-center">
														<div class="notify-icon bg-img align-self-center">
															<img class="img-fluid" src="<?= base_url(); ?>assets/dashboard/img/avtar/06.jpg" alt="user6">
														</div>
														<div class="notify-message">
															<p class="font-weight-bold">Demian Leyon</p>
															<small>I like your themes</small>
														</div>
													</div>
												</a>
											</li>
										</ul>
									</li>
									<li class="dropdown-footer">
										<a class="font-13" href="javascript:void(0)"> View All messages </a>
									</li>
								</ul>
							</div>
<!-- 						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fe fe-bell"></i>
								<span class="notify">
									<span class="blink"></span>
									<span class="dot"></span>
								</span>
							</a>
							<div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
								<ul>
									<li class="dropdown-header bg-gradient p-4 text-white text-left">Notifications
										<a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
											<span class="font-13"> Clear all</span></a>
										</li>
										<li class="dropdown-body min-h-240 nicescroll">
											<ul class="scrollbar scroll_dark max-h-240">
												<li>
													<a href="javascript:void(0)">
														<div class="notification d-flex flex-row align-items-center">
															<div class="notify-icon bg-img align-self-center">
																<div class="bg-type bg-type-md">
																	<span>HY</span>
																</div>
															</div>
															<div class="notify-message">
																<p class="font-weight-bold">New registered user</p>
																<small>Just now</small>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="javascript:void(0)">
														<div class="notification d-flex flex-row align-items-center">
															<div class="notify-icon bg-img align-self-center">
																<div class="bg-type bg-type-md bg-success">
																	<span>GM</span>
																</div>
															</div>
															<div class="notify-message">
																<p class="font-weight-bold">New invoice received</p>
																<small>22 min</small>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="javascript:void(0)">
														<div class="notification d-flex flex-row align-items-center">
															<div class="notify-icon bg-img align-self-center">
																<div class="bg-type bg-type-md bg-danger">
																	<span>FR</span>
																</div>
															</div>
															<div class="notify-message">
																<p class="font-weight-bold">Server error report</p>
																<small>7 min</small>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="javascript:void(0)">
														<div class="notification d-flex flex-row align-items-center">
															<div class="notify-icon bg-img align-self-center">
																<div class="bg-type bg-type-md bg-info">
																	<span>HT</span>
																</div>
															</div>
															<div class="notify-message">
																<p class="font-weight-bold">Database report</p>
																<small>1 day</small>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="javascript:void(0)">
														<div class="notification d-flex flex-row align-items-center">
															<div class="notify-icon bg-img align-self-center">
																<div class="bg-type bg-type-md">
																	<span>DE</span>
																</div>
															</div>
															<div class="notify-message">
																<p class="font-weight-bold">Order confirmation</p>
																<small>2 day</small>
															</div>
														</div>
													</a>
												</li>
											</ul>
										</li>
										<li class="dropdown-footer">
											<a class="font-13" href="javascript:void(0)"> View All Notifications
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link search" href="javascript:void(0)">
									<i class="ti ti-search"></i>
								</a>
								<div class="search-wrapper">
									<div class="close-btn">
										<i class="ti ti-close"></i>
									</div>
									<div class="search-content">
										<form>
											<div class="form-group">
												<i class="ti ti-search magnifier"></i>
												<input type="text" class="form-control autocomplete" placeholder="Search Here" id="autocomplete-ajax" autofocus="autofocus">
											</div>
										</form>
									</div>
								</div>
							</li> -->
							<li class="nav-item dropdown user-profile">
								<a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="avtar-img">
									<span class="bg-success user-status"></span>
								</a>
								<div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
									<div class="bg-gradient px-4 py-3">
										<div class="d-flex align-items-center justify-content-between">
											<div class="mr-1">
												<!-- <h4 class="text-white mb-0">Alice Williams</h4>
													<small class="text-white">Henry@example.com</small> -->
												</div>
												<a href="#" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout" id="logout">Logout <i
													class="zmdi zmdi-power"></i></a>
												</div>
											</div>
<!-- 										<div class="p-4">
											<a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
												<i class="fa fa-user pr-2 text-success"></i> Profile</a>
												<a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
													<i class="fa fa-envelope pr-2 text-primary"></i> Inbox
													<span class="badge badge-primary ml-auto">6</span>
												</a>
												<a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
													<i class=" ti ti-settings pr-2 text-info"></i> Settings
												</a>
												<a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
													<i class="fa fa-compass pr-2 text-warning"></i> Need help?</a>
													<div class="row mt-2">
														<div class="col">
															<a class="bg-light p-3 text-center d-block" href="#">
																<i class="fe fe-mail font-20 text-primary"></i>
																<span class="d-block font-13 mt-2">My messages</span>
															</a>
														</div>
														<div class="col">
															<a class="bg-light p-3 text-center d-block" href="#">
																<i class="fe fe-plus font-20 text-primary"></i>
																<span class="d-block font-13 mt-2">Compose new</span>
															</a>
														</div>
													</div>
												</div> -->
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- end navigation -->
						</nav>
						<!-- end navbar -->
					</header>
					<!-- end app-header -->
					<!-- begin app-nabar -->
					<aside class="app-navbar">
						<div class="sidebar-nav scrollbar scroll_light">
							<ul class="metismenu " id="sidebarNav">
							<?php if ($this->uri->segment(1) == "DashboardLPK") { ?>
								<li><a href="<?= base_url(); ?>DashboardLPK" aria-expanded="false"><span class="nav-title">Beranda</span></a> </li>
								<li><a href="<?= base_url(); ?>DashboardLPK/profil" aria-expanded="false"><span class="nav-title">Profil</span></a> </li>
								<li><a href="<?= base_url(); ?>DashboardLPK/info" aria-expanded="false"><span class="nav-title">Info</span></a> </li>
								<li><a href="<?= base_url(); ?>DashboardLPK/laporan" aria-expanded="false"><span class="nav-title">Laporan</span></a> </li>
							<?php } else { ?>
								<li class="nav-static-title">Dashboard</li>
								<li><a href="<?= base_url(); ?>Dashboard" aria-expanded="false"><span class="nav-title">Beranda</span></a></li>

								<li class="nav-static-title">Data Peserta</li>
								<li><a href="<?= base_url(); ?>Dashboard/dpDaftar" aria-expanded="false"><span class="nav-title">Pendaftaran</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/dpCalon" aria-expanded="false"><span class="nav-title">Calon Peserta</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/dpPeserta" aria-expanded="false"><span class="nav-title">Data Peserta</span></a></li>

								<li class="nav-static-title">Data Pelatihan</li>
								<li><a href="<?= base_url(); ?>Dashboard/dplPelatihan" aria-expanded="false"><span class="nav-title">Pelatihan</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/dplPeserta" aria-expanded="false"><span class="nav-title">Peserta Pelatihan</span></a></li>

								<li class="nav-static-title">Data LPK</li>
								<li><a href="<?= base_url(); ?>Dashboard/dlCalon" aria-expanded="false"><span class="nav-title">Calon LPK</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/dlLPK" aria-expanded="false"><span class="nav-title">LPK</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/dlLaporan" aria-expanded="false"><span class="nav-title">Status Laporan</span></a></li>

								<li class="nav-static-title">Laporan</li>
								<li><a href="<?= base_url(); ?>Dashboard/lapPelatihan" aria-expanded="false"><span class="nav-title">Pelatihan</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/lapLPK" aria-expanded="false"><span class="nav-title">LPK</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/lapStatus" aria-expanded="false"><span class="nav-title">Status Peserta</span></a></li>

								<li class="nav-static-title">Data CMS</li>
								<li><a href="<?= base_url(); ?>Dashboard/cmsInfo" aria-expanded="false"><span class="nav-title">Info</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/cmsYoutube" aria-expanded="false"><span class="nav-title">Youtube</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/cmsSlider" aria-expanded="false"><span class="nav-title">Slider</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/cmsText" aria-expanded="false"><span class="nav-title">Text Berjalan</span></a></li>

								<li class="nav-static-title">Data Master</li>
								<li><a href="<?= base_url(); ?>Dashboard/mJenis" aria-expanded="false"><span class="nav-title">Jenis Pelatihan</span></a></li>
								<li><a href="<?= base_url(); ?>Dashboard/mKategori" aria-expanded="false"><span class="nav-title">Kategori Pelatihan</span></a></li>
							<?php } ?>
							</ul>
						</div>
					</aside>
					
					<!-- end app-navbar -->

					<script type="text/javascript">
						$(document).ready(function() {
							$('#logout').on('click', function () {
								var id =  $(this).data('id');
								swal({
									title: "Logout!",
									text: "Apakah anda yakin ingin logout?",
									icon: "warning",
									buttons: true,
									dangerMode: true,
								}).then((result) => {
									if (result) {
										window.location = "<?= base_url(); ?>logout";
                // $.ajax({
                //     url: "",  
                // });
            }
        })
							});
						});
					</script>


					<div id="modalLaporanPeserta" class="modal fade" role="dialog">
						<div class="modal-dialog modal-lg">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header" style="display:block;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Laporan Peserta</h4>
								</div>
								<form  method="POST">
								    
								    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
								    
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-2">
												<label for="email">Dari</label>
											</div>
											<div class="col-sm-4">
												<input type="date" class="form-control" id="" name="tgl_awal" style="width:100%;" required="" autocomplete="off">
											</div>
											<div class="col-sm-2">
												<label for="pwd">Sampai</label>
											</div>
											<div class="col-sm-4">
												<input type="date" class="form-control" id="" name="tgl_akhir" style="width:100%;" required="" autocomplete="off">
											</div>
										</div>
										<div class="row mt-2">
											<div class="col-sm-2">
												<label for="email">Nama Pelatihan</label>
											</div>
											<div class="col-sm-10">
												<select class="form-control" name="nama_pelatihan">
													<option hidden value="">Silahkan Pilih</option>
													<?php foreach ($pelatihan as $row) { ?>
														<option value="<?= $row->kode_pelatihan; ?>"><?= $row->nama; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-info mt-4" id="simpan" formaction="<?= base_url('dashboard/laporanPeserta') ?>"><span id="mitraText">Export to PDF</span></button>
										<button type="submit" class="btn btn-success mt-4" id="simpan" formaction="<?= base_url('dashboard/laporanPesertaXls') ?>"><span id="mitraText">Export to XLS</span></button>
									</div>
								</form>
							</div>

						</div>
					</div>

					<div id="modalLaporanStatusPeserta" class="modal fade" role="dialog">
						<div class="modal-dialog modal-lg">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header" style="display:block;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Laporan Status Peserta</h4>
								</div>
								<form method="POST">
								    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-2">
												<label for="email">Dari </label>
											</div>
											<div class="col-sm-4">
												<input type="date" class="form-control" id="" name="tgl_awal" style="width:100%;" required="" autocomplete="off">
											</div>
											<div class="col-sm-2">
												<label for="pwd">Sampai</label>
											</div>
											<div class="col-sm-4">
												<input type="date" class="form-control" id="" name="tgl_akhir" style="width:100%;" required="" autocomplete="off">
											</div>
										</div>
										<div class="row mt-2">
											<div class="col-sm-2">
												<label for="email">Nama Pelatihan</label>
											</div>
											<div class="col-sm-10">
												<select class="form-control" name="nama_pelatihan">
													<option hidden value="">Silahkan Pilih</option>
													<?php foreach ($pelatihan as $row) { ?>
														<option value="<?= $row->kode_pelatihan; ?>"><?= $row->nama; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="row mt-2">
											<div class="col-sm-2">
												<label for="email">Status Peserta</label>
											</div>
											<div class="col-sm-10">
												<select class="form-control" name="status">
													<option hidden value="">Silahkan Pilih</option>
													<option value="Sudah Bekerja">Sudah Bekerja</option>
													<option value="Belum Bekerja">Belum Bekerja</option>
												</select>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-info mt-4" id="simpan" formaction="<?= base_url('dashboard/laporanStatusPeserta') ?>"><span id="mitraText">Export to PDF</span></button>
										<button type="submit" class="btn btn-success mt-4" id="simpan" formaction="<?= base_url('dashboard/laporanStatusPesertaXls') ?>"><span id="mitraText">Export to XLS</span></button>
									</div>
								</form>
							</div>

						</div>
					</div>

					<div id="modalLaporanLpkBlkln" class="modal fade" role="dialog">
						<div class="modal-dialog modal-lg">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header" style="display:block;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Laporan LPK & BLKLN</h4>
								</div>
								<form method="POST">
								    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
									<div class="modal-body">
										<div class="row">
											<div class="col-sm-2">
												<label for="email">Dari </label>
											</div>
											<div class="col-sm-4">
												<input type="date" class="form-control" id="" name="tgl_awal" style="width:100%;" required="" autocomplete="off" >
											</div>
											<div class="col-sm-2">
												<label for="pwd">Sampai</label>
											</div>
											<div class="col-sm-4">
												<input type="date" class="form-control" id="" name="tgl_akhir" style="width:100%;" required="" autocomplete="off" >
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-info mt-4" id="simpan" formaction="<?= base_url('dashboard/laporanLpkBlkln') ?>"><span id="mitraText">Export to PDF</span></button>
										<button type="submit" class="btn btn-success mt-4" id="simpan" formaction="<?= base_url('dashboard/laporanLpkBlklnXls') ?>"><span id="mitraText">Export to XLS</span></button>
									</div>
								</form>
							</div>

						</div>
					</div>

					<div id="modalLaporanRekapitulasi" class="modal fade" role="dialog">
						<div class="modal-dialog modal-lg">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header" style="display:block;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Laporan Rekapitulasi  Peserta Pelatihan</h4>
								</div>
								<div class="modal-body">
									<form  method="POST">
									    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
										<div class="row">
											<div class="col-sm-2">
												<label for="email">Dari </label>
											</div>
											<div class="col-sm-4">
												<input type="date" class="form-control" id="" name="tgl_awal" style="width:100%;" required="" autocomplete="off">
											</div>
											<div class="col-sm-2">
												<label for="pwd">Sampai</label>
											</div>
											<div class="col-sm-4">
												<input type="date" class="form-control" id="" name="tgl_akhir" style="width:100%;" required="" autocomplete="off" >
											</div>
										</div>          
										<div class="text-center">
											<button type="submit" class="btn btn-info mt-4" id="simpan" formaction="<?= base_url('dashboard/laporanRekapitulasi') ?>"><span id="mitraText">Export to PDF</span></button>
											<button type="submit" class="btn btn-success mt-4" id="simpan" formaction="<?= base_url('dashboard/laporanRekapitulasiXls') ?>"><span id="mitraText">Export to XLS</span></button>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>