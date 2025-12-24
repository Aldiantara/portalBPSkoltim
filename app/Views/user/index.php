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
        <div class="logo">BPS KOLTIM <span>HUB</span></div>
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
        <!-- CARD HEADER LAYANAN -->
        <div class="card-layanan-header">

            <div class="header-text">
                <h2>
                    <b>Portal ini menyediakan akses cepat ke seluruh website dan aplikasi resmi
                        BPS Kabupaten Kolaka Timur</b>
                </h2>

                <p class="header-subtitle">
                    Terintegrasi, aman, dan mudah diakses oleh pegawai maupun masyarakat
                </p>

                <span class="header-divider"></span>
            </div>

            <form method="GET" class="kategori-form">
                <button type="submit" name="kategori" value="semua"
                    class="kategori-btn">
                    Semua Layanan
                </button>

                <button type="submit" name="kategori" value="internal"
                    class="kategori-btn ">
                    Layanan Internal
                </button>

                <button type="submit" name="kategori" value="eksternal"
                    class="kategori-btn">
                    Layanan Publik
                </button>
            </form>


        </div>


        <!-- SEARCH (TERPISAH DARI CARD) -->
        <form method="GET" class="search-box">
            <input type="hidden" name="kategori">

            <div class="search-field">
                <svg class="search-icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M21 21l-4.35-4.35m1.6-5.65a7.25 7.25 0 11-14.5 0 7.25 7.25 0 0114.5 0z"
                        fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                <input
                    type="text"
                    name="search"
                    placeholder="Cari Layanan atau Aplikasi BPS Kolaka Timur">
            </div>
        </form>


        <!-- GRID APLIKASI -->
        <!-- GRID APLIKASI -->
        <div class="grid-wrapper">
        </div>

    </section>

    <!-- FOOTER -->
    <footer id="kontak" class="footer">
        <div class="footer-container">

            <!-- KIRI -->
            <div class="footer-left">
                <div class="footer-logo">
                    <img src="aassets/logo.png" alt="Logo BPS">
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
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
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

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cards = document.querySelectorAll(".card");

            /* ================= SCROLL ANIMATION (BERULANG) ================= */
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

            /* ================= KLIK KATEGORI ================= */
            document.querySelectorAll(".kategori-form button").forEach(btn => {
                btn.addEventListener("click", () => {
                    cards.forEach(card => {
                        card.classList.remove("show");
                        void card.offsetHeight; // reset animasi
                        card.classList.add("show");
                    });
                });
            });
        });
    </script>
</body>

</html>