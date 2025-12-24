<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title>Dashboard</title>

	<meta name="description" content="overview &amp; stats" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->
	<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
	<link rel="stylesheet" href="assets/css/chosen.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
	<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
	<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />

	<!-- text fonts -->
	<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
	<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
	<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

	<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

	<!-- inline styles related to this page -->

	<!-- ace settings handler -->
	<script src="assets/js/ace-extra.min.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="no-skin">
	<div id="navbar" class="navbar navbar-default ace-save-state" style="background-color: #0A2A43;">
		<!-- <div id="navbar" class="navbar navbar-default ace-save-state"> -->
		<div class="navbar-container ace-save-state" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="#" class="navbar-brand">
					<small style="display:flex; align-items:center; gap:8px;">
						<img src="assets/images/logo/logo_bps.png" style="width: 50px; height: 50px;" alt="">
						<div>
							<p style="margin-top: 5px; margin: 0">Badan Pusat Statistik</p>
							<p style="margin:0;font-size: 18px;">Kolaka Timur</p>
						</div>

					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation" style="margin-top: 10px;">
				<ul class="nav ace-nav">
					<li class="light-#0A2A43 dropdown-modal">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
							<span class="user-info">
								<small>Welcome,</small>
								Jason
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li>

							<li>
								<a href="profile.html">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div>

	<div class="main-container ace-save-state" id="main-container">
		<script type="text/javascript">
			try {
				ace.settings.loadState('main-container')
			} catch (e) {}
		</script>

		<div id="sidebar" class="sidebar responsive ace-save-state">
			<script type="text/javascript">
				try {
					ace.settings.loadState('sidebar')
				} catch (e) {}
			</script>

			<!-- ini Menu -->
			<ul class="nav nav-list">
				<li class="active">
					<a href="/Dashboard">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text"> Dashboard </span>
					</a>

					<b class="arrow"></b>
				</li>
				<li class="">
					<!-- <a href="/DataPortal"> -->
					<a href="/data-portal">
						<i class="menu-icon fa fa-pencil-square-o"></i>
						<span class="menu-text"> Data Wbsite </span>
					</a>
				</li>
			</ul>
			<!-- tutup list menu -->
			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>
		</div>

		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs ace-save-state" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="#"><?= str_replace("http://localhost:8080/", "", current_url()); ?></a>
						</li>

						<li>
							<a href="#">Tables</a>
						</li>
						<li class="active">Simple &amp; Dynamic</li>
					</ul><!-- /.breadcrumb -->
				</div>
				<div class="page-content">
					<?= $this->renderSection('content') ?>
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->
		<!-- ini header -->

		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">BPS</span>
						Kolaka Timur &copy; 2025-2026
					</span>

					&nbsp; &nbsp;
					<span class="action-buttons">
						<a href="#">
							<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
						</a>
					</span>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]> -->
	<script src="assets/js/jquery-2.1.4.min.js"></script>

	<!-- <![endif]-->

	<!--[if IE]>
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<![endif]-->
	<script type="text/javascript">
		if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
	</script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- page specific plugin scripts -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
	<script src="assets/js/dataTables.buttons.min.js"></script>
	<script src="assets/js/buttons.flash.min.js"></script>
	<script src="assets/js/buttons.html5.min.js"></script>
	<script src="assets/js/buttons.print.min.js"></script>
	<script src="assets/js/buttons.colVis.min.js"></script>
	<script src="assets/js/dataTables.select.min.js"></script>

	<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
	<script src="assets/js/jquery-ui.custom.min.js"></script>
	<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
	<script src="assets/js/chosen.jquery.min.js"></script>
	<script src="assets/js/spinbox.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/daterangepicker.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/js/jquery.knob.min.js"></script>
	<script src="assets/js/autosize.min.js"></script>
	<script src="assets/js/jquery.inputlimiter.min.js"></script>
	<script src="assets/js/jquery.maskedinput.min.js"></script>
	<script src="assets/js/bootstrap-tag.min.js"></script>
	<script src="assets/js/jquery.easypiechart.min.js"></script>
	<script src="assets/js/jquery.sparkline.index.min.js"></script>
	<script src="assets/js/jquery.flot.min.js"></script>
	<script src="assets/js/jquery.flot.pie.min.js"></script>
	<script src="assets/js/jquery.flot.resize.min.js"></script>

	<!-- ace scripts -->
	<script src="assets/js/ace-elements.min.js"></script>
	<script src="assets/js/ace.min.js"></script>

	<!-- inline scripts related to this page -->

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		function tambah_data_web() {
			$('#form_data_web').hide();
			$('#form_tambah_data_web').show();
			$('#titleTambahWeb').html('Tambah Data Website');
		}

		function batal_tambah_website() {
			$('#form_tambah_data_web').hide();
			$('#form_data_web').show();
		}

		// js Tambah data website
		$(document).ready(function() {
			$('#tambahWeb').on('submit', function(e) {
				// console.log("Masukk");
				let namaWebsite = $('#namaWebsite').val();
				let url = $('#url').val();
				let deskripsi = $('#deskripsi').val();
				let kategori = $('#kategori').val();
				// console.log(idLayanan, namaWebsite, url, sampul, deskripsi, kategori);
				if (namaWebsite === '') {

					alert('field namaWebsite  harus diisi!');
					return false;
				}
				if (url === '') {

					alert('field url  harus diisi!');
					return false;
				}
				if (deskripsi === '') {

					alert('field deskripsi  harus diisi!');
					return false;
				}
				if (kategori === '') {

					alert('field kategori  harus diisi!');
					return false;
				}

				e.preventDefault();
				var formData = new FormData(this);
				$.ajax({
					type: 'POST',
					url: '/data-portal/tambahWeb',
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					dataType: 'JSON',
					success: function(data) {
						alert('Data berhasil disimpan!');
						location.reload();
					},
					error: function(xhr, status, error) {
						alert('Terjadi kesalahan saat menyimpan data: ' + error);
					}
				});
			});
		});
		// js Tutup Tambah data website

		// js Hapus data website
		function hapusDataLayanan(idLayanan, gambarLayanan) {
			if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
				$.ajax({
					type: 'POST',
					url: '/data-portal/hapusLayanan',
					dataType: 'JSON',
					data: {
						'idLayanan': idLayanan,
						'gambarLayanan': gambarLayanan
					},
					success: function(response) {
						alert('Data berhasil dihapus!');
						location.reload();
					},
					error: function(xhr, status, error) {
						alert('Terjadi kesalahan saat menghapus data: ' + error);
					}
				});
			}
		}
		// js tutup Hapus data website

		// js Edit data website

		// js tutup Edit data website
	</script>
</body>

</html>