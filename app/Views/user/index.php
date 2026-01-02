<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="/aassets/Style/style24.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">BPS KOLAKA<span>TIMUR</span></div>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#layanan">Layanan</a></li>
            <li><a href="#kontak">Kontak</a></li>
            <li><a href="/Login" class="btn-login">Login</a></li>
        </ul>
    </nav>

    <!-- HERO -->
    <section>
        <header class="hero">

            <div class="scroll-indicator"></div>
            <span class="particle" style="left:20%; animation-delay:0s"></span>
            <span class="particle" style="left:45%; animation-delay:4s"></span>
            <span class="particle" style="left:70%; animation-delay:8s"></span>

            <div class="hero-overlay"></div>

            <div class="hero-content">

                <h1>
                    PORTAL LAYANAN<br>
                    <span class="highlight">DIGITAL BPS</span><br>
                    <span class="highlight">KABUPATEN </span><br> KOLAKA TIMUR
                </h1>

                <p>
                    Pusat Akses Terpadu yang Menyediakan Informasi Website, Aplikasi,
                    dan Layanan Digital Resmi Badan Pusat Statistik
                    Kabupaten Kolaka Timur
                </p>
                <a href="#layanan" class="hero-btn">Jelajahi Layanan</a>

            </div>
        </header>
    </section>

    <!-- LAYANAN -->
    <section id="layanan" class="layanan">

        <!-- CARD HEADER LAYANAN -->
        <div class="card-layanan-header">
            <div class="header-text">
                <h2>
                    <b>Portal Layanan Digital BPS Kabupaten Kolaka Timur</b>
                </h2>
                <p class="header-subtitle" id="typingText"></p>


                <span class="header-divider"></span>
            </div>

            <!-- PILIHAN KATEGORI -->
            <div class="kategori-wrapper">
                <div class="kategori-pill">
                    <button onclick="showAllLayanan(this)" class="kategori-item active">Semua Layanan</button>
                    <button onclick="showInternal(this)" class="kategori-item">Layanan Internal</button>
                    <button onclick="showExternal(this)" class="kategori-item">Layanan Publik</button>
                </div>
            </div>
        </div>

        <!-- SEARCH -->
        <form method="GET" class="search-box" onsubmit="return false;">
            <input type="hidden" name="kategori">
            <div class="search-field">
                <svg class="search-icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M21 21l-4.35-4.35m1.6-5.65a7.25 7.25 0 11-14.5 0 7.25 7.25 0 0114.5 0z"
                        fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input type="text" id="searchInput" name="search" placeholder="Cari Layanan atau Aplikasi BPS Kolaka Timur">
            </div>
        </form>

        <!-- GRID APLIKASI -->
        <div class="grid-wrapper" id="formAllLayanan">
            <?php foreach ($data as $d) : ?>
                <div class="card">
                    <div class="card-icon">
                        <img src="<?= base_url('gambar/' . $d['gambarLayanan']) ?>">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><?= $d['namaLayanan']; ?></h3>
                        <p class="card-desc"><?= $d['deskripsiLayanan']; ?></p>
                        <a href="<?= $d['url']; ?>" class="btn" target="_blank">Kunjungi Layanan</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- INTERNAL -->
        <div id="formInternal" style="display: none;">
            <div id="tampilInternal" class="grid-wrapper"></div>
        </div>

        <!-- EKSTERNAL -->
        <div id="formExternal" style="display: none;">
            <div id="tampilLayananPublik" class="grid-wrapper"></div>
        </div>


    </section>


    <!-- FOOTER -->
    <footer id="kontak" class="footer">
        <div class="footer-container">

            <!-- KIRI -->
            <div class="footer-left">
                <div class="footer-logo">
                    <img src="/aassets/logo.png" alt="Logo BPS">
                </div>

                <div class="footer-text">
                    <h4>
                        BADAN PUSAT STATISTIK<br>
                        KABUPATEN KOLAKA TIMUR
                    </h4>
                    <p>
                        Badan Pusat Statistik Kabupaten Kolaka Timur<br>
                        (BPS–Statistics of Kolaka Timur Regency)
                    </p>
                </div>
            </div>


            <!-- KANAN (VERTIKAL) -->
            <div class="footer-right">
                <div class="footer-contact">
                    <h4>Ikuti Kami di Sosial Media</h4>
                    <div class="footer-social-wrap">
                        <div class="footer-social">
                            <a href="https://www.instagram.com/bps_statistics"><i class="fab fa-instagram"></i></a>
                            <a href="https://web.facebook.com/bpsstatistics"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/bps_statistics"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UCn4IaaxHaaP-mAjZzrAtixA"><i class="fab fa-youtube"></i></a>

                        </div>
                        <p>
                            Kompleks Perkantoran Pemda Desa Lalingato <br>
                            Kecamatan Tirawuta<br>
                            Telp. 0821-8888-7411 |
                            Email:
                            <a href="mailto:bps7411@bps.go.id">bps7411@bps.go.id</a>
                        </p>
                    </div>
                </div>

            </div>

            <!-- HAK CIPTA -->
            <div class="footer-bottom">
                <p class="footer-copy">
                    Dibuat oleh <strong>Asisten Pranata Komputer</strong> – Program
                    <strong>MagangHub Batch 3 Kementerian Ketenagakerjaan RI</strong><br>
                    © 2025 <strong>BPS Kabupaten Kolaka Timur</strong>. Seluruh Hak Cipta Dilindungi.
                </p>
            </div>
    </footer>

    <script src="/assets/js/jquery-2.1.4.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.6.1/dist/sweetalert2.all.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cards = document.querySelectorAll(".card");

            // ===== Scroll Animation =====
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("show");
                    } else {
                        entry.target.classList.remove("show");
                    }
                });
            }, {
                threshold: 0.15
            });
            cards.forEach(card => observer.observe(card));

            // ===== Pencarian =====
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('keyup', function() {
                clearTimeout(this.delay);
                this.delay = setTimeout(() => searchLayanan(), 400);
            });
        });

        // Fungsi reset button aktif
        function setActiveButton(btn) {
            document.querySelectorAll('.kategori-item').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        }

        // ===== Fungsi tampil kategori =====
        function showAllLayanan(btn) {
            setActiveButton(btn);
            $('#formAllLayanan').show();
            $('#formInternal').hide();
            $('#formExternal').hide();
            document.querySelector('input[name="kategori"]').value = '';
        }

        function showInternal(btn) {
            setActiveButton(btn);
            $('#formInternal').show();
            $('#formAllLayanan').hide();
            $('#formExternal').hide();
            document.querySelector('input[name="kategori"]').value = 'internal';

            $.ajax({
                url: '/homeInternal',
                method: 'POST',
                dataType: 'JSON',
                success: function(response) {
                    let html = '';
                    if (response.status === '1') {
                        response.data.forEach(function(data) {
                            html += `<div class="card">
                        <div class="card-icon"><img src="<?= base_url('gambar/') ?>${data.gambarLayanan}"></div>
                        <div class="card-content">
                            <h3 class="card-title">${data.namaLayanan}</h3>
                            <p class="card-desc">${data.deskripsiLayanan}</p>
                            <a href="${data.url}" target="_blank" class="btn">Kunjungi Layanan</a>
                        </div>
                    </div>`;
                        });
                        $('#tampilInternal').html(html);
                    } else {
                        $('#tampilInternal').html('<p>' + response.pesan + '</p>');
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan pada server!'
                    });
                }
            });
        }

        function showExternal(btn) {
            setActiveButton(btn);
            $('#formExternal').show();
            $('#formAllLayanan').hide();
            $('#formInternal').hide();
            document.querySelector('input[name="kategori"]').value = 'external';

            $.ajax({
                url: '/homeEksternal',
                method: 'POST',
                dataType: 'JSON',
                success: function(response) {
                    let html = '';
                    if (response.status === '1') {
                        response.data.forEach(function(data) {
                            html += `<div class="card">
                        <div class="card-icon"><img src="<?= base_url('gambar/') ?>${data.gambarLayanan}"></div>
                        <div class="card-content">
                            <h3 class="card-title">${data.namaLayanan}</h3>
                            <p class="card-desc">${data.deskripsiLayanan}</p>
                            <a href="${data.url}" target="_blank" class="btn">Kunjungi Layanan</a>
                        </div>
                    </div>`;
                        });
                        $('#tampilLayananPublik').html(html);
                    } else {
                        $('#tampilLayananPublik').html('<p>' + response.pesan + '</p>');
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan pada server!'
                    });
                }
            });
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const searchInput = document.getElementById('searchInput');
            const formSearch = document.querySelector('.search-box');

            //cegah submit (ENTER)
            formSearch.addEventListener('submit', e => e.preventDefault());

            searchInput.addEventListener('keyup', function() {
                const keyword = this.value.toLowerCase();

                let cards;

                //tentukan container aktif
                if ($('#formInternal').is(':visible')) {
                    cards = document.querySelectorAll('#tampilInternal .card');
                } else if ($('#formExternal').is(':visible')) {
                    cards = document.querySelectorAll('#tampilLayananPublik .card');
                } else {
                    cards = document.querySelectorAll('#formAllLayanan .card');
                }

                cards.forEach(card => {
                    const text = card.innerText.toLowerCase();
                    card.style.display = text.includes(keyword) ? '' : 'none';
                });
            });

        });
    </script>
    <script>
        const text = "Satu portal terpadu yang menghadirkan berbagai layanan resmi BPS Kolaka Timur. Memudahkan pegawai maupun masyarakat dalam mengakses informasi, data, dan aplikasi resmi secara aman, cepat, dan efisien dalam satu tempat.";

        const element = document.getElementById("typingText");
        let index = 0;

        function typeEffect() {
            if (index < text.length) {
                element.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeEffect, 35); // kecepatan mengetik
            } else {
                setTimeout(() => {
                    element.innerHTML = "";
                    index = 0;
                    typeEffect();
                }, 4000); // jeda sebelum ulang
            }
        }

        typeEffect();
    </script>
</body>

</html>