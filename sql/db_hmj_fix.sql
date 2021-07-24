-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2020 pada 16.09
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hmj_fix`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'inti_hmj', 'General User'),
(3, 'pemilih', 'pemilih digunakan untuk di sistem evoting'),
(4, 'koordinator_sie', 'koordinator sie digunakan untuk di sistem eors'),
(5, 'inti_kepanitiaan', 'inti kepanitiaan digunakan untuk sistem eors');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_pilihan` int(11) NOT NULL,
  `nama_pilihan` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_pilihan`, `nama_pilihan`, `create_at`) VALUES
(38, 'Ketua', '2020-09-17 23:14:39'),
(39, 'Wakil Ketua', '2020-09-17 23:14:39'),
(40, 'Bidang 1', '2020-09-17 23:15:32'),
(41, 'Bidang 2', '2020-09-17 23:15:32'),
(42, 'Bidang 3', '2020-09-17 23:15:32'),
(43, 'Bidang 4', '2020-09-17 23:15:32'),
(44, 'Bidang 5', '2020-09-17 23:15:32'),
(45, 'Panitia Inti Lainnya', '2020-09-17 23:16:09'),
(46, 'Administrator', '2020-09-17 23:18:02'),
(47, 'Sie Acara', '2020-09-26 23:58:42'),
(48, 'Sie Humas', '2020-09-26 23:58:49'),
(49, 'Sie Expo', '2020-09-26 23:58:58'),
(50, 'Sie Penggalian Dana', '2020-10-07 12:45:59'),
(51, 'Sie Publikasi dan Dokumentasi', '2020-10-07 12:46:37'),
(52, 'Sie Teknologi dan Informasi', '2020-10-07 12:43:58'),
(53, 'Sie Kesekretariatan', '2020-10-07 12:44:16'),
(54, 'Sie Pendaftaran', '2020-10-07 12:44:29'),
(55, 'Sie MGS', '2020-10-07 12:44:43'),
(56, 'Sie Social Event', '2020-10-07 12:45:06'),
(57, 'Sie Lomba Business IT Case', '2020-10-17 11:29:55'),
(58, 'Sie Lomba UI/UX Design', '2020-10-17 23:57:06'),
(59, 'Sie Lomba Essay Nasional', '2020-10-17 11:30:21'),
(60, 'Sie Lomba Hacking The Game', '2020-10-17 11:30:36'),
(61, 'Sie Lomba LIDP', '2020-10-26 13:19:33'),
(62, 'Sie Lomba Coding Pandemic', '2020-10-17 11:31:00'),
(63, 'Sie Lomba Mobile Legend', '2020-10-17 11:31:14'),
(64, 'Sie Lomba Desain Poster', '2020-10-17 11:31:33'),
(65, 'Sie Lomba Musik Cover', '2020-10-17 11:31:44'),
(66, 'Sie Lomba Tiktok', '2020-10-17 11:31:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `links`
--

CREATE TABLE `links` (
  `id_links` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `href` varchar(200) NOT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `links`
--

INSERT INTO `links` (`id_links`, `title`, `icon`, `href`, `type`) VALUES
(9, 'Website', 'fas fa-globe', 'web/home', 'main'),
(10, 'E-ORS', 'fas fa-users', 'eors/home', 'main'),
(11, 'INTEGER', 'fas fa-chess', 'integer/home', 'main');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `readme`
--

CREATE TABLE `readme` (
  `Kode` varchar(2) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `readme`
--

INSERT INTO `readme` (`Kode`, `Keterangan`) VALUES
('s1', 'Sistem HMJ dan Repositori'),
('s2', 'Sistem Inventaris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_detail_hmj`
--

CREATE TABLE `s1_detail_hmj` (
  `id_detail_hmj` int(11) NOT NULL,
  `id_hmj` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `deskripsi_bidang` text NOT NULL,
  `ketua_nama` varchar(50) NOT NULL,
  `ketua_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s1_detail_hmj`
--

INSERT INTO `s1_detail_hmj` (`id_detail_hmj`, `id_hmj`, `nama_bidang`, `deskripsi_bidang`, `ketua_nama`, `ketua_foto`) VALUES
(7, 16, 'Pendidikan dan Penalaran ', '<p style=\"text-align:justify\">Bidang yang menaungi dan memfasilitasi mahasiswa Jurusan Teknik Informatika dalam bidang pendidikan dan penalaran, seperti PKM, PMW dan Jurnalistik. Bidang 1 HMJ Teknik Informatika terdiri atas dua sub-bidang yaitu Sub-Bidang Karya Ilmiah dan Sub-Bidang Jurnalistik</p>\r\n', ' Gede Budi Setiawan', '20200824140454.png'),
(8, 16, 'Minat dan Bakat ', '<p style=\"text-align:justify;\">Bidang yang menaungi dan memfasilitasi Minat dan Bakat mahasiswa Teknik Informatika baik dibidang Akademik maupun non Akademik. Didalam bidang 2 terdapat beberapa sub bidang yang diantaranya adalah Sub Bidang Olaharaga dan Sub Bidang Seni yang didalamnya dibagi menjadi sub-sub bidang lainnya.</p>', 'Putu Erik Hendrawan', '20200824140548.png'),
(9, 16, 'Kesejahteraan Mahasiswa', '<p style=\"text-align:justify;\">Bidang yang bertugas menaungi bagian kerumah tanggaan pada intern HMJ TI. Pada bidang 3 terdapat beberapa Sub bidang yakni Sub Bidang Kewirausahaan, Sub Bidang Inventaris, Sub Bidang Kesejahteraan Mahasiswa, dan Sub Bidang Suka Duka</p>', 'Rifki Nur Fauzi', '20200824140629.png'),
(10, 16, 'Pengabdian Masyarakat', '<p style=\"text-align:justify;\">Bidang yang bertugas menaungi pengabdian kepada masyarakat. Pada Bidang 4 HMJ TI memiliki beberapa sub bidang didalamnya, diantaranya adalah Sub Bidang Humas, Sub Bidang Intern Kampus, dan Sub Bidang Masyarakat.</p>', 'Willy Yogantara Sidhi', '20200824140750.png'),
(11, 16, 'Teknologi', '<p style=\"text-align:justify;\">Bidang yang menaungi aktivitas media informasi HMJ TI serta komunitas-komunitas yang bergerak dalam bidang TI. Pada bidang 5, terdapat beberapa sub bidang yakni Sub Bidang Informasi dan Komunikasi, Sub Bidang Komunitas TKJ dan Robotik, Sub Bidang Komunitas Programming, dan Sub Bidang Komunitas Multimedia.</p>', 'I Gede Riyan Ardi Darmawan', '20200824140840.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_detail_kegiatan`
--

CREATE TABLE `s1_detail_kegiatan` (
  `id_detail_kegiatan` int(11) NOT NULL,
  `id_kegiatan_hmj` int(11) NOT NULL,
  `nama_repositori` varchar(50) NOT NULL,
  `deskripsi_repositori` text NOT NULL,
  `kode_repositori` varchar(255) DEFAULT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s1_detail_kegiatan`
--

INSERT INTO `s1_detail_kegiatan` (`id_detail_kegiatan`, `id_kegiatan_hmj`, `nama_repositori`, `deskripsi_repositori`, `kode_repositori`, `create_by`, `create_at`, `update_at`) VALUES
(13, 25, 'LPJ IT Mission #1', '<p>Berikut merupakan file LPJ IT Mission #1</p>\r\n', '01092020205117.pdf', 'Admin', '2020-09-01 20:51:17', '2020-09-01 20:51:17'),
(14, 25, 'Proposal Kegiatan IT Mission #1', '<p>Berikut merupakan file proposal kegiatan IT Mission #1</p>\r\n', '01092020205236.pdf', 'Admin', '2020-09-01 20:52:36', '2020-09-01 20:52:36'),
(15, 25, 'Surat Peminjaman Fasilitas', '<p style=\"text-align:justify\">Berikut merupakan surat peminjaman fasilitas Zoom terhadap UPT TIK. Untuk Desain, dan Dokumentasi Kegiatan dapat mengunjungi Link Google Drive Berikut<br />\r\nLink : <a href=\"https://drive.google.com/drive/folders/1y1YrsfmgdYvMdNAFXvXfTAhqzl9B69ru?usp=sharing\">Dokumentasi Kegiatan IT Mission #1</a></p>\r\n', '01092020205916.pdf', 'Admin', '2020-09-01 20:59:16', '2020-09-01 20:59:16'),
(16, 25, 'Notula Bimbingan Kegiatan - 1', '<p>Berikut merupakan Notula Bimbingan Kegiatan bersama Bapak Gede Aditra Pradnyana,S.Kom.,M.Kom</p>\r\n', '01092020210110.pdf', 'Admin', '2020-09-01 21:01:10', '2020-09-01 21:01:10'),
(17, 25, 'Notula Bimbingan Kegiatan - 2', '<p style=\"text-align:justify\">Berikut merupakan Notula Bimbingan kegiatan bersama Ibu Dr.Luh Joni Erawati Dewi,S.T.,M.Pd</p>\r\n', '01092020210212.pdf', 'Admin', '2020-09-01 21:02:12', '2020-09-01 21:02:12'),
(18, 25, 'Notula Rapat Kepantiaan - 1', '<p>Berikut merupakan Notula Rapat Kepanitiaan - 1</p>\r\n', '01092020210328.pdf', 'Admin', '2020-09-01 21:03:28', '2020-09-01 21:03:28'),
(19, 25, 'Notula Rapat Kepantiaan - 2', '<p>Berikut merupakan Notula Rapat Kepanitiaan - 2</p>\r\n', '01092020210400.pdf', 'Admin', '2020-09-01 21:04:00', '2020-09-01 21:04:00'),
(20, 25, 'Notula Rapat Kepantiaan - 3', '<p>Berikut merupakan Notula Rapat Kegiatan - 3</p>\r\n', '01092020210429.pdf', 'Admin', '2020-09-01 21:04:29', '2020-09-01 21:04:29'),
(21, 25, 'Notula Rapat Kepantiaan - 4', '<p>Berikut merupakan Notula Rapat Kegiatan - 4</p>\r\n', '01092020210450.pdf', 'Admin', '2020-09-01 21:04:50', '2020-09-01 21:04:50'),
(22, 25, 'Notula Rapat Kepantiaan - 5', '<p>Berikut merupakan Notula Rapat Kegiatan - 5</p>\r\n', '01092020210512.pdf', 'Admin', '2020-09-01 21:05:12', '2020-09-01 21:05:12'),
(24, 24, 'LPJ Kegiatan TI Peduli ', '<p>Berikut merupakan file LPJ kegiatan TI Peduli Pencegahan Penyebaran COVID-19</p>\r\n', '06092020084503.pdf', 'Willy Yogantara Sidhi', '2020-09-06 08:45:03', '2020-09-06 08:45:03'),
(25, 24, 'Proposal Kegiatan TI Peduli', '<p>Berikut merupakan proposal kegiatan TI Peduli Pencegahan Penyebaran COVID-19</p>\r\n', '06092020085013.pdf', 'Willy Yogantara Sidhi', '2020-09-06 08:50:13', '2020-09-06 08:50:13'),
(26, 24, 'Surat Menghadiri Kegiatan TI Peduli', '<p>Berikut merupakan file surat-surat untuk menghadiri kegiatan TI Peduli Pencegahan Penyebaran COVID-19</p>\r\n', '06092020092305.pdf', 'Willy Yogantara Sidhi  ?&gt;', '2020-09-06 09:23:05', '2020-09-06 10:24:47'),
(27, 24, 'Surat Izin  Melakukan Kegiatan TI Peduli', '<p>Berikut merupakan file surat izin&nbsp;kepada Kapolsek Singaraja untuk melakukan kegiatan TI Peduli Pencegahan COVID-19</p>\r\n', '06092020092802.pdf', 'Willy Yogantara Sidhi', '2020-09-06 09:28:02', '2020-09-06 09:28:02'),
(28, 24, 'Surat Permohonan Dana kegiatan TI Peduli', '<p>Berikut merupakan file surat permohonan dana untuk kegiatan TI Peduli Pencegahan Penyebaran COVID-19</p>\r\n', '06092020093541.pdf', 'Willy Yogantara Sidhi', '2020-09-06 09:35:41', '2020-09-06 09:35:41'),
(31, 24, 'Notula Bimbingan kegiatan-1', '<p>Berikut merupakan Notula Bimbingan Kegiatan Bersama Bapak Gede Aditra Pradnyana,S.Kom.,M.Kom</p>\r\n', '06092020095908.pdf', 'Willy Yogantara Sidhi', '2020-09-06 09:59:08', '2020-09-06 09:59:08'),
(32, 24, 'Notula Rapat Kepanitian-1', '<p>Berikut Merupakan File Notula Rapat&nbsp; Kegiatan -1</p>\r\n', '06092020100119.pdf', 'Willy Yogantara Sidhi  ?&gt;', '2020-09-06 10:01:20', '2020-09-06 10:14:42'),
(33, 24, 'Notula Rapat Kepanitian-2', '<p>Berikut Merupakan File Notula Rapat Kegiatan-2</p>\r\n', '06092020100322.pdf', 'Willy Yogantara Sidhi  ?&gt;', '2020-09-06 10:03:22', '2020-09-06 10:05:53'),
(34, 24, 'Notula Rapat Kepanitian-3', '<p>Berikut Merupakan File Notula Rapat Kegiatan -3</p>\r\n', '06092020101155.pdf', 'Willy Yogantara Sidhi', '2020-09-06 10:11:55', '2020-09-06 10:11:55'),
(44, 26, 'Proposal Kegiatan IT Mission #2', '<p>Berikut merupakan Proposal Kegiatan IT Mission #2</p>\r\n', '10092020092251.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:22:51', '2020-09-10 09:22:51'),
(46, 26, 'Notula Bimbingan Kegiatan 2', '<p>Berikut merupakan Notula Bimbingan Kegiatan 2</p>\r\n', '10092020092432.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:24:32', '2020-09-10 09:24:32'),
(47, 26, 'Notula Bimbingan Kegiatan 1', '<p>Berikut merupakan Notula Bimbingan Kegiatan 1</p>\r\n', '10092020092510.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:25:10', '2020-09-10 09:25:10'),
(48, 26, 'Notula Rapat Panitia - 3', '<p>Berikut merupakan Notula Rapat Panitia 3</p>\r\n', '10092020092538.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:25:38', '2020-09-10 09:25:38'),
(49, 26, 'Notula Rapat Panitia - 2', '<p>Berikut merupakan Notula Rapat Panitia 2</p>\r\n', '10092020092602.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:26:02', '2020-09-10 09:26:02'),
(50, 26, 'Notula Rapat Panitia - 1', '<p>Berikut merupakan Notula Rapat Panitia 1</p>\r\n', '10092020092635.pdf', 'Rifki Nur Fauzi', '2020-09-10 09:26:35', '2020-09-10 09:26:35'),
(51, 26, 'File LPJ IT Mission #2', '<p>Berikut merupakan File LPJ IT Mission #2</p>\r\n', '12092020101453.pdf', 'Rifki Nur Fauzi', '2020-09-12 10:14:53', '2020-09-12 10:14:53'),
(53, 26, 'Surat Peminjaman Fasilitas', '<p>Berikut merupakan surat peminjaman fasilitas Zoom terhadap UPT TIK. Untuk Desain dan Dokumentasi Kegiatan dapat mengunjugi Link Google Drive berikut.</p>\r\n\r\n<p>Link :&nbsp;<a href=\"https://drive.google.com/drive/u/0/folders/1OHQi5qsLZ3TFqaSiJNKFy_SFi2tddOgw\">Dokumentasi Kegiatan IT Mission #2</a></p>\r\n', '12092020102805.pdf', 'Rifki Nur Fauzi', '2020-09-12 10:28:05', '2020-09-12 10:28:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_hmj`
--

CREATE TABLE `s1_hmj` (
  `id_hmj` int(11) NOT NULL,
  `nama_hmj` varchar(50) NOT NULL,
  `deskripsi_hmj` text NOT NULL,
  `ketua_hmj` varchar(50) NOT NULL,
  `ketua_foto` varchar(50) NOT NULL,
  `wakil_hmj` varchar(50) NOT NULL,
  `wakil_foto` varchar(50) NOT NULL,
  `visi_hmj` text NOT NULL,
  `misi_hmj` text NOT NULL,
  `vertikal_struktur_hmj` varchar(50) NOT NULL,
  `landscape_struktur_hmj` varchar(50) NOT NULL,
  `status_pakai` int(1) NOT NULL DEFAULT 0,
  `create_by` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s1_hmj`
--

INSERT INTO `s1_hmj` (`id_hmj`, `nama_hmj`, `deskripsi_hmj`, `ketua_hmj`, `ketua_foto`, `wakil_hmj`, `wakil_foto`, `visi_hmj`, `misi_hmj`, `vertikal_struktur_hmj`, `landscape_struktur_hmj`, `status_pakai`, `create_by`, `create_at`, `update_at`) VALUES
(16, 'HMJ TI Undiksha 2020-2021', '<p style=\"text-align:justify;\">Repositori ini digunakan untuk menyimpan segala file yang berkaitan dengan kegiatan-kegiatan yang dilaksanakan oleh kepengurusan HMJ TI Undiksha 2020-2021</p>', 'Irfan Walhidayah', '1f7c6659dbd16ea69d52ce5af7536069.png', 'Putu Zasya Eka Satya Nugraha', '3df2cb61563fe9f31a3a633f92acf1e2.png', '<p style=\"text-align:justify;\">Mewujudkan Himpunan Mahasiswa Jurusan Teknik Informatika Yang PATEN (Profesional, Aktif, Transparansi, Empati, dan Nasionalis) serta Berkualitas, Berkarakter, dan Unggul baik di bidang Akademik maupun non Akademik</p>', '<ol><li style=\"text-align:justify;\">Menjadikan HMJ Teknik Informatika sebagai wadah untuk menampung aspirasi bagi seluruh Mahasiswa Teknik Informatika</li><li style=\"text-align:justify;\">Bersinergi serta Mengayomi seluruh mahasiswa Teknik Informatika</li><li style=\"text-align:justify;\">Menyelenggarakan program kerja yang menarik dan bermanfaat bagi seluruh Mahasiswa Teknik Informatika dengan tetap berpegang teguh pada Falsafah Tri Hita Karana</li><li style=\"text-align:justify;\">Memfasilitasi serta mengapresiasi mahasiswa Teknik Informatika untuk meningkatkan serta mengembangkan minat dan bakat. Guna mewujudkan mahasiswa Teknik Informatika yang berprestasi baik dibidang akademik maupun non akademik</li><li style=\"text-align:justify;\">Memegang teguh nilai kebersamaan dan kekeluargaan tanpa terjadi perselisihan baik di lingkungan internal maupun eksternal</li></ol>', 'db7fd6535ea7cddbc0d956b6c54d07a9.png', '6f7df0f103c4873dcd8a4d541549721f.png', 1, 'Admin', '2020-08-24 01:27:04', '2020-08-24 01:27:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_informasi`
--

CREATE TABLE `s1_informasi` (
  `id_informasi` int(11) NOT NULL,
  `foto1_informasi` text NOT NULL,
  `foto2_informasi` text DEFAULT NULL,
  `foto3_informasi` text DEFAULT NULL,
  `video_informasi` text DEFAULT NULL,
  `nama_kepengurusan` varchar(60) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `kategori_informasi` varchar(20) NOT NULL,
  `konten_informasi` text NOT NULL,
  `file_informasi` text DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s1_informasi`
--

INSERT INTO `s1_informasi` (`id_informasi`, `foto1_informasi`, `foto2_informasi`, `foto3_informasi`, `video_informasi`, `nama_kepengurusan`, `judul_informasi`, `kategori_informasi`, `konten_informasi`, `file_informasi`, `create_at`, `create_by`) VALUES
(27, 'ac9306276823bd80991f080982d6e42d.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Peluncuran Website HMJ TI Undiksha', 'Pengumuman', '<p style=\"text-align:justify\">Hallo Infinity,<br />\r\nTepat pada hari ini, 1 September 2020 kami dari Bidang 5 Kepengurusan HMJ TI Undiksha 2020-2021 telah meluncurkan Website Resmi HMJ TI Undiksha yang memiliki alamat URL : <a href=\"http://if.undiksha.ac.id/web/home\">http://if.undiksha.ac.id/web/home</a>. Dengan adanya website ini harapannya dapat mempermudah dalam pengelolaan Repositori kegiatan-kegiatan HMJ TI Undiksha yang telah dilaksanakan sebelumnya. Untuk informasi tentang website, dapat menghubungi beberapa kontak berikut. Terimakasih<br />\r\n<br />\r\nIG : hmj_ti.undiksha<br />\r\nEmail : hmjtiundiksha@gmail.com<br />\r\nFB : hmj_ti.undiksha<br />\r\n<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#gotechnology</p>\r\n', NULL, '2020-09-01 20:33:31', 'Admin'),
(41, '15ea290347456067696f4162eb0d151b.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Informasi Kelengkapan Administrasi', 'Pengumuman', '<p style=\"text-align:justify\">Hallo Infinity,<br />\r\nDiumumkan kepada seluruh mahasiswa baru Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan. Berikut merupakan informasi resmi terkait dengan biaya kelengkapan administrasi bagi mahasiswa baru. Adapun rincian terkait dengan kelengkapan administrasi tersebut dapat didownload pada tombol download diatas. Untuk informasi dan pertanyaan lebih lanjut dapat menghubungi <em>official account</em> HMJ TI Undiksha<br />\r\nIG : @hmj_ti.undiksha<br />\r\n#hmjti<br />\r\n#undiksha<br />\r\n#pengumuman_biaya_administrasi<br />\r\n#mahasiswa_baru_tahun_2020</p>\r\n', '08092020121729.pdf', '2020-09-08 12:17:29', 'Admin'),
(58, '9ca14bb57d4b43a3a6d3ccdd461dac62.png', NULL, NULL, NULL, 'HMJ TI Undiksha 2020-2021', 'Info Mahasiswa Baru 2020', 'Pengumuman', '<p>Hallo infinity</p>\r\nDiinformasikan kepada seluruh Mahasiswa Baru Angkatan Tahun 2020 Jurusan Teknik Informatika, Fakultas Teknik dan Kejuruan untuk melengkapi data ukuran baju dan jaket pada link berikut:&nbsp;<br />\r\nhttps://bit.ly/PendataanBajuJaket<br />\r\nBagi mahasiswa yang<strong> telah</strong> membayar administrasi dan iuran <strong>diwajibkan</strong> untuk mengisi link pendataan baju dan jaket tersebut. Untuk mahasiswa yang <strong>belum</strong> membayar administrasi dan iuran juga <strong>boleh</strong>&nbsp;mengisi pendataan baju dan jaket tersebut terlebih dahulu.<br />\r\nSekian Informasi yang dapat kami sampaikan,<br />\r\nRemember to stay safe and healthy<br />\r\nAtas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p>#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTeknologi</p>\r\n', NULL, '2020-09-14 19:25:00', 'Dwi Prima Handayani Putri'),
(59, 'd3f902bfb4d714e3f4249acd297a56ed.png', NULL, NULL, NULL, 'HMJ TI Undiksha 2020-2021', 'Info Data Iuran HMJ 2020 ', 'Pengumuman', '<p>Hallo Infinity</p>\r\nDiinformasikan kepada seluruh Mahasiswa Aktif di Jurusan Teknik Informatika semester 3, 5, dan 7 untuk melakukan pengecekan nama dan keterangan terkait pembayaran iuran HMJ TI untuk Bulan Agustus s.d. Desember 2020 yang telah dilakukan.<br />\r\nData pembayaran dapat diakses pada link berikut: &nbsp;<br />\r\nhttps://docs.google.com/spreadsheets/d/10nsUVpVNl9Y1qDw720Oyx6dLmfiY8irnDjgS2IE35nw/edit?usp=sharing<br />\r\nJika terdapat kesalahan bisa menghubungi <strong>salah satu </strong>kontak berikut<strong> via wa</strong>:<br />\r\n+62 895-3950-13615<br />\r\n(Gusti Aditya Trisna Murti)<br />\r\n+62 812-4634-2145<br />\r\n(Dwi Prima Handayani Putri)<br />\r\n.<br />\r\n.<br />\r\nSekian informasi yang dapat kami sampaikan.<br />\r\nRemember to stay safe and healthy<img alt=\"wink\" src=\"http://if.undiksha.ac.id/assets/ckeditor/plugins/smiley/images/wink_smile.png\" style=\"height:23px; width:23px\" title=\"wink\" /><br />\r\nAtas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p>#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTechnology</p>\r\n', NULL, '2020-09-16 23:05:51', 'Dwi Prima Handayani Putri'),
(61, 'ff37c987989847f6a473499038811f8e.jpg', 'e5dceb8d0ed5d5f278fc416b5ae6e58f.jpg', '8f085b5297cd51ab77c8bfbd984c68a6.jpg', '', 'HMJ TI Undiksha 2020-2021', 'RAPAT KERJA HMJ TI MASA BAKTI 2020/2021', 'Berita', '<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Singaraja - Pelaksanaan Rapat Kerja Himpunan Mahasiswa Jurusan Teknik Informatika, Universitas Pendidikan Ganesha. Rapat membahas Program Kerja dari masing-masing Bidang yang ada pada HMJ TI Undiksha masa bakti 2020/2021.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Rapat Kerja Himpunan Mahasiswa Jurusan Teknik Informatika, Universitas Pendidikan Ganesha, dilaksanakan secara daring dan dihadiri oleh pengurus HMJ Teknik Informatika masa bakti 2020/2021, 2 orang perwakilan kelas yang ada di Jurusan Teknik Informatika serta tamu undangan yang meliputi Dekan FTK, Ketua Jurusan TI, Sekretaris Jurusan TI, Wakil Dekan 3, Ketua Ormawa di lingkungan FTK, perwakilan dari BEM FTK, perwakilan dari MPM REMA, BEM REMA , serta demisioner HMJ TI masa bakti 2019/2020. Sehingga total peserta dalam kegiatan Rapat Kerja ini berjumlah 120 peserta.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Dalam acara Rapat Kerja HMJ TI Undiksha ini, Dekan FTK yakni Dr. I Gede Sudirtha, S.Pd, M.Pd, memberikan sambutan yang sekaligus membuka acara Rapat Kerja HMJ TI. &amp;ldquo; Saya sangat mengapresiasi seluruh kegiatan mahasiswa karena kegiatannya berjalan dengan lancar, saya bangga kepada semua program studi yang ada di lingkungan FTK, salah satunya adalah program studi Pendidikan Teknik Informatika yang telah mendapatkan akreditasi A. Semoga program studi yang lainnya bisa memperoleh akreditasi nilai A kedepannya. Perlu kita ketahui Jurusan Teknik Informatika memiliki segudang prestasi yang dihasilkan oleh Mahasiswa Jurusan Teknik Informatika, terbukti dari lomba - lomba gemastik, game dll. Pada tahun 2019 FTK memperoleh peringkat ke-4 dalam prestasi di klasterisasi walaupun fakultas nya kecil akan tetapi memiliki segudang prestasi semoga bisa termotivasi lagi agar bisa meningkatkan prestasi lagi. &amp;ldquo;&amp;nbsp; ujarnya saat membuka kegiatan Rapat Kerja HMJ TI.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Irfan Walhidayah selaku Ketua HMJ TI masa bakti 2020/2021, juga memberikan tanggapan tentang tujuan diadakannya Rapat Kerja HMJ TI ini. Tujuan dari kegiatan ini adalah ,tercapainya susunan jadwal program kerja HMJ Teknik Informatika&amp;nbsp; periode 2020/2021 yang sistematis,tercapainya insan akademis yang disiplin, cakap, terampil dan bertanggung jawab dalam mengemban keprofesian dan tercapainya rancangan pasti sebuah program kerja yang menjadi patokan oleh organisasi ini dalam berkegiatan.&quot;Landasan terbentuknya sebuah organisasi tentunya adalah memiliki tujuan bersama, organisasi layaknya ditopang oleh elemen-elemen penting seperti anggota, program kerja, dan pengurus inti yang menjalankan roda organisasinya. Elemen-elemen penting itu memiliki fungsinya tersendiri, anggota dalam organisasi akan melaksanakan program kerja sehingga dapat mencapai tujuan organisasi. Program kerja dirancang dan dilaksanakan dalam rangka mencapai tujuan organisasi, dengan adanya program kerja akan membuat langkah organisasi dalam mencapai tujuan organisasi menjadi jelas. Dalam setiap organisasi diperlukan pengurus yang menjadi penggerak dalam berorganisasi, pengurus merumuskan dan menjadi nahkoda dalam bahtera organisasi. Organisasi yang baik tentu saja perlu didukung dengan terbentuknya program kerja yang jelas dan memiliki kualitas, melihat pentingnya program kerja dalam sebuah organisasi, maka dipandang sangat perlu untuk melakukan program tahunan yaitu Rapat Kerja Himpunan Mahasiswa Jurusan Teknik Informatika Masa Bakti 2020/2021 untuk menyusun Program Kerja (Proker) Himpunan Mahasiswa Jurusan Teknik Informatika Masa Bakti 2020/2021&quot;, imbuhnya .</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Hal senada juga disampaikan oleh Zasya Eka, selaku ketua panitia Rapat Kerja HMJ TI. &quot;Untuk Raker kali ini berjalan dengan lancar walau kita melakukannya secara full daring. Jadi mengingat kondisi seperti ini, kami dari kepanitiaan memutuskan untuk melaksanakan kegiatan Raker HMJ TI masa bakti 2020/2021 secara full daring. Ini merupakan tantangan bagi panitia karena dengan kondisi seperti ini koordinasi tidak akan intens seperti ketika kita melaksanakan kegiatan secara luring.&quot;,ujarnya.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Tak hanya itu, mahasiswa yang juga menjabat sebagi Wakil Ketua HMJ TI ini juga mengucapkan terimakasih kepada semua pihak yang telah terlibat dalam kegiatan kali ini sehingga dapat berjalan dengan baik.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', NULL, '2020-10-05 23:15:41', 'Admin'),
(62, '24cdb424fee3f6e4e3908ca22dd626bd.png', 'e5a65524fb0a31610823f6735e97df98.jpg', '4d06cd7318757ade3fe19fc2012a7140.jpg', '', 'HMJ TI Undiksha 2020-2021', 'SOSIALISASI KRS DAN KOMUNITAS ', 'Berita', '<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Singaraja - Penyusunan Kartu Rencana Studi dan perkenalan komunitas, HMJ TI Universitas Pendidikan Ganesha melakukan penyampaian gambaran umum proses akademik yang akan berlangsung.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Serangkaian Orientasi Kegiatan Jurusan (OKJ) di lingkungan Jurusan Teknik Informatika, HMJ TI Universitas Pendidikan Ganesha mensosialisasikan mengenai sistem dan alur pelaksanaan KRS Mahasiswa secara online. Tujuan dari kegiatan ini adalah memberikan pengenalan sistem yang akan digunakan mahasiswa baru dalam perkuliahan dan menyalurkan informasi pemahaman mengenai prosedur penyusunan Kartu Rencana Studi (KRS) online mahasiswa yang dilakukan setiap awal semester.Kegiatan sosialisasi dimulai sejak pukul 09.45 WITA - 12.15 WITA yang diawali dengan presensi mahasiswa baru.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">HMJ TI Universitas Pendidikan Ganesha melakukan penyampaian gambaran umum proses akademik yang akan berlangsung. Kegiatan ini dihadiri 98 peserta yang terdiri pengurus HMJ TI dan Mahasiswa Baru TI. Mahasiswa tampak begitu antusias dengan materi dan aktif melakukan diskusi.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">&quot;Perancangan KRS dilakukan sesuai dengan algoritma yang berlaku dan dilakukan pada tanggal 10-14 September, nanti untuk lebih jelas terkait penyusunan KRS akan diinformasikan,&quot; ujar Irfan Walhidayah selaku Ketua HMJ TI, Senin (14/9/2020).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Penjelasan yang berlangsung terkait penyusunan KRS mendapatkan kendala bagi mahasiswa baru, salah satunya adalah tidak bisa melakukan penyusunan KRS yang dilakukan oleh mahasiswa Manajemen Informatika karena tidak ada pilihan kelas. Terkait dengan itu maka I Putu Ega Suwidi Darma selaku Koordinator Prodi Manajemen Informatika menyampaikan bahwa &quot;Kurikulum D3 Manajemen Informatika sistem paket yang sudah ditentukan oleh ketua Program Studi Manajemen Informatika, jadi tinggal melakukan penyusunann KRS sesuai dengan paket mata kuliah yang berlaku. Untuk kelas yang belum muncul saat penyusunan KRS akan saya tanyakan keatasan, tapi kerana jumlah mahasiswa MI 20 orang maka dipastikan dapat kelas A&quot; ujarnya.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Melanjutkan penyampaian cara penyusunan KRS, mahasiswa baru mendapatkan tips jitu untuk kedepannya jika melakukan penyusunan KRS.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">&quot;Ada tips untuk mahasiswa baru bila nanti melakukan penyusunan KRS yaitu membuat group komukasi antar teman jika mendapatkan pembimbing akademik agar pada saat melakukan koordinasi terhadap dosen hanya melalui perwakilan saja, jadi koordinasi terhadap PA bisa terlaksana secara baik karena kita tidak tau karakter dari masing masing pembimbing akademik tersebut,&quot; tutur Zasya selaku Wakil Ketua HMJ TI.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Seiring dengan kegiatan tersebut, HMJ TI Universitas Pendidikan Ganesha melakukan pengenalan seputar jurusan dan HMJ TI Universitas Pendidikan Ganesha diantaranya pengenalan berbagai jenis iuran kepada mahasiswa baru, pengenalan seputar Pembimbing Akademik (PA), Koordinator Tingkat (KORTI), Kepala Program Studi (KAPRODI), dan tata cara menghubungi dosen. Kemudian, dilanjutkan pula dengan pengenalan komunitas untuk mengembangkan bakat dan minat mahasiswa di lingkungan Jurusan Teknik Informatika.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Salam hangat dari Irfan Walhidayah, dibuka dengan dijelaskan ulang iuran HMJ TI yang diberlakukan supaya mahasiswa baru lebih jelas dan paham terkait rincian biaya dari iuran HMJ TI. Setelah itu dilanjutkan dengan pembahasan terkait komunitas yang ada di lingkungan Teknik Informatika.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Perkenalan komunitas yang berfungsi sebagai wadah penyaluran minat dan bakat mahsiswa teknik informatika. Penyampaian tersebut terdapat 5 komunitas yang ada di Teknik Informatika, diantaranya :</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\"><span style=\"font-family:Times New Roman,Times,serif\">Komunitas Multimedia</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-family:Times New Roman,Times,serif\">Komunitas Programming</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-family:Times New Roman,Times,serif\">Komunitas Teknik Komputer Jaringan</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-family:Times New Roman,Times,serif\">Komunitas Robotika</span></li>\r\n	<li style=\"text-align: justify;\"><span style=\"font-family:Times New Roman,Times,serif\">Komunitas Olahraga dan Seni</span></li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:Times New Roman,Times,serif\">Mahasiswa baru akan diarahkan sesuai dengan minat dan bakat yang dimiliki melalui 5 komunitas tersebut dan nantinya akan dilakukan pendataan terhadap komunitas yang akan dianut oleh mahasiswa baru.</span></p>\r\n', NULL, '2020-09-14 23:23:26', 'Admin'),
(63, '33f7cdb98430b193f4cd1e2e79cb2031.jpg', '89c3c8b983c383f30f252248dfd457b4.jpg', 'c96f442a56e7acad742f5c0b62715bf5.jpg', '', 'HMJ TI Undiksha 2020-2021', 'Info Open Recruitment Panitia INTEGER #2', 'Pengumuman', '<p>Halo Infinity &nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Diinformasikan kepada seluruh Mahasiswa Aktif Jurusan Teknik Informatika bahwa Kami dari Himpunan Mahasiswa Jurusan Teknik Informatika akan mengadakan kembali acara untuk memperingati HUT Jurusan kita yaitu INTEGER #2 (<em>Information Technology Grand Celebration</em>) 2020. Untuk itu kami membuka kesempatan untuk Mahasiswa Aktif Jurusan Teknik Informatika khususnya semester 1, 3, dan 5 untuk menunjukan rasa dedikasi dan rasa solidaritas dalam Open Recruitment Panitia INTEGER #2.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Kami mengajak kalian bergabung dalam kepanitiaan untuk mewujudkan keinginan kita bersama untuk menyukseskan acara HUT Jurusan Teknik Informatika yang ke-2 ini. Kami tunggu partisipasi kalian para Mahasiswa Teknik Informatika.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p>Pengumpulan berkas dan wawancara dilaksanakan pada tanggal:<br />\r\n&bull; Pendaftaran : 19-21 Oktober 2020<br />\r\n&bull; Wawancara : 22-25 Oktober 2020<br />\r\n&bull; Pengumuman : Senin, 26 Oktober 2020<br />\r\n&bull; Tempat : Daring</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\nUntuk informasi lebih lanjut dapat diakses pada slide atau dapat mengunjungi website Electronic Open Recruitment System HMJ TI Undiksha (http://if.undiksha.ac.id/eors/home)</p>\r\n\r\n<p><br />\r\nSekian informasi yang dapat kami sampaikan.<br />\r\nRemember to stay safe and healthywink<br />\r\nAtas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTechnology<br />\r\n#HMJTIUNDIKSHA<br />\r\n#INTEGER2<br />\r\n#HIDUP MAHASISWA !!!</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, '2020-10-19 07:37:13', 'Admin'),
(64, '22cc1ae263b82d4350e92a99d2f024be.jpg', NULL, NULL, '', 'HMJ TI Undiksha 2020-2021', 'Pengumuman Hasil Open Recruitment Panitia INTEGER #2', 'Pengumuman', '<p style=\"text-align:justify\">Halo Infinity</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Diinformasikan kepada seluruh Mahasiswa Aktif Jurusan Teknik Informatika semester 1, 3, dan 5 yang sudah mengikuti tahap pendaftaran serta tahap wawancara open recruitment kepanitiaan INTEGER #2, pengumuman terkait hasil open recruitment sudah dapat dilihat pada website Electronic Open Recruitment HMJ Teknik Informatika.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Berikut adalah link hasil open recruitment panitia INTEGER #2: <a href=\"http://if.undiksha.ac.id/eors/lihat_hasil/INTEGER\">http://if.undiksha.ac.id/eors/lihat_hasil/INTEGER</a></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Terimakasih kami ucapkan kepada seluruh mahasiswa yang sudah ikut berpartisipasi dan mengikuti open recruitment. Kami ucapkan selamat kepada mahasiswa yang sudah terpilih dan untuk yang belum terpilih jangan berkecil hati karena masih banyak event yang bisa kalian ikuti selanjutnya.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Sekian informasi yang dapat kami sampaikan.<br />\r\nRemember to stay safe and healthywink<br />\r\nAtas perhatiannya kami ucapkan terima kasih</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">#SalamTeknikInformatika<br />\r\n#SolidaritasTanpaBatas<br />\r\n#TI..GoTechnology<br />\r\n#HMJTIUNDIKSHA<br />\r\n#INTEGER2<br />\r\n#HIDUP MAHASISWA !!!</p>\r\n', NULL, '2020-10-26 21:08:31', 'Sub Bidang Jurnalistik'),
(69, '1237b643eee9d0fa9fca24ec4db5354d.png', '0744c8ac08d11404c7522274600f3cab.jpg', 'a1fa4a5788a28352676e5d306d74d696.jpg', '', 'HMJ TI Undiksha 2020-2021', 'RAPAT UMUM 1 PANITIA INTEGER #2', 'Berita', '<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Singaraja (29/10/2020) - Pelaksanaan Rapat Umum 1 INTEGER#2 Himpunan Mahasiswa Jurusan Teknik Informatika, Universitas Pendidikan Ganesha. Rapat ini membahas progres dari masing-masing sie, kendala masing-masing sie, Panduan, RAB, konsep, jobdesk masing-masing sie, dan panduan mekanisme pendaftaran pada Event Integer #2. Rapat Umum ini diselenggarakan via daring mengingat kondisi yang saat ini tidak kondusif untuk melakukan rapat tatap muka, rapat umum ini dihadiri oleh ketua HMJ TI Irfan Walhidayah, Putu Zasya Eka Satya Nugraha selaku wakil ketua HMJ TI, seluruh koordinator sie beserta anggota. Dalam rapat ini masing-masing sie telah membeberkan masing-masing progres atau perkembangannya, dalam rapat ini pihak HMJ TI berencana bekerja sama dengan media partner dan juga sponsor.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Dalam pelaksanaan rapat umum ini I Gede Riyan Ardi Darmawan selaku koordinator bidang 5 HMJ TI sekaligus ketua panitia INTEGER #2, berpesan untuk masing-masing sie agar lebih banyak berkomunikasi satu sama lain, agar nantinya tidak terjadi kesalahan ketika event dilaksanakan mengingat hari-h yang sudah dekat.&nbsp;</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Irfan Walhidayah selaku Ketua HMJ TI memberi pesan agar pembuatan pamflet untuk lomba dipisah, karena menurut pengalamannya mengikuti lomba, agar pihak yang diajak bekerja sama tidak kebingungan. Sie Pubdok, yang bertanggung jawab dalam pembuatan desain piagam dan juga pencetakannya diminta untuk menyesuaikan kembali beberapa piagam penghargaan untuk membedakan piagam satu dengan yang lain, selain Sie Pubdok, Sie pendaftaran juga diberi masukan untuk menambah penggunaaan M-Banking dalam pelaksanaan pendaftaran masing-masing lomba agar memudahkan dan mempercepat proses pendaftaran. Terkait dengan pemberian bantuan, yang menjadi tanggung jawab Sie Social-Event, I Gede Riyan Ardi Darmawan selaku ketua panitia, meminta pendapat dari seluruh peserta rapat untuk memberi informasi mengenai daerah yang belum mendapat bantuan, terutama yang ada di Bali, khususnya di kabupaten Buleleng. Sie MGS atau yang lebih dikenal dengan Malam Gelar Seni, dalam rangka EVENT INTEGER #2, HMJ TI berencana menyumbang dance cover, namun latihannya terkendala karena adanya ujian tengah semester. Kemudian, Sie Expo bertanggung jawab atas kegiatan Expo, karena tahun ini acara INTEGER #2 dilaksanakan secara online, maka Expo tidak memungkinkan untuk dilaksanakan. Sehingga sie Expo akan sedikit merubah konsep Exponya menjadi acara Webinar dan rencananya webinar ini akan berlangsung selama 3 hari. Kemudian, berlanjut ke Sie Penggalian Dana sejauh ini telah berjalan dengan baik, dan tidak memiliki masalah hingga saat artikel ini dibuat, dimana klien dari paid promote juga telah menyatakan kepuasannya, dan yang terakhir dari Sie umum yaitu Sie Teknologi Informasi, tidak ada kendala dari Sie Teknologi Informasi dimana semua telah diberi peran dan tugas masing-masing secara merata.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Sie Lomba Business IT Case, telah menyelesaikan panduannya, tetapi masih menunggu bimbingan dari dosen, dan juri, untuk RAB masih belum dibuat karena belum ada konfirmasi biaya dari masing-masing juri, sedangkan untuk kendala yang diterima hanya ada pada juri yang belum ada konfirmasi. Sie Lomba UI/UX, diminta untuk lebih menekankan konsepnya, sedangkan yang lainnya telah berjalan dengan lancar. Sie Lomba Hacking The Game, mengalami sedikit kendala dalam memilih juri untuk lomba tersebut.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Kemudian rapat dilanjutkan dengan Sie Lomba Mobile Legend, dimana Sie ini diwanti agar nantinya room yang digunakan untuk lomba menjadi maksimal, karena dari pengalaman sebelumnya, penyelenggara pernah disalahkan karena room yang ngelag.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:12pt\"><span style=\"font-family:\'Times New Roman\'\"><span style=\"color:#000000\">Dengan adanya rapat ini, diharapkan Event INTEGER #2 ini dapat berjalan sebaik-baiknya, ini juga tidak luput dari restu yang mahakuasa yang juga membuat rapat umum INTEGER #2 ini berjalan dengan lancar, setelah itu rapat ditutup dengan doa.</span></span></span></p>\r\n', NULL, '2020-10-30 12:06:39', 'Sub Bidang Jurnalistik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s1_kegiatan_hmj`
--

CREATE TABLE `s1_kegiatan_hmj` (
  `id_kegiatan_hmj` int(11) NOT NULL,
  `id_hmj` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `deskripsi_kegiatan` text NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s1_kegiatan_hmj`
--

INSERT INTO `s1_kegiatan_hmj` (`id_kegiatan_hmj`, `id_hmj`, `nama_kegiatan`, `deskripsi_kegiatan`, `create_by`, `create_at`, `update_at`) VALUES
(24, 16, 'TI Peduli Pencegahan Penyebaran COVID-19', '<p style=\"text-align:justify\"><span style=\"color:hsl(0, 0%, 0%)\">Program Kerja ini merupakan program kerja yang dilaksanakan oleh bidang 4 HMJ TI Undiksha. TI Peduli Pencagahan Penyebaran COVID merupakan program kerja yang dilaksanakan HMJ TI Undiksha 2020-2021, program kerja ini dilaksanakan dengan cara membagikan masker dan hand sanitizer gratis kepada masyarakat di sekitaran Kota Singaraja.</span></p>\r\n', 'Admin', '2020-09-01 20:18:23', '2020-09-01 20:18:23'),
(25, 16, 'IT Mission #1', '<p style=\"text-align:justify\"><span style=\"color:hsl(0, 0%, 0%)\">IT Mission #1 adalah kegiatan Webinar yang diadakan oleh Himpunan Mahasiswa Jurusan Teknik Informatika. IT Mission #1 ini diadakan pada tanggal 28 Juni 2020 melalui platform Zoom. Terdapat 3 pemateri utama pada IT Mission #1 ini, yakni Bapak Anditya, S.T, Bapak Ida Bagus Nyoman Pascima, S.Pd., M.Cs. dan Bapak I Made Edy Listartha, S.Kom., M.Kom. Kegiatan ini sudah berjalan dengan baik.</span></p>\r\n', 'I Gede Riyan Ardi Darmawan', '2020-09-01 20:18:59', '2020-09-06 20:26:16'),
(26, 16, 'IT Mission #2', '<p style=\"text-align:justify\"><span style=\"color:hsl(0, 0%, 0%)\">IT Mission #2 adalah kegiatan Webinar yang diadakan oleh Himpunan Mahasiswa Jurusan Teknik Informatika. IT Mission #2 ini diadakan pada tanggal 18 Agustus 2018 melalui platform Zoom. Pada IT Mission #2 ini, HMJ TI Undiksha bekerja sama dengan pihak DANA Wallet Indonesia. Terdapat 4 pemateri pada IT Mission #2 ini, dimana pemateri ini didatangkan langsung dari pihak DANA </span></p>\r\n', 'Admin', '2020-09-01 20:21:01', '2020-09-01 20:21:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s2_barang`
--

CREATE TABLE `s2_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `satuan_barang` int(11) NOT NULL,
  `nama_pengisi` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s2_detail_peminjaman`
--

CREATE TABLE `s2_detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_pinjaman` int(11) NOT NULL,
  `harga_pinjaman` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `s2_detail_peminjaman`
--
DELIMITER $$
CREATE TRIGGER `Peminjaman` AFTER INSERT ON `s2_detail_peminjaman` FOR EACH ROW BEGIN
	UPDATE s2_barang SET jumlah_barang = jumlah_barang - NEW.jumlah_pinjaman
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Pengembalian` AFTER DELETE ON `s2_detail_peminjaman` FOR EACH ROW BEGIN
	UPDATE s2_barang
    SET jumlah_barang = jumlah_barang + OLD.jumlah_pinjaman WHERE s2_barang.id_barang = OLD.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s2_organisasi`
--

CREATE TABLE `s2_organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `ketua_organisasi` varchar(50) NOT NULL,
  `notelp_organisasi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s2_peminjam`
--

CREATE TABLE `s2_peminjam` (
  `id_peminjam` int(11) NOT NULL,
  `id_organisasi` int(11) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `nim_peminjam` int(10) NOT NULL,
  `notelp_peminjam` varchar(13) NOT NULL,
  `email_peminjam` varchar(50) NOT NULL,
  `alamat_peminjam` text NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s2_peminjaman`
--

CREATE TABLE `s2_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `status_peminjaman` int(1) NOT NULL,
  `total_peminjaman` bigint(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Trigger `s2_peminjaman`
--
DELIMITER $$
CREATE TRIGGER `Selesai_pinjam` AFTER UPDATE ON `s2_peminjaman` FOR EACH ROW BEGIN
	DELETE FROM s2_detail_peminjaman WHERE OLD.id_peminjaman = s2_peminjaman.id_peminjaman AND s2_peminjaman.status_peminjaman = 2;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s3_berita_integer`
--

CREATE TABLE `s3_berita_integer` (
  `id_berita_integer` int(11) NOT NULL,
  `id_integer` int(11) NOT NULL,
  `nama_berita_integer` varchar(200) NOT NULL,
  `kategori_berita_integer` varchar(1) NOT NULL,
  `konten_berita_integer` text NOT NULL,
  `youtube_berita_integer` text DEFAULT NULL,
  `file_berita_integer` text DEFAULT NULL,
  `foto1_berita_integer` text NOT NULL,
  `foto2_berita_integer` text DEFAULT NULL,
  `foto3_berita_integer` text DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s3_detail_hari_integer`
--

CREATE TABLE `s3_detail_hari_integer` (
  `id_detail_hari_integer` int(11) NOT NULL,
  `id_hari_integer` int(11) NOT NULL,
  `nama_detail_hari_integer` varchar(200) NOT NULL,
  `waktu_mulai` varchar(8) NOT NULL,
  `waktu_akhir` varchar(8) NOT NULL,
  `tempat_detail_hari_integer` text NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s3_detail_hari_integer`
--

INSERT INTO `s3_detail_hari_integer` (`id_detail_hari_integer`, `id_hari_integer`, `nama_detail_hari_integer`, `waktu_mulai`, `waktu_akhir`, `tempat_detail_hari_integer`, `create_at`, `create_by`) VALUES
(13, 9, 'Pembukaan', '07:00', '09:00', 'Secara Daring Melalui Platform Zoom', '2020-10-11 14:58:18', 'Admin'),
(14, 9, 'Webinar Wawasan Kebangsaan', '09:00', '12:00', 'Secara Daring Melalui Platform Zoom', '2020-10-11 14:58:51', 'Admin'),
(15, 11, 'Webinar IT Mission Sesi 1', '08:00', '10:00', 'Secara Daring Melalui Platform Zoom', '2020-10-11 14:59:31', 'Admin'),
(16, 11, 'Webinar IT Mission Sesi 2', '10:30', '13:30', 'Secara Daring Melalui Platform Zoom', '2020-10-11 15:00:00', 'Admin'),
(17, 12, 'Penutupan Kegiatan INTEGER #2', '08:00', '12:00', 'Secara Daring Melalui Platform Zoom', '2020-10-11 15:00:31', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s3_hari_integer`
--

CREATE TABLE `s3_hari_integer` (
  `id_hari_integer` int(11) NOT NULL,
  `id_integer` int(11) NOT NULL,
  `nama_hari_integer` date NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s3_hari_integer`
--

INSERT INTO `s3_hari_integer` (`id_hari_integer`, `id_integer`, `nama_hari_integer`, `create_at`, `create_by`) VALUES
(9, 21, '2020-10-13', '2020-10-11 14:47:46', 'Admin'),
(11, 21, '2020-10-14', '2020-10-11 14:48:05', 'Admin'),
(12, 21, '2020-10-15', '2020-10-11 14:57:41', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s3_integer`
--

CREATE TABLE `s3_integer` (
  `id_integer` int(11) NOT NULL,
  `nama_integer` varchar(100) NOT NULL,
  `logo_integer` text NOT NULL,
  `video_integer` text NOT NULL,
  `panduan_integer` text NOT NULL,
  `tema_integer` varchar(200) NOT NULL,
  `deskripsi_integer` text NOT NULL,
  `status_integer` int(1) NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s3_integer`
--

INSERT INTO `s3_integer` (`id_integer`, `nama_integer`, `logo_integer`, `video_integer`, `panduan_integer`, `tema_integer`, `deskripsi_integer`, `status_integer`, `create_at`, `create_by`) VALUES
(21, 'Integer #2', '3b9b7d8877acb72cce7ade24545fbea1.png', 'f29e212a942fa1f80f864de6351f26b7.mp4', '20201031214518_Panduan_Kegiatan_Integer.zip', 'Enabling Technology to Light Up Your Normality in New Normal Era', '<p style=\"text-align:justify\">Dengan diadakannya acara Integer #2 yang menyungsung tema diatas, harapannya seluruh pelajar dan mahasiswa yang berfokus pada bidang Teknologi Informasi di seluruh Indonesia dapat mengembangkan kreativitas dan meningkatkan semangat dalam diri serta berinovasi khususnya dibidang Teknologi walaupun dimasa pandemi seperti ini.</p>\r\n', 1, '2020-10-11 12:38:48', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s3_kategori_lomba_integer`
--

CREATE TABLE `s3_kategori_lomba_integer` (
  `id_kategori_lomba_integer` int(11) NOT NULL,
  `id_integer` int(11) NOT NULL,
  `nama_kategori_lomba_integer` varchar(100) NOT NULL,
  `icon_kategori_lomba_integer` text NOT NULL,
  `deskripsi_kategori_lomba_integer` text NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s3_kategori_lomba_integer`
--

INSERT INTO `s3_kategori_lomba_integer` (`id_kategori_lomba_integer`, `id_integer`, `nama_kategori_lomba_integer`, `icon_kategori_lomba_integer`, `deskripsi_kategori_lomba_integer`, `create_at`, `create_by`) VALUES
(9, 21, 'Kategori Lomba Berbasis Karya', 'eeb613694eb4cb914d596825e364b872.png', '  <p style=\"text-align:justify\">Kategori Lomba Berbasis Karya, dalam kategori ini semua\r\n                                    cabang lomba yang dilombakan membutuhkan pengumpulan karya kreatif dari peserta pada saat\r\n                                    pendaftaran. Pada kategori ini yang menjadi acuan penilaiannya adalah kemampuan\r\n                                    peserta didalam menciptakan suatu karya yang inovatif dan kreatif dan sesuai dengan keinginan masing-masing cabang lomba. Berikut merupakan\r\n                                    beberapa lomba yang dapat diikuti peserta dalam kategori ini</p>', '2020-10-11 15:04:29', 'Admin'),
(10, 21, 'Kategori Lomba Berbasis Pertandingan', '5208f56a0204f63b83701f08a00cce15.png', '  <p style=\"text-align:justify\">Kategori Lomba Berbasis Karya, dalam kategori ini semua\r\n                                    cabang lomba yang dilombakan hanya perlu melakukan pendaftaran sesuai dengan lomba\r\n                                    yang ingin diikuti. Pada kategori ini yang menjadi acuan penilaiannya adalah\r\n                                    kemampuan individu peserta didalam bertanding dengan peserta lainnya secara langsung\r\n                                    dengan tujuan untuk meraih\r\n                                    kemenangan. Berikut merupakan\r\n                                    beberapa lomba yang dapat diikuti peserta dalam kategori ini</p>', '2020-10-11 15:06:56', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s3_lomba_integer`
--

CREATE TABLE `s3_lomba_integer` (
  `id_lomba_integer` int(11) NOT NULL,
  `id_kategori_lomba_integer` int(11) NOT NULL,
  `nama_lomba_integer` varchar(60) NOT NULL,
  `deskripsi_lomba_integer` text NOT NULL,
  `icon_lomba_integer` text NOT NULL,
  `waktu_mulai_pendaftaran` datetime NOT NULL,
  `waktu_akhir_pendaftaran` datetime NOT NULL,
  `pendaftaran_lomba_integer` text NOT NULL,
  `pengumpulan_proposal` int(1) NOT NULL DEFAULT 0,
  `waktu_awal_pengumpulan` datetime DEFAULT NULL,
  `waktu_akhir_pengumpulan` datetime DEFAULT NULL,
  `pengumpulan_lomba_integer` text DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s3_lomba_integer`
--

INSERT INTO `s3_lomba_integer` (`id_lomba_integer`, `id_kategori_lomba_integer`, `nama_lomba_integer`, `deskripsi_lomba_integer`, `icon_lomba_integer`, `waktu_mulai_pendaftaran`, `waktu_akhir_pendaftaran`, `pendaftaran_lomba_integer`, `pengumpulan_proposal`, `waktu_awal_pengumpulan`, `waktu_akhir_pengumpulan`, `pengumpulan_lomba_integer`, `create_at`, `create_by`) VALUES
(16, 9, 'Lomba Music Cover', '<p style=\"text-align:justify\">Informasi lebih lanjut terkait lomba Musik Cover dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', 'e4b0e00788b64c95a005cfbb8732a4ee.png', '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaMusicCover', 1, '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaMusicCover', '2020-11-03 21:00:35', 'Admin'),
(17, 9, 'Lomba Tiktok', '<p>Informasi lebih lanjut terkait lomba Tiktok dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', 'd8265f7143daad048943515e4dec3565.png', '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaTikTok', 1, '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaTikTok', '2020-11-03 21:01:02', 'Admin'),
(18, 9, 'Lomba IT Business Case', '<p style=\"text-align:justify\">Informasi lebih lanjut terkait lomba IT Business Case dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', '14896fcfb080311516f43709b82fb293.png', '2020-11-05 00:00:00', '2020-12-03 00:00:00', ' https://s.id/LombaBusinessITCase', 1, '2020-11-05 00:00:00', '2020-12-03 00:00:00', ' https://s.id/LombaBusinessITCase', '2020-10-31 22:54:03', 'Admin'),
(19, 9, 'Lomba Essay Nasional', '<p style=\"text-align:justify\">Informasi lebih lanjut terkait lomba Essay Nasional dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', '062f1fcff6f2e7459b0e0cd4242dc13f.png', '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaEssayNasional', 1, '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaEssayNasional', '2020-10-31 16:05:08', 'Admin'),
(21, 10, 'Coding Competition', '<p style=\"text-align:justify\">Informasi lebih lanjut terkait Coding Competition dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', '4d2238bf9c355fa30a60a4ee8e62975e.png', '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/Codingcompetition', 0, NULL, NULL, NULL, '2020-11-03 20:59:34', 'Admin'),
(22, 10, 'Lomba Hacking The Game', '<p style=\"text-align:justify\">Informasi lebih lanjut terkait Hacking The Game Competition dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', '5ed03a8d368bddf0838d32958bf88a55.png', '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/HackingTheGame', 0, NULL, NULL, NULL, '2020-11-03 20:59:10', 'Admin'),
(23, 9, 'LIDM', '<p style=\"text-align:justify\">Informasi lebih lanjut terkait Lomba Inovasi Digital Pendidikan dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', '8fb552645127801d11225b496b0e9ee0.png', '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaLIDP', 1, '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaLIDP', '2020-10-31 23:45:08', 'Admin'),
(24, 9, 'Lomba UI/UX Design', '<p style=\"text-align:justify\">Informasi lebih lanjut terkait Lomba UI/UX Design dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', 'e99fa73dba712c1690b7970dd2482aab.png', '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaUIUXDesign', 1, '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaUIUXDesign', '2020-10-31 23:56:40', 'Admin'),
(25, 9, 'Lomba Desain Poster', '<p style=\"text-align:justify\">Informasi lebih lanjut terkait Lomba Desain Poster dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', 'c8e0499b161b35afc417e57a002643f0.png', '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaPOSTER', 1, '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaPOSTER', '2020-11-03 20:58:36', 'Admin'),
(26, 10, 'Lomba Mobile Legend', '<p style=\"text-align:justify\">Informasi lebih lanjut terkait Lomba Mobile Legend dapat dilihat pada buku panduan pelaksanaan INTEGER #2</p>\r\n', '4c73be850513015774102777551b3f0b.png', '2020-11-05 00:00:00', '2020-12-04 00:00:00', 'https://s.id/LombaMLBB', 0, NULL, NULL, NULL, '2020-11-01 00:00:06', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s3_sponsor_integer`
--

CREATE TABLE `s3_sponsor_integer` (
  `id_sponsor_integer` int(11) NOT NULL,
  `id_integer` int(11) NOT NULL,
  `nama_sponsor_integer` varchar(200) NOT NULL,
  `deskripsi_sponsor_integer` text NOT NULL,
  `foto_sponsor_integer` text NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `s3_sponsor_integer`
--

INSERT INTO `s3_sponsor_integer` (`id_sponsor_integer`, `id_integer`, `nama_sponsor_integer`, `deskripsi_sponsor_integer`, `foto_sponsor_integer`, `create_at`, `create_by`) VALUES
(12, 21, 'Berita Sulawesi', '<p>Media Patner</p>\r\n', '916e2d6af8bf60a0640c277b7f847a7d.png', '2020-11-03 21:35:18', 'Admin'),
(13, 21, 'Ciamis Info', '<p>Media Patner</p>\r\n', '8e586c5a9c1eee35b0a7c62c8a53f411.jpg', '2020-11-03 22:40:05', 'Admin'),
(14, 21, 'Demi Jembrana', '<p>Media Patner</p>\r\n', '2bef2ba5134d76f97dfb2ecfff678543.png', '2020-11-03 22:41:08', 'Admin'),
(15, 21, 'DKV Bumigora', '<p>Media Patner</p>\r\n', '4fb6984f2e3860c641d616bd1d20f4f3.png', '2020-11-03 22:42:19', 'Admin'),
(16, 21, 'Eigerian Sumatra Selatan', '<p>Media Patner</p>\r\n', '8a880387353900b2075aa1a6a425983a.jpg', '2020-11-03 22:43:13', 'Admin'),
(17, 21, 'Gudang Lomba', '<p>Media Patner</p>\r\n', '9298826718c8c1e9086d5c50a1d7843a.jpg', '2020-11-03 22:49:44', 'Admin'),
(18, 21, 'Indramayu Info', '<p>Media Patner</p>\r\n', '0b94eee8a1224e413793c7f335071c66.jpg', '2020-11-03 22:52:00', 'Admin'),
(19, 21, 'Info Undiksha', '<p>Media Patner</p>\r\n', 'd9fee472ffa31eb36dbfc1f8a145b76c.jpg', '2020-11-03 22:52:20', 'Admin'),
(20, 21, 'Info Papua Barat', '<p>Media Patner</p>\r\n', 'e6d4820fd7f06776483b8b21f7d3c726.jpg', '2020-11-03 22:53:19', 'Admin'),
(21, 21, 'Info Undana', '<p>Media Patner</p>\r\n', 'f5e4289ca481f9e7498088ff7a1d759f.jpg', '2020-11-03 22:54:22', 'Admin'),
(22, 21, 'Info Kalimantan Timur', '<p>Media Patner</p>\r\n', '70ef26b15dd94a96b1d96319424477ad.jpg', '2020-11-03 22:55:05', 'Admin'),
(23, 21, 'Info Lombok', '<p>Media Patner</p>\r\n', 'f69057635608cd46e51f8ea607e0785d.jpg', '2020-11-03 22:56:26', 'Admin'),
(24, 21, 'Info Loker Lombook', '<p>Media Patner</p>\r\n', 'c429306adc8bf5dc4a6430b220a47130.jpg', '2020-11-03 22:57:06', 'Admin'),
(25, 21, 'Info Lombat Event', '<p>Media Patner</p>\r\n', '0daef5e97a14b20278c170424e3b9459.jpg', '2020-11-03 22:57:35', 'Admin'),
(26, 21, 'Info Lomba Kti Essay', '<p>Media Patner</p>\r\n', '6509bc238c1b39253d2a965d3d327366.jpg', '2020-11-03 22:58:02', 'Admin'),
(27, 21, 'Info Mahasiswa Indonesia', '<p>Media Patner</p>\r\n', '8265ce7070f9ced50b01a49e5a48d360.jpg', '2020-11-03 22:58:18', 'Admin'),
(28, 21, 'Info MJLK', '<p>Media Patner</p>\r\n', 'a4de14ba8dea23393c6075f918388633.jpg', '2020-11-03 22:58:35', 'Admin'),
(29, 21, 'Info Pendidikan Bali', '<p>Media Patner</p>\r\n', 'da0c566ed9c6424756fbcb8bf4276238.jpg', '2020-11-03 22:58:50', 'Admin'),
(30, 21, 'Kabar Undiksha', '<p>Media Patner</p>\r\n', '399fb9fdefdfe1cc0556d670a99d701c.png', '2020-11-03 22:59:09', 'Admin'),
(31, 21, 'Info Lomba Mahasiswa', '<p>Media Patner</p>\r\n', '87cd3050fe8027f7640f59c09c5b303e.jpg', '2020-11-03 23:00:20', 'Admin'),
(32, 21, 'Media Event', '<p>Media Patner</p>\r\n', 'de8be4567f1453717b5081f9da2ff4a4.jpg', '2020-11-03 23:00:59', 'Admin'),
(33, 21, 'Minang Galau', '<p>Media Patner</p>\r\n', '3f913d942ee1ff07cda6b8c237c313df.jpg', '2020-11-03 23:01:17', 'Admin'),
(34, 21, 'SMA N 2 Singaraja', '<p>Media Patner</p>\r\n', '33346a05c0f4078e88bcf9f74252d022.jpg', '2020-11-03 23:01:34', 'Admin'),
(35, 21, 'SMA N 1 Singaraja', '<p>Media Patner</p>\r\n', '839e0044cc7a33f3e417df04d95b31b5.jpg', '2020-11-03 23:01:46', 'Admin'),
(36, 21, 'Subang Info', '<p>Media Patner</p>\r\n', 'aaa8e1876debc907b87a282e3caf694d.jpg', '2020-11-03 23:01:59', 'Admin'),
(37, 21, 'Sulawesi Kekinian', '<p>Media Patner</p>\r\n', '0424a493776b6e30ebc2a85a3a74d1b3.jpg', '2020-11-03 23:02:13', 'Admin'),
(38, 21, 'Teknik Informatika Indonesia', '<p>Media Patner</p>\r\n', 'd4e90621b3ed444049759e32f911e283.jpg', '2020-11-03 23:02:30', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s4_informasi_umum`
--

CREATE TABLE `s4_informasi_umum` (
  `id_informasi` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat_asal` text NOT NULL,
  `alamat_sekarang` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `pilihan_wajib` varchar(100) NOT NULL,
  `pilihan_opsional` varchar(100) DEFAULT NULL,
  `riwayat_kesehatan` text DEFAULT NULL,
  `hobi` text DEFAULT NULL,
  `motto` text DEFAULT NULL,
  `ipk` float DEFAULT NULL,
  `sd` varchar(100) DEFAULT NULL,
  `thn_sd` varchar(4) DEFAULT NULL,
  `smp` varchar(100) DEFAULT NULL,
  `thn_smp` varchar(4) DEFAULT NULL,
  `sma` varchar(100) DEFAULT NULL,
  `thn_sma` varchar(4) DEFAULT NULL,
  `file_foto` text DEFAULT NULL,
  `file_dokumen` text DEFAULT NULL,
  `ket_wawancara` int(11) NOT NULL DEFAULT 0,
  `diterima_di` varchar(100) NOT NULL DEFAULT 'Belum Ada',
  `ket_lulus` int(11) NOT NULL DEFAULT 0,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s4_kegiatan`
--

CREATE TABLE `s4_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `icon_kegiatan` text NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `persyaratan` text NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_akhir` datetime NOT NULL,
  `aktivasi` int(1) NOT NULL DEFAULT 0,
  `target_pendaftar` int(11) NOT NULL,
  `jumlah_pendaftar` int(11) NOT NULL DEFAULT 0,
  `upload_file` int(11) NOT NULL DEFAULT 0,
  `informasi_pribadi` int(11) NOT NULL DEFAULT 0,
  `informasi_pendidikan` int(11) NOT NULL DEFAULT 0,
  `wawancara` int(11) NOT NULL DEFAULT 0,
  `penilaian` int(11) NOT NULL DEFAULT 0,
  `hasil_akhir` int(11) NOT NULL DEFAULT 0,
  `pengumuman` int(11) NOT NULL DEFAULT 0,
  `create_at` datetime NOT NULL,
  `create_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s4_pilihan`
--

CREATE TABLE `s4_pilihan` (
  `id_pilihan` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s4_wawancara`
--

CREATE TABLE `s4_wawancara` (
  `id_wawancara` int(11) NOT NULL,
  `id_informasi` int(11) NOT NULL,
  `nilai_1` float NOT NULL,
  `nilai_2` float NOT NULL,
  `nilai_3` float NOT NULL,
  `nilai_4` float NOT NULL,
  `total` float NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `create_by` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$zotV59v60G..Z2mko/zs0uGOQ6gAs9FyMaPckq5OvwfdtLGi6eNQ2', 'hmjtiundiksha@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1268889823, 1604408101, 1, 'Admin', '1815091037', 46, '081915656865'),
(22, '127.0.0.1', NULL, '$2y$10$O1KWWZXWdDoo8qm364F/4.qwXRG/78xxha6cAQ9wPGbUFwPLZgIje', 'irfan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601478582, 1603603369, 1, 'IRFAN WALHIDAYAH', '1815091002', 38, '08983197636'),
(23, '127.0.0.1', NULL, '$2y$10$UdZ.NWa/aTPtwQgR0MlO8./sUjlSPRpYuOQB8CsTtZT/cO0TWp9eS', 'jurnalistik@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601478638, 1604029034, 1, 'Sub Bidang Jurnalistik', '1815051083', 40, '081339289008'),
(24, '127.0.0.1', NULL, '$2y$10$DAWjFjedaWxM7yQEoLhFueum.UMmxHelnKxrFvFzncohmqe.y/v1O', 'riyan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, '960becbf65eb8fefad6b8a5949c4603b471a4819', '$2y$10$95reC7zPM2VWN3UAdlrNcOdYEZXbAbHRvYB3ZLqHmJddg.UUBmwGu', 1601992246, 1603673136, 1, 'I Gede Riyan Ardi Darmawan', '1815091037', 38, '081915656865'),
(25, '127.0.0.1', NULL, '$2y$10$SJfWbTDGZKBYEp5WI1.Dde1DAoq/46Ps9djX7LRe8OMvSnaCf8qtS', 'willy@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601992447, NULL, 1, 'Willy Yogantara Sidhi', '1815091063', 43, '087853652474'),
(26, '127.0.0.1', NULL, '$2y$10$t90cFNvkVrmnqhWHMSuj7OrSy6Q97DE7l2yXXVu7H3gwX9xGwZ7EC', 'primadwi84@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601992497, NULL, 1, 'Dwi Prima Handayani Putri', '1915101012', 45, '081246342145'),
(27, '127.0.0.1', NULL, '$2y$10$Ei8Psz3K2AemekBhdei7cuaDT5Dwcldb47DrmfVqAnkycLjpE7b1e', 'komangdianary23@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601994775, NULL, 1, 'Komang Dian Ary Kristiadi', '1815051040', 45, '081339320140'),
(28, '127.0.0.1', NULL, '$2y$10$SlIzdi2xRdhVBrSn21Peb.g..fA1V8KEEvV.7xhuc3W7imRqpu4dm', 'gustiaditya123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601994837, NULL, 1, 'Gusti Aditya Trisna Murti', '1815051092', 45, '0895395013615'),
(29, '127.0.0.1', NULL, '$2y$10$GgBXaa793c8eXSCroLAoZeWI2l03E53j8SjmhEzfXZy07Ooj9MDvS', 'zasyasatya@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601994963, NULL, 1, 'Putu Zasya Eka Satya Nugraha', '1915051024', 39, '081238824262'),
(30, '127.0.0.1', NULL, '$2y$10$HcFAFtNne78jsu.cy78Ix.yqZb2z6pnv3b2oB4cjwPI4ojcUMrCbq', 'anisamarta17@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601995022, NULL, 1, 'Ni Putu Anisa Marta Widyasari', '1915091024', 45, '081235170840'),
(31, '127.0.0.1', NULL, '$2y$10$EcWpGLCa908k7FfAihqe2.Q3vjZtx7.UfIq4vL7zhhUiOuQ7pE0Wm', 'rifki@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601995120, NULL, 1, 'Rifki Nur Fauzi', '1815091048', 42, '08980138994'),
(32, '127.0.0.1', NULL, '$2y$10$.PbI5DpKftREFzSKRj/zjOrlwLx.LeTueNni.he7fAKUeVxgQpKOK', 'erik@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1601995159, NULL, 1, 'Putu Erik Hendrawan', '1815051052', 41, '08980244454'),
(33, '127.0.0.1', NULL, '$2y$10$Qraf.xlZQe9b/vg0CMUhOui35qBEMqZwyp7Ugi2NA8pD4qtaAlela', 'bagus.alviantara@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602045314, 1603424112, 1, 'I Made Bagus Alviantara', '1915091037', 60, '082236608104'),
(34, '127.0.0.1', NULL, '$2y$10$OKhDauuCVTkRkLvhykaMJuQWlz7d3Uya40SuoDhszirGWuqcBDsd.', 'beny.indrawan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602045362, NULL, 1, 'Gede Beny Indrawan', '1915101002', 45, '087761750517'),
(35, '127.0.0.1', NULL, '$2y$10$HSg8e7NjHVjaqXtWINX8WOLIQQBYhwgWORvjbtVyzDZvsuHMc6URG', 'ega@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602045445, NULL, 1, 'I Putu Ega Suwidi Darma', '1805021012', 45, '08523774442'),
(36, '127.0.0.1', NULL, '$2y$10$bDcwWvWvkxwGuXCTKC7hjuQSRUFGIKRCtc2LwdOW5OlKqBq1C9M.K', 'dwiki.anggara49@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602045499, NULL, 1, 'I Made Dwiki Pasek Anggara', '1815051078', 45, '089606254400'),
(37, '127.0.0.1', NULL, '$2y$10$.ISk6Z2/vVlDvRqoKvGPfe3LLpeeED5zrbY.9LACI53vAqCSNXTby', 'nova.wirya@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, '796ab7cd10b7e091b4cc4ed48518106d23ba530e', '$2y$10$AlDtqJgx70oUPmUuOM1lmuD.w3VmU4o1BVhCOQeGgZeqYoNZUEaLS', 1602046090, 1603372928, 1, 'Ketut Nova Wirya Dinata', '1800000000', 51, '082237653029'),
(38, '127.0.0.1', NULL, '$2y$10$ntr/XNk9E6/V9jGwmoCP0eFwwxwSha5w200bPGIICXyabpndXYSfG', 'triarta.art@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046177, 1603693614, 1, 'I Nyoman Triarta', '1800000000', 52, '085967153944'),
(39, '127.0.0.1', NULL, '$2y$10$hnkNoIsALHwhshUA5VvKNeRiDqSH3UE.DmqRzsgnWVyP0UIKXYAvK', 'tesdyanakelin2001@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046222, 1603537961, 1, 'Ni Luh Putu Tesdyana Kelin', '1800000000', 54, '083112292535'),
(40, '127.0.0.1', NULL, '$2y$10$jQSWofC./CC0HgK0UOQaEOcFWiI7oBXhc1Pppxx9EGUwh3UkOrdyC', 'dwitasri123@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046268, 1603435502, 1, 'Ni Kadek Dwita Sri Wahyuni', '1800000000', 53, '081238758402'),
(41, '127.0.0.1', NULL, '$2y$10$9pgfC03xonKPowlGhhK8Z.vETzBoj/kwRemCr3Gkv/dC5z.ITk/j6', 'subiksaketutgede2000@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046316, 1603416387, 1, 'Ketut Gede Subiksa', '1800000000', 55, '081917021065'),
(42, '127.0.0.1', NULL, '$2y$10$aSNT2v3409GRypo8dD.VG.H.j1/QDHvmjq8KNXKgYN8ErYtlpsdAC', 'utaridp145@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046355, 1603503583, 1, 'Kadek Utari Darma Putri', '1800000000', 48, '085739637185'),
(43, '127.0.0.1', NULL, '$2y$10$3oDM160Ru.5mXwslBRyDYu5SJsvw10hIw3063RrtasdW4T3AX5E/K', 'pramayasa@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046397, 1603512952, 1, 'Komang Pramayasa', '1800000000', 49, '083114682628'),
(44, '127.0.0.1', NULL, '$2y$10$wLvn9ew6Z25WNfBvTsBtWuHMogDn0BkHUqdTQlyeMvmM.ydEMiWPS', 'vinavelina.id13@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046432, 1603452205, 1, 'Vina Velina', '1915051080', 56, '081805783010'),
(45, '127.0.0.1', NULL, '$2y$10$tJj9SOCslu424lxi3.cJQumWLnvztmnddVQ7mg3wwVGao0ogmGSIS', 'mitta20177@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046515, 1603635546, 1, 'Ni Made Ayu Mita Kusumadewi', '1800000000', 47, '082146115112'),
(46, '127.0.0.1', NULL, '$2y$10$RgXSbNSQlUrpdPOOIGin.eRQIyWR8ek1Il1hjfg4V4mUM2hYMs/.W', 'dius@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046561, 1603520889, 1, 'I Made Dius Wahyu Aditya', '1800000000', 39, '081239962713'),
(47, '127.0.0.1', NULL, '$2y$10$Ku1suPcVsdwsKcny5jbjTevtQfuYGcHoYLQlprkhU3YcGSqQLAggC', 'budi.setiawan@undiksha.ac.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602046995, 1603668398, 1, 'Gede Budi Setiawan', '1815051083', 50, '081339289008'),
(48, '127.0.0.1', NULL, '$2y$10$cUsR24xDSerDhGflvyn6g.69f1c6sauzHV/HNiOoM2I144FkFCZdu', 'anggiipuspita21@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602905975, 1603366629, 1, 'Anggi Puspita Lestari', '1815051047', 66, '081239186845'),
(49, '127.0.0.1', NULL, '$2y$10$1jwebYEOg5FNSP01lHVPSeU7EoRhwnVohAjhzpcaXnwYfLFQn92Aq', 'kadekramawasudewa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602906068, 1603622643, 1, 'Kadek Rama Wasudewa', '1815091046', 63, '082144853317'),
(50, '127.0.0.1', NULL, '$2y$10$hM2DVXycR8KqCk1AJ.cWZuJECm9U9etWoN518F4A3AbtaIJn3msEy', 'komangwiidyas@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602906247, 1603341872, 1, 'Ni Komang Sri Widyastuti', '1915051033', 57, '085739533769'),
(51, '127.0.0.1', NULL, '$2y$10$pqkVhEO9EX.O.j235R2pl.gt.RAhTIrUah8dZE6xtXDKzAXRIp5iq', 'wisnuputu200@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602906319, 1603331974, 1, 'Putu Wisnu Ardia Chandra', '1915051017', 59, '087774460530'),
(52, '127.0.0.1', NULL, '$2y$10$U4LcmsyFm1FrDcmMc8SlteGTLPTChSfJsUM1UNmn72CX2boiKQ6sq', 'krisnadarmawan07@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602906392, 1603366489, 1, 'I Made Krisna Darmawan', '1815051059', 61, '087760052129'),
(53, '127.0.0.1', NULL, '$2y$10$pZ9LYrYSOMIMMYYQqjwMsujdRKRq/atXngRyAaDLuXZgjqJPBmrSS', 'dehandy14@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602906456, 1603535563, 1, 'I Gede Handy Tresna Wirawan', '1815051085', 64, '081238934049'),
(54, '127.0.0.1', NULL, '$2y$10$1tFNjkEVukGDrJ3qI1gxVeV3sjTP5Nxz93oRjHx4pKTHAqB9qVdvm', 'devabrilsana@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602906788, 1603547739, 1, 'Komang Deva Bayudi Brilsana', '1815051018', 65, '081931635966'),
(55, '127.0.0.1', NULL, '$2y$10$zcw6kj2fnfa4D98OBDFNauKSyv4bjCBZpL9x9p2IhW/zZODgymMY.', 'arpinese.1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602906858, 1603549204, 1, 'I Gede Anggie Suardika Arpin', '1915091008', 58, '082237256677'),
(56, '127.0.0.1', NULL, '$2y$10$7Bg7MsGW9dAxBsI/7hAAGOUCEx3Fzn60TKpGASPSBKBzdw4yJORuy', 'jeprikusuma11@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602906912, 1603455131, 1, 'Komang Jepri Kusuma Jaya', '1915051025', 62, '081337178506');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(24, 1, 1),
(99, 22, 5),
(101, 23, 2),
(84, 24, 5),
(39, 25, 2),
(40, 26, 2),
(41, 27, 2),
(42, 28, 2),
(73, 29, 5),
(44, 30, 2),
(46, 31, 2),
(47, 32, 2),
(100, 33, 4),
(56, 34, 2),
(57, 35, 2),
(58, 36, 2),
(61, 37, 4),
(82, 38, 4),
(74, 39, 4),
(75, 40, 4),
(76, 41, 4),
(77, 42, 4),
(78, 43, 4),
(79, 44, 4),
(97, 45, 4),
(81, 46, 5),
(85, 47, 4),
(95, 48, 4),
(96, 49, 4),
(88, 50, 4),
(89, 51, 4),
(90, 52, 4),
(91, 53, 4),
(92, 54, 4),
(93, 55, 4),
(94, 56, 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_pilihan`);

--
-- Indeks untuk tabel `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id_links`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `s1_detail_hmj`
--
ALTER TABLE `s1_detail_hmj`
  ADD PRIMARY KEY (`id_detail_hmj`),
  ADD KEY `id_hmj` (`id_hmj`);

--
-- Indeks untuk tabel `s1_detail_kegiatan`
--
ALTER TABLE `s1_detail_kegiatan`
  ADD PRIMARY KEY (`id_detail_kegiatan`),
  ADD KEY `id_kegiatan_hmj` (`id_kegiatan_hmj`);

--
-- Indeks untuk tabel `s1_hmj`
--
ALTER TABLE `s1_hmj`
  ADD PRIMARY KEY (`id_hmj`);

--
-- Indeks untuk tabel `s1_informasi`
--
ALTER TABLE `s1_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `s1_kegiatan_hmj`
--
ALTER TABLE `s1_kegiatan_hmj`
  ADD PRIMARY KEY (`id_kegiatan_hmj`),
  ADD KEY `id_hmj` (`id_hmj`);

--
-- Indeks untuk tabel `s2_barang`
--
ALTER TABLE `s2_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `s2_detail_peminjaman`
--
ALTER TABLE `s2_detail_peminjaman`
  ADD PRIMARY KEY (`id_detail_peminjaman`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indeks untuk tabel `s2_organisasi`
--
ALTER TABLE `s2_organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indeks untuk tabel `s2_peminjam`
--
ALTER TABLE `s2_peminjam`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD KEY `id_organisasi` (`id_organisasi`);

--
-- Indeks untuk tabel `s2_peminjaman`
--
ALTER TABLE `s2_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_peminjam` (`id_peminjam`);

--
-- Indeks untuk tabel `s3_berita_integer`
--
ALTER TABLE `s3_berita_integer`
  ADD PRIMARY KEY (`id_berita_integer`),
  ADD KEY `id_integer` (`id_integer`);

--
-- Indeks untuk tabel `s3_detail_hari_integer`
--
ALTER TABLE `s3_detail_hari_integer`
  ADD PRIMARY KEY (`id_detail_hari_integer`),
  ADD KEY `id_hari_integer` (`id_hari_integer`);

--
-- Indeks untuk tabel `s3_hari_integer`
--
ALTER TABLE `s3_hari_integer`
  ADD PRIMARY KEY (`id_hari_integer`),
  ADD KEY `id_integer` (`id_integer`);

--
-- Indeks untuk tabel `s3_integer`
--
ALTER TABLE `s3_integer`
  ADD PRIMARY KEY (`id_integer`);

--
-- Indeks untuk tabel `s3_kategori_lomba_integer`
--
ALTER TABLE `s3_kategori_lomba_integer`
  ADD PRIMARY KEY (`id_kategori_lomba_integer`),
  ADD KEY `id_integer` (`id_integer`);

--
-- Indeks untuk tabel `s3_lomba_integer`
--
ALTER TABLE `s3_lomba_integer`
  ADD PRIMARY KEY (`id_lomba_integer`),
  ADD KEY `id_kategori_lomba_integer` (`id_kategori_lomba_integer`);

--
-- Indeks untuk tabel `s3_sponsor_integer`
--
ALTER TABLE `s3_sponsor_integer`
  ADD PRIMARY KEY (`id_sponsor_integer`),
  ADD KEY `id_integer` (`id_integer`);

--
-- Indeks untuk tabel `s4_informasi_umum`
--
ALTER TABLE `s4_informasi_umum`
  ADD PRIMARY KEY (`id_informasi`),
  ADD KEY `fk_info_kegiatan` (`id_kegiatan`);

--
-- Indeks untuk tabel `s4_kegiatan`
--
ALTER TABLE `s4_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `s4_pilihan`
--
ALTER TABLE `s4_pilihan`
  ADD PRIMARY KEY (`id_pilihan`),
  ADD KEY `fk_jabatan_pilihan` (`id_jabatan`),
  ADD KEY `fk_kegiatan_pilihan` (`id_kegiatan`);

--
-- Indeks untuk tabel `s4_wawancara`
--
ALTER TABLE `s4_wawancara`
  ADD PRIMARY KEY (`id_wawancara`),
  ADD KEY `fk_wawancara_info` (`id_informasi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`),
  ADD KEY `fk_company` (`company`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `links`
--
ALTER TABLE `links`
  MODIFY `id_links` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `s1_detail_hmj`
--
ALTER TABLE `s1_detail_hmj`
  MODIFY `id_detail_hmj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `s1_detail_kegiatan`
--
ALTER TABLE `s1_detail_kegiatan`
  MODIFY `id_detail_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `s1_hmj`
--
ALTER TABLE `s1_hmj`
  MODIFY `id_hmj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `s1_informasi`
--
ALTER TABLE `s1_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `s1_kegiatan_hmj`
--
ALTER TABLE `s1_kegiatan_hmj`
  MODIFY `id_kegiatan_hmj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `s2_barang`
--
ALTER TABLE `s2_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s2_detail_peminjaman`
--
ALTER TABLE `s2_detail_peminjaman`
  MODIFY `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s2_organisasi`
--
ALTER TABLE `s2_organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s2_peminjam`
--
ALTER TABLE `s2_peminjam`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s2_peminjaman`
--
ALTER TABLE `s2_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `s3_berita_integer`
--
ALTER TABLE `s3_berita_integer`
  MODIFY `id_berita_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `s3_detail_hari_integer`
--
ALTER TABLE `s3_detail_hari_integer`
  MODIFY `id_detail_hari_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `s3_hari_integer`
--
ALTER TABLE `s3_hari_integer`
  MODIFY `id_hari_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `s3_integer`
--
ALTER TABLE `s3_integer`
  MODIFY `id_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `s3_kategori_lomba_integer`
--
ALTER TABLE `s3_kategori_lomba_integer`
  MODIFY `id_kategori_lomba_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `s3_lomba_integer`
--
ALTER TABLE `s3_lomba_integer`
  MODIFY `id_lomba_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `s3_sponsor_integer`
--
ALTER TABLE `s3_sponsor_integer`
  MODIFY `id_sponsor_integer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `s4_informasi_umum`
--
ALTER TABLE `s4_informasi_umum`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT untuk tabel `s4_kegiatan`
--
ALTER TABLE `s4_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `s4_pilihan`
--
ALTER TABLE `s4_pilihan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `s4_wawancara`
--
ALTER TABLE `s4_wawancara`
  MODIFY `id_wawancara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `s1_detail_hmj`
--
ALTER TABLE `s1_detail_hmj`
  ADD CONSTRAINT `s1_detail_hmj_ibfk_1` FOREIGN KEY (`id_hmj`) REFERENCES `s1_hmj` (`id_hmj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s1_detail_kegiatan`
--
ALTER TABLE `s1_detail_kegiatan`
  ADD CONSTRAINT `s1_detail_kegiatan_ibfk_1` FOREIGN KEY (`id_kegiatan_hmj`) REFERENCES `s1_kegiatan_hmj` (`id_kegiatan_hmj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s1_kegiatan_hmj`
--
ALTER TABLE `s1_kegiatan_hmj`
  ADD CONSTRAINT `s1_kegiatan_hmj_ibfk_2` FOREIGN KEY (`id_hmj`) REFERENCES `s1_hmj` (`id_hmj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s2_detail_peminjaman`
--
ALTER TABLE `s2_detail_peminjaman`
  ADD CONSTRAINT `s2_detail_peminjaman_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `s2_barang` (`id_barang`),
  ADD CONSTRAINT `s2_detail_peminjaman_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `s2_peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s2_peminjam`
--
ALTER TABLE `s2_peminjam`
  ADD CONSTRAINT `s2_peminjam_ibfk_2` FOREIGN KEY (`id_organisasi`) REFERENCES `s2_organisasi` (`id_organisasi`);

--
-- Ketidakleluasaan untuk tabel `s2_peminjaman`
--
ALTER TABLE `s2_peminjaman`
  ADD CONSTRAINT `s2_peminjaman_ibfk_1` FOREIGN KEY (`id_peminjam`) REFERENCES `s2_peminjam` (`id_peminjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s3_berita_integer`
--
ALTER TABLE `s3_berita_integer`
  ADD CONSTRAINT `s3_berita_integer_ibfk_1` FOREIGN KEY (`id_integer`) REFERENCES `s3_integer` (`id_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s3_detail_hari_integer`
--
ALTER TABLE `s3_detail_hari_integer`
  ADD CONSTRAINT `s3_detail_hari_integer_ibfk_1` FOREIGN KEY (`id_hari_integer`) REFERENCES `s3_hari_integer` (`id_hari_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s3_hari_integer`
--
ALTER TABLE `s3_hari_integer`
  ADD CONSTRAINT `s3_hari_integer_ibfk_1` FOREIGN KEY (`id_integer`) REFERENCES `s3_integer` (`id_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s3_kategori_lomba_integer`
--
ALTER TABLE `s3_kategori_lomba_integer`
  ADD CONSTRAINT `s3_kategori_lomba_integer_ibfk_1` FOREIGN KEY (`id_integer`) REFERENCES `s3_integer` (`id_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s3_lomba_integer`
--
ALTER TABLE `s3_lomba_integer`
  ADD CONSTRAINT `s3_lomba_integer_ibfk_1` FOREIGN KEY (`id_kategori_lomba_integer`) REFERENCES `s3_kategori_lomba_integer` (`id_kategori_lomba_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s3_sponsor_integer`
--
ALTER TABLE `s3_sponsor_integer`
  ADD CONSTRAINT `s3_sponsor_integer_ibfk_1` FOREIGN KEY (`id_integer`) REFERENCES `s3_integer` (`id_integer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s4_informasi_umum`
--
ALTER TABLE `s4_informasi_umum`
  ADD CONSTRAINT `fk_info_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `s4_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s4_pilihan`
--
ALTER TABLE `s4_pilihan`
  ADD CONSTRAINT `fk_jabatan_pilihan` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_pilihan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kegiatan_pilihan` FOREIGN KEY (`id_kegiatan`) REFERENCES `s4_kegiatan` (`id_kegiatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `s4_wawancara`
--
ALTER TABLE `s4_wawancara`
  ADD CONSTRAINT `fk_wawancara_info` FOREIGN KEY (`id_informasi`) REFERENCES `s4_informasi_umum` (`id_informasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_company` FOREIGN KEY (`company`) REFERENCES `jabatan` (`id_pilihan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
