<!DOCTYPE html>
<html lang="id">

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
	<link rel="stylesheet" href="assets/css/responsive.bootstrap.min.css">


	<!-- <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css"> -->

	<!-- RESPONSIVE -->
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap.min.css">


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

	<!-- <style>
		.table-responsive {
			overflow-x: auto;
			-webkit-overflow-scrolling: touch;
		}
	</style> -->

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
						<img src="assets/images/logo/logo_bps.png" style="width: 30px; height: 30px;" alt="">
						<div>
							<p style="font-family:Georgia;">BPS KOLAKA TIMUR</p>
							<!-- <p style="margin:0;font-size: 18px;">Kolaka Timur</p> -->
						</div>

					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation" style="margin-top: 10px;">
				<ul class="nav ace-nav">
					<li class="light-#0A2A43 dropdown-modal">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" alt="Jason's Photo" />
							<span class="user-info">
								<small>Welcome,</small>
								<?php echo session()->get('namaLengkap') ?>
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="/Register">
									<i class="ace-icon fa fa-cog"></i>
									Buat Akun baru
								</a>
							</li>
							<li>
								<a href="#" onclick="showProfile()">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="/logout">
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
					<a href="/contentDashboard">
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
					</ul><!-- /.breadcrumb -->
				</div>

				<!-- ini page content -->
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
							<i class="ace-icon fa fa-instagram light-blue bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-globe orange bigger-150"></i>
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
	<script src="assets/js/chart.umd.min.js"></script>

	<!-- page specific plugin scripts -->
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
	<script src="assets/js/dataTables.buttons.min.js"></script>
	<script src="assets/js/buttons.flash.min.js"></script>
	<script src="assets/js/buttons.html5.min.js"></script>
	<script src="assets/js/buttons.print.min.js"></script>
	<script src="assets/js/buttons.colVis.min.js"></script>
	<script src="assets/js/dataTables.select.min.js"></script>

	<script src="assets/js/html2canvas.min.js"></script>
	<script src="assets/js/jspdf.umd.min.js"></script>


	<!-- RESPONSIVE -->
	<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap.min.js"></script>


	<!-- ace scripts -->
	<script src="assets/js/ace-elements.min.js"></script>
	<script src="assets/js/ace.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#myTable').DataTable({
				scrollX: true,
				autoWidth: false,
				paging: true,
				ordering: true,
				info: true,
				responsive: true,
				autoWidth: false
			});
		});

		function tambah_data_web() {
			$('#form_data_web').hide();
			$('#form_tambah_data_web').show();
			$('#form_update_data_web').hide();
			$('#titleTambahWeb').html('Tambah Data Website');
		}

		function batal_tambah_website() {
			$('#form_tambah_data_web').hide();
			$('#form_data_web').show();
			$('#form_update_data_web').hide();
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
						window.location.reload();
					},
					error: function(xhr, status, error) {
						alert('Terjadi kesalahan saat menghapus data: ' + error);
					}
				});
			}
		}
		// js tutup Hapus data website

		// js Edit data website
		function editDataLayanan(idLayanan) {
			// console.log("ID Layanan: " + idLayanan); // Debugging line
			$.ajax({
				type: 'POST',
				url: '/data-portal/getLayanan/',
				dataType: 'JSON',
				data: {
					'idLayanan': idLayanan
				},
				success: function(data) {
					// console.log(data); // Debugging line

					// Isi form dengan data yang diambil
					if (data.status == true) {
						// tampilkan form edit
						$('#form_data_web').hide();
						$('#form_tambah_data_web').hide();
						$('#form_update_data_web').show();
						$('#titleUpdateWeb').html('Edit Data Website');

						// isi data ke form
						$('#idLayanan').val(data.data.idLayanan);
						$('#namaWebsite2').val(data.data.namaLayanan);
						$('#url2').val(data.data.url);
						$('#sampul2').html('<img style ="height:80px; width:100px" src="/gambar/' + data.data.gambarLayanan + '">');
						$('#deskripsi2').val(data.data.deskripsiLayanan);
						$('#kategori2').val(data.data.kategori);
					} else {
						alert('Gagal mengambil data layanan.');
						return;
					}
				},
				error: function(xhr, status, error) {
					alert('Terjadi kesalahan saat mengambil data: ' + error);
				}
			});
		}

		// fungsi update data website
		$(document).ready(function() {
			$('#updateWeb').on('submit', function(e) {
				// console.log('idLayanan: ' + $('#idLayanan').val());
				let namaWebsite = $('#namaWebsite2').val();
				let url = $('#url2').val();
				let deskripsi = $('#deskripsi2').val();
				let kategori = $('#kategori2').val();

				e.preventDefault();
				var formData = new FormData(this);
				$.ajax({
					type: 'POST',
					url: '/data-portal/updateLayanan',
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					dataType: 'JSON',
					success: function(data) {
						if (data.status === true) {
							alert('Data berhasil diupdate!');
							location.reload();
						} else {
							alert('Gagal mengupdate data layanan.');
							return;
						}
					},
					error: function(xhr, status, error) {
						alert('Terjadi kesalahan saat mengupdate data: ' + error);
					}
				});
			});
		});
		// js tutup Edit data website

		//fungsi jquery untuk profile
		function showProfile() {
			Swal.fire({
				title: 'Profil Pengguna',
				html: `
					<img src="<?= base_url('assets/images/avatars/avatar2.png') ?>" width="100" class="mb-3"><br>
					<b style="font-weight: bold; font-size: 20px;">Nama: <?= session('namaLengkap') ?></b> <br>
					<b style="font-weight: bold; font-size: 20px;">Username: <?= session('username') ?></b>
				`,
				showCloseButton: true,
				confirmButtonText: 'Tutup'
			});
		}

		//fungsi jquery grafik di dashboard
		<?php if (isset($visitorBulanan) && isset($tahun)) : ?> //fungsi cek visitor bulanan dan tahunan jika ada
			$(function() {

				// CEK LINE CHART
				const lineCanvas = document.getElementById('visitorChart');
				if (lineCanvas) {
					const ctxLine = lineCanvas.getContext('2d');

					new Chart(ctxLine, {
						type: 'line',
						data: {
							labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
							datasets: [{
								label: 'Jumlah Visitor <?= $tahun ?>',
								data: <?= json_encode($visitorBulanan) ?>,
								borderWidth: 2,
								tension: 0.3
							}]
						},
						options: {
							plugins: {
								title: {
									display: true,
									text: [
										'Diagram Garis',
									],
									font: {
										size: 18,
										weight: 'bold'
									},
									padding: {
										bottom: 5
									}
								}
							}
						}
					});

				}

				// CEK BAR CHART
				const barCanvas = document.getElementById('visitorBarChart');
				if (barCanvas) {
					const ctxBar = barCanvas.getContext('2d');

					new Chart(ctxBar, {
						type: 'bar',
						data: {
							labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
							datasets: [{
								label: 'Jumlah Visitor <?= $tahun ?>',
								data: <?= json_encode($visitorBulanan) ?>,
								borderWidth: 2,
								tension: 0.3
							}]
						},
						options: {
							plugins: {
								title: {
									display: true,
									text: [
										'Diagram Batang',
									],
									font: {
										size: 18,
										weight: 'bold'
									},
									padding: {
										bottom: 5
									}
								}
							}
						}
					});
				}

				// PIE CHART
				const pieCanvas = document.getElementById('visitorPieChart');
				if (pieCanvas) {
					const ctxPie = pieCanvas.getContext('2d');

					new Chart(ctxPie, {
						type: 'pie',
						data: {
							labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
							datasets: [{
								data: <?= json_encode($visitorBulanan) ?>,
							}]
						},
						options: {
							responsive: true,
							maintainAspectRatio: false,
							plugins: {
								title: {
									display: true,
									text: [
										'Diagram Lingkaran',
										'Distribusi Visitor per Bulan <?= $tahun ?? "" ?>'
									],
									position: 'top',
									font: {
										size: 18,
										weight: 'bold'
									}
								},
								legend: {
									position: 'bottom'
								}
							}
						}
					});
				}

			});
		<?php endif; ?>
		// tutup fungsi cek visitor bulanan dan tahunan jika ada

		// resize the chosen on window resize
		$(window).on('resize', function() {
			$('#myTable').DataTable().columns.adjust().responsive.recalc();
		});

		$('#sampul').ace_file_input({
			no_file: 'No File ...',
			btn_choose: 'Choose',
			btn_change: 'Change',
			droppable: false,
			onchange: null,
			thumbnail: false
		});
		$('#sampul2').ace_file_input({
			no_file: 'No File ...',
			btn_choose: 'Choose',
			btn_change: 'Change',
			droppable: false,
			onchange: null,
			thumbnail: false
		});
		$('#modal-form').on('shown.bs.modal', function() {
			if (!ace.vars['touch']) {
				$(this).find('.chosen-container').each(function() {
					$(this).find('a:first-child').css('width', '210px');
					$(this).find('.chosen-drop').css('width', '210px');
					$(this).find('.chosen-search input').css('width', '200px');
				});
			}
		});
	</script>
</body>

</html>