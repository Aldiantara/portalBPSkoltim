-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2026 at 02:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalbpskoltim`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `idLayanan` int(11) NOT NULL,
  `namaLayanan` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `deskripsiLayanan` varchar(250) NOT NULL,
  `gambarLayanan` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`idLayanan`, `namaLayanan`, `url`, `deskripsiLayanan`, `gambarLayanan`, `kategori`) VALUES
(9, 'Pengaduan Layanan', 'https://docs.google.com/forms/d/e/1FAIpQLScEs8u6GxOaP-Jfc6hrvhPb-iPTt3r_0daRwneZdE-d726NSw/viewform', 'Form Pengaduan Layanan BPS Kabupaten Kolaka Timur', '1767271033_e5775871d80433e0b08a.png', 'eksternal'),
(14, 'Monev', 'https://docs.google.com/spreadsheets/d/1glj2n60tbaowfQ86YpWAl0MrX1QBrwaaDIk2v5YFako/edit?pli=1&gid=559008837#gid=559008837', 'Melalui layanan ini, setiap inovasi dapat dianalisis efektivitas, dampak, dan pemanfaatannya, sehingga mendukung pengambilan keputusan yang tepat, peningkatan kualitas layanan, dan tercapainya tujuan organisasi secara optimal.', '1767270269_1259629fdc28a22a98d7.png', 'internal'),
(15, 'Mitigasi Resiko', 'https://docs.google.com/spreadsheets/d/1kgtBrsF4BI38PofisKRALb8OhvTwsGAAYM6wjciHNX4/edit?gid=1431751146#gid=1431751146', 'Layanan ini membantu pengguna memahami dan mengelola potensi risiko yang dapat memengaruhi operasional BPS Kabupaten Kolaka Timur.', '1767271136_aae6c8fed31cb9b89d4c.png', 'internal'),
(16, 'Halo Stat', 'https://docs.google.com/forms/d/e/1FAIpQLSe2wo2iAvWrZup1eJEfWNMCCydNu96gIGFwleoEDGyMKbVJpQ/viewform', 'HALO STATS (Layanan Konsultasi Statistik) adalah Inovasi layanan dari BPS Kabupaten Kolaka Timur yang memungkinkan masyarakat atau pengguna data untuk berkonsultasi secara langsung  dengan petugas kami terkait kebutuhan data statistik', '1767271231_62c378604d0776ab7064.png', 'eksternal'),
(17, 'Buku Tamu', 'https://docs.google.com/forms/d/e/1FAIpQLScmGQuEceRxPxI_Vapse8lyIfyEv8VzTma4nLE6gOPRII6sGQ/viewform', 'Buku tamu ini digunakan untuk mencatat seluruh kunjungan pengunjung ke Pusat Statistik Terpadu (PST) BPS Kabupaten Kolaka Timur. Memudahkan pencatatan data, memantau aktivitas pengunjung, dan memastikan keamanan serta keteraturan layanan di lingkunga', '1767271252_8a86efa9ef7fca819060.png', 'eksternal'),
(18, 'Sim Sakip', 'https://sites.google.com/view/simsakip7411/sakip?authuser=0', 'Visi, Misi, Tujuan, Sasaran Strategis, dan Indikator Kinerja Utama', '1767271628_426e4e0d411724fd77c8.png', 'eksternal'),
(19, 'Viva La Vida', 'https://sites.google.com/view/asisten-data?usp=sharing', 'VIVA LA VIDA ( Virtual Interaktif Visual Asisten untuk Layanan Analisis, Validasi, dan Informasi Data Andalan) merupakan pusat informasi data strategis Kabupaten Kolaka Timur. Portal ini menyajikan data resmi BPS secara interaktif dan mudah diakses u', '1767271591_7a1806314d2cd71e401a.png', 'eksternal'),
(20, 'Si Adaptasi', ' https://forms.zohopublic.com/bpskoltim7411gm1/form/ADOPSIArsipDokumendanPenyimpananDokumentasi/formperma/vj2y-wsUCNLEaaWNAX8Zl3YkebiAXuhuNprs3aIaY1Q', 'SI-ADAPTASI (Sistem Pengarsipan Dokumen dan Penyimpanan Dokumentasi) adalah sebuah sistem yang dirancang untuk mengelola, menyimpan, dan mengarsipkan berbagai bentuk dokumentasi kegiatan secara terstruktur dan efisien.', '1767271446_e7a7270ddaa4c470c012.png', 'internal'),
(21, 'Si Paritas ', 'https://forms.zohopublic.com/bpskoltim7411gm1/form/SiPARITASSistemPaktaIntegritasAntiGratifikasi/formperma/KEawZR7FqKxmINp00vh6FeSBYCeVjadBZYzsB7tiyC4', 'Si PARITAS (Sistem Pakta Integritas Anti Gratifikasi) Kolaka Timur', '1767271608_55f2e21f0fd46944ad86.png', 'internal');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idUser` int(11) NOT NULL,
  `namaLengkap` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idUser`, `namaLengkap`, `userName`, `password`) VALUES
(3, 'admin', 'admin', '$2y$10$r7Iht2ZQXP0E79nPYefpluML5PoCvmO2bKh2j/sXEZIW5BB4vsoO6');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `idvisit` int(11) NOT NULL,
  `ipaddress` varchar(100) NOT NULL,
  `visit_date` date NOT NULL,
  `userAgent` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`idvisit`, `ipaddress`, `visit_date`, `userAgent`, `created_at`) VALUES
(3, '::1', '2025-12-28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', '2025-12-28 10:11:57'),
(4, '::1', '2025-12-29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', '2025-12-29 08:04:51'),
(5, '::1', '2025-12-30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', '2025-12-30 07:34:06'),
(6, '::1', '2025-12-31', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', '2025-12-31 08:08:25'),
(7, '::1', '2026-01-01', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', '2026-01-01 10:42:05'),
(8, '::1', '2026-01-02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36 Edg/143.0.0.0', '2026-01-02 08:00:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`idLayanan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`idvisit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `idLayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `idvisit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
