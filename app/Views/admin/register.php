<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" />

    <!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="login-layout">
    <div class="main-container">
        <div class="main-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="login-container">
                        <div class="center">
                            <h1>
                                <img src="assets/images/logo/logo_bps.png" style="width: 50px; height: 50px;" alt="">
                                <span class="red">BPS</span>
                                <span class="white" id="id-text2">KOLAKA TIMUR</span>
                            </h1>
                            <h4 class="blue" id="id-company-text">&copy; Pusat Layanan BPS Kolaka Timur</h4>
                        </div>

                        <div class="space-6"></div>

                        <div class="position-relative">
                            <div id="login-box" class="login-box visible widget-box no-border">
                                <div class="widget-body">
                                    <div class="widget-main">
                                        <h4 class="header green lighter bigger">
                                            <i class="ace-icon fa fa-users blue"></i>
                                            New User Registration
                                        </h4>

                                        <div class="space-6"></div>
                                        <p> Enter your details to begin: </p>

                                        <form>
                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="namaLengkap" id="namaLengkap" name="namaLengkap" class="form-control" placeholder="Nama Lengkap" autofocus />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="username" />
                                                        <i class="ace-icon fa fa-user"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password" />
                                                        <i class="ace-icon fa fa-lock"></i>
                                                    </span>
                                                </label>

                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input type="password" id="konfirmasiPassword" name="konfirmasiPassword" class="form-control" placeholder="Konfirmasi Password" autocomplete="new-password" />
                                                        <i class="ace-icon fa fa-retweet"></i>
                                                    </span>
                                                </label>

                                                <div class="space-24"></div>

                                                <div class="clearfix">
                                                    <button type="reset" class="width-30 pull-left btn btn-sm">
                                                        <i class="ace-icon fa fa-refresh"></i>
                                                        <span class="bigger-110">Reset</span>
                                                    </button>

                                                    <button type="button" onclick="register()" class="width-65 pull-right btn btn-sm btn-success">
                                                        <span class="bigger-110">Register</span>

                                                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="toolbar clearfix">
                                        <div>
                                            <a href="/contentDashboard" class="forgot-password-link">
                                                <i class="ace-icon fa fa-arrow-left"></i>
                                                Batal
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- /.widget-body -->
                            </div><!-- /.login-box -->
                        </div><!-- /.position-relative -->

                        <div class="navbar-fixed-top align-right">
                            <br />
                            &nbsp;
                            <a id="btn-login-dark" href="#">Dark</a>
                            &nbsp;
                            <span class="blue">/</span>
                            &nbsp;
                            <a id="btn-login-blur" href="#">Blur</a>
                            &nbsp;
                            <span class="blue">/</span>
                            &nbsp;
                            <a id="btn-login-light" href="#">Light</a>
                            &nbsp; &nbsp; &nbsp;
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.main-content -->
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.6.1/dist/sweetalert2.all.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        jQuery(function($) {
            $(document).on('click', '.toolbar a[data-target]', function(e) {
                e.preventDefault();
                var target = $(this).data('target');
                $('.widget-box.visible').removeClass('visible'); //hide others
                $(target).addClass('visible'); //show target
            });
        });



        //you don't need this, just used for changing background
        jQuery(function($) {
            $('#btn-login-dark').on('click', function(e) {
                $('body').attr('class', 'login-layout');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'blue');

                e.preventDefault();
            });
            $('#btn-login-light').on('click', function(e) {
                $('body').attr('class', 'login-layout light-login');
                $('#id-text2').attr('class', 'grey');
                $('#id-company-text').attr('class', 'blue');

                e.preventDefault();
            });
            $('#btn-login-blur').on('click', function(e) {
                $('body').attr('class', 'login-layout blur-login');
                $('#id-text2').attr('class', 'white');
                $('#id-company-text').attr('class', 'light-blue');

                e.preventDefault();
            });

        });
    </script>
    <script type="text/javascript">
        function register() {
            let namaLengkap = $('#namaLengkap').val();
            let username = $('#username').val();
            let password = $('#password').val();
            let konfirmasiPassword = $('#konfirmasiPassword').val();

            // Validasi input
            if (namaLengkap == "") {
                Swal.fire({
                    title: "error!",
                    text: "Nama Lengkap harus diisi!",
                    icon: "error",
                    confirmButtonText: 'OK'

                });
                return false;
            }
            if (username == "") {
                Swal.fire({
                    title: "error!",
                    text: "Username harus diisi!",
                    icon: "error",
                    confirmButtonText: 'OK'
                })
                return false;
            }
            if (password == "") {
                Swal.fire({
                    title: "error!",
                    text: "Password harus diisi!",
                    icon: "error",
                    confirmButtonText: 'OK'
                })
                return false;
            }
            if (konfirmasiPassword == "") {
                Swal.fire({
                    title: "error!",
                    text: "Konfirmasi Password harus diisi!",
                    icon: "error",
                    confirmButtonText: 'OK'
                })
                return false;
            }
            if (password != konfirmasiPassword) {
                Swal.fire({
                    title: "error!",
                    text: "Password dan Konfirmasi Password tidak sesuai!",
                    icon: "error",
                    confirmButtonText: 'OK'
                })
                return false;

            }
            $.ajax({
                url: "/registerAdmin",
                type: "POST",
                dataType: "JSON",
                data: {
                    'namaLengkap': namaLengkap,
                    'username': username,
                    'password': password
                },
                success: function(data) {
                    console.log(data);
                    // Swal.fire({
                    //     title: "Success!",
                    //     text: "Berhasil Melakukan Registrasi!",
                    //     icon: "success",
                    //     confirmButtonText: 'OK'
                    // }).then((result) => {
                    //     if (result.isConfirmed) {
                    //         window.location.href = "<?= base_url('/dashboard') ?>";
                    //     }
                    // });
                    if (data.status === 'error') {
                        Swal.fire({
                            icon: 'error',
                            title: "Oops...",
                            text: data.message
                        });
                        return;
                    }

                    if (data.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: data.message
                        }).then(() => {
                            window.location.href = "<?= base_url('dashboard') ?>";
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Terjadi kesalahan pada server!",
                        confirmButtonText: 'OK'
                    });
                }
            });

            // Lakukan proses pendaftaran (misalnya, kirim data ke server)
            // alert('Pendaftaran berhasil untuk ' + namaLengkap + ' dengan username ' + username);
        }
    </script>
</body>

</html>