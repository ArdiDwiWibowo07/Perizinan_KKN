-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2022 pada 14.58
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bappeda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(4) NOT NULL,
  `id_kel` int(4) NOT NULL,
  `nama_desa` varchar(100) NOT NULL,
  `alamat_desa` varchar(100) NOT NULL,
  `telepon_desa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `id_kel`, `nama_desa`, `alamat_desa`, `telepon_desa`) VALUES
(1, 1, 'Pleret', 'Bantul', '098765456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kec` int(4) NOT NULL,
  `nama_kec` varchar(100) NOT NULL,
  `alamat_kec` varchar(100) NOT NULL,
  `telepon_kec` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kec`, `nama_kec`, `alamat_kec`, `telepon_kec`) VALUES
(1, 'Dlingo', 'Dlingo, Bantul', '12'),
(2, 'Imogiri', 'Imogiri, Bantul', '034567890'),
(3, 'Sedayu', 'Sedayu, bantul', '089999999'),
(4, 'Sewon', 'Sewon, Bantul', '088888888'),
(5, 'Kasihan', 'Kasihan, Bantul', '08777777'),
(6, 'Banguntapan', 'Banguntapan, Bantul', '08666666');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kel` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_kec` int(4) NOT NULL,
  `nama_kel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id_kel`, `id_user`, `id_kec`, `nama_kel`) VALUES
(0, 0, 0, ''),
(2, 2, 6, 'Banguntapan'),
(3, 33, 2, 'Girirejo'),
(4, 0, 3, 'Argodadi'),
(5, 0, 3, 'Argomulyo'),
(6, 42, 3, 'Argorejo'),
(7, 45, 3, 'Argosari'),
(8, 0, 4, 'Bangunharjo'),
(9, 41, 5, 'Bangunjiwo'),
(14, 0, 6, 'Tamanan'),
(16, 0, 6, 'Baturetno');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kkn`
--

CREATE TABLE `kkn` (
  `id_kkn` int(4) NOT NULL,
  `id_subpotensi` int(4) NOT NULL,
  `id_pg` int(4) NOT NULL,
  `jm_mhs` int(4) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `app_kel` enum('Menunggu','Diterima','Ditolak') NOT NULL DEFAULT 'Menunggu',
  `capaian` decimal(10,0) DEFAULT NULL,
  `proses` enum('Belum ada proses','Sedang Dikerjakan','Selesai','Gagal') NOT NULL,
  `app_bappeda` enum('Menunggu','Diterima','Ditolak') NOT NULL DEFAULT 'Menunggu',
  `id_proker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kkn`
--

INSERT INTO `kkn` (`id_kkn`, `id_subpotensi`, `id_pg`, `jm_mhs`, `tgl_awal`, `tgl_akhir`, `tanggal`, `file`, `app_kel`, `capaian`, `proses`, `app_bappeda`, `id_proker`) VALUES
(2, 1, 2, 30, '2022-08-31', '2022-10-31', '2022-08-08', '', 'Menunggu', '0', 'Belum ada proses', 'Ditolak', 1),
(3, 2, 2, 25, '2022-09-13', '2022-12-13', '2022-08-21', NULL, 'Diterima', NULL, 'Selesai', 'Diterima', 2),
(4, 6, 1, 32, '2022-09-18', '2022-11-18', '2022-07-21', 'file-4.pdf', 'Menunggu', '70', 'Sedang Dikerjakan', 'Diterima', 1),
(5, 9, 2, 40, '2022-08-29', '2022-10-29', '2022-07-18', 'file-5.pdf', 'Diterima', NULL, 'Sedang Dikerjakan', 'Menunggu', 2),
(10, 11, 1, 30, '2022-08-22', '2022-11-22', '2022-07-03', 'file-10.pdf', 'Menunggu', NULL, 'Belum ada proses', '', 2),
(11, 12, 2, 40, '2022-09-12', '2022-11-12', '2022-08-15', NULL, 'Ditolak', NULL, 'Selesai', '', 1),
(12, 19, 1, 54, '2023-01-03', '2023-04-03', '2022-12-12', 'file-12.pdf', 'Diterima', NULL, 'Selesai', 'Diterima', 0),
(13, 22, 1, 20, '2022-09-19', '2022-11-19', '2022-08-15', 'file-13.pdf', 'Ditolak', NULL, 'Gagal', '', 0),
(14, 25, 1, 20, '2022-08-29', '2022-09-29', '2022-07-18', 'file-14.pdf', 'Diterima', NULL, 'Sedang Dikerjakan', 'Ditolak', 0),
(15, 12, 2, 42, '2022-08-15', '2022-10-14', '2022-07-04', 'file-15.pdf', 'Diterima', NULL, 'Gagal', 'Diterima', 0),
(16, 14, 2, 25, '2022-09-05', '2022-10-17', '2022-07-04', 'file-16.pdf', 'Diterima', NULL, 'Selesai', '', 0),
(17, 14, 1, 47, '2022-08-22', '2022-10-28', '2022-07-11', 'file-17.pdf', 'Diterima', NULL, 'Sedang Dikerjakan', '', 0),
(18, 4, 2, 30, '2022-07-11', '2022-10-17', '2022-06-06', 'file-18.pdf', 'Diterima', NULL, 'Selesai', 'Diterima', 0),
(19, 5, 2, 26, '2022-09-12', '2022-10-24', '2022-07-11', NULL, 'Ditolak', NULL, 'Selesai', 'Diterima', 0),
(20, 22, 1, 60, '2022-08-23', '2022-09-10', '2022-08-21', 'file-20.pdf', 'Menunggu', NULL, 'Belum ada proses', '', 0),
(21, 6, 1, 31, '2022-09-03', '2022-09-10', '2022-08-21', 'file-21.pdf', 'Menunggu', NULL, 'Belum ada proses', '', 0),
(22, 12, 1, 12, '2022-10-13', '2022-11-13', '2023-01-13', NULL, 'Menunggu', NULL, 'Belum ada proses', 'Ditolak', 0),
(23, 12, 1, 20, '2022-10-28', '2022-10-28', '2022-10-28', NULL, 'Menunggu', NULL, 'Belum ada proses', 'Menunggu', 0),
(24, 0, 1, 12, '2022-11-26', '2022-11-26', '0000-00-00', NULL, 'Menunggu', NULL, 'Belum ada proses', 'Menunggu', 0),
(25, 9, 1, 12, '2022-11-26', '2022-11-26', '2022-11-16', NULL, 'Menunggu', NULL, 'Belum ada proses', 'Menunggu', 2),
(26, 66, 1, 12, '2022-11-27', '2022-11-27', '0000-00-00', NULL, 'Menunggu', NULL, 'Belum ada proses', 'Menunggu', 0),
(27, 66, 1, 12, '2022-11-27', '2022-11-27', '0000-00-00', NULL, 'Menunggu', NULL, 'Belum ada proses', 'Menunggu', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `telepon` text NOT NULL,
  `sosial_media` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `id_user`, `telepon`, `sosial_media`) VALUES
(1, 1, '08878868686857', 'bappeda@gmail.com'),
(2, 2, '08878868686857', 'bappeda@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pg`
--

CREATE TABLE `pg` (
  `id_pg` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `nama_pg` varchar(100) NOT NULL,
  `alamat_pg` varchar(100) NOT NULL,
  `telepon_pg` varchar(15) NOT NULL,
  `pic_pg` varchar(100) NOT NULL,
  `telepon_pic` varchar(15) NOT NULL,
  `email_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pg`
--

INSERT INTO `pg` (`id_pg`, `id_user`, `nama_pg`, `alamat_pg`, `telepon_pg`, `pic_pg`, `telepon_pic`, `email_pic`) VALUES
(1, 5, 'UTDI', 'Jl. Janti', '089999976', 'Auala', '0877777', 'auala@gmail.com'),
(2, 18, 'Universitas Gajah Mada', 'Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', '(0274) 588688', 'Nur Riska', '089876433', 'riska@gmail.com'),
(3, 19, 'Universitas Ahmad Dahlan', 'Jl. Kapas No.9, Semaki, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', '(0274) 563515', 'Anisa Cahya Ningrum', '0935773246446', 'anisa@gmail.com'),
(4, 20, 'Sekolah Tinggi Pariwisata Ambarrukmo Yogyakarta', 'Jl. Ahmad Yani Jl. Ringroad Timur No.52, Pelem Mulong, Banguntapan, Kec. Banguntapan, Kabupaten Bant', '(0274) 485650', 'Dewi Wulansari', '08234678655', 'wulan@gmail.com'),
(5, 25, 'IAIN', 'jogja', '082222', 'kur', '08333', 'kur@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `potensi`
--

CREATE TABLE `potensi` (
  `id_potensi` int(4) NOT NULL,
  `nama_potensi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `potensi`
--

INSERT INTO `potensi` (`id_potensi`, `nama_potensi`) VALUES
(0, ''),
(1, 'UMKM2'),
(2, 'Kerajinan'),
(3, 'Konveksi'),
(4, 'Peternakan'),
(5, 'IT'),
(6, 'Kerajinan'),
(7, 'Kesenian'),
(8, 'Konveksi'),
(9, 'Wisata'),
(10, 'Kesenian'),
(11, 'Wisata'),
(12, 'Peternakan'),
(13, 'Pertanian'),
(14, 'UMKM'),
(15, 'IT'),
(16, 'Kerajinan'),
(17, 'Konveksi'),
(18, 'UMKM'),
(19, 'Kerajinan'),
(20, 'Pertanian'),
(21, 'Wisata'),
(22, 'Peternakan'),
(23, 'Kerajinan'),
(24, 'Kesenian'),
(25, 'UMKM'),
(26, 'IT'),
(27, 'Kerajinan'),
(28, 'Konveksi'),
(37, ''),
(38, 'Contoh'),
(39, 'Contoh'),
(40, ''),
(41, 'PPP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `potkel`
--

CREATE TABLE `potkel` (
  `id_kel` int(11) NOT NULL,
  `id_potensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `potkel`
--

INSERT INTO `potkel` (`id_kel`, `id_potensi`) VALUES
(1, 2),
(2, 5),
(2, 3),
(2, 38),
(2, 2),
(2, 38),
(2, 13),
(2, 38);

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id_proker` int(11) NOT NULL,
  `nm_proker` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id_proker`, `nm_proker`) VALUES
(2, 'Berpartisipasi dalam acara keagamaan, Misal membuat program isra miraj, membuat program pengajian tiap malam rabu dan masih banyak lagi.'),
(3, 'Memberikan keterampilan bagi anak-anak sekolah. Misalnya memberi keterampilan menulis, memberikan keterampilan menari, melukis atau keterampilan dalam bentuk lain. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subpotensi`
--

CREATE TABLE `subpotensi` (
  `id_subpotensi` int(4) NOT NULL,
  `id_potensi` int(4) NOT NULL,
  `nama_subpotensi` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subpotensi`
--

INSERT INTO `subpotensi` (`id_subpotensi`, `id_potensi`, `nama_subpotensi`, `keterangan`) VALUES
(0, 0, '', ''),
(1, 1, 'Seragam Sekolah', 'Jual dan buat seragam sekolah SD, SMP, SMA'),
(2, 1, 'Dagang', 'Berdagang baju batik'),
(3, 1, 'Katering', 'Katering snack dan roti'),
(4, 2, 'Pengelolaan Enceng Gondok', 'Pembuatan perabotan rumah tanggan memanfaatkan enceng gondok'),
(5, 2, 'Ukir Kayu', 'Ukir kayu untuk kursi, meja, dan lemari'),
(6, 2, 'Kerajinan boneka', 'Kerajinan boneka lucu dengan limbah kertas'),
(7, 2, 'Anyaman Rotan', 'Membuat perabotan rumah dengan rotan'),
(8, 3, 'Design baju', 'membuat design untuk baju blouse'),
(9, 3, 'Bordir', 'pembuatan bordir untuk bedge dan baju'),
(10, 4, 'Ternak Bebek', 'Pemanfaatan telur bebek untuk telur asin'),
(11, 5, 'Web Programing', 'Membuat Web Responsive'),
(12, 5, 'Multimedia', 'Belajar dan menghasilkan dari corel draw dan photoshop'),
(13, 6, 'Kerajinan Batik', 'Memproduksi batik tulis dan batik cap'),
(14, 6, 'Bunga kering', 'Memproduksi kulit jagung untuk hiasan dibuat bunga kering'),
(15, 7, 'Kesenian Tari', 'Pelatihan untuk tari tradisional'),
(16, 7, 'Kesenian Wayang', 'Pelatihan untuk seni wayang'),
(17, 8, 'Bordir', 'Pembuatan bordir untuk bedge'),
(18, 9, 'Wisata Gunung', 'Wisata pemandangan bukit'),
(19, 9, 'Wisata Air', 'Wisata air terjun songgo langit dan waterboom tiara park'),
(20, 9, 'Wisata Religi', 'Makam Imam A.'),
(21, 10, 'Kesenian Tari', 'Belajar tari tradisional'),
(22, 10, 'Kesenian Vokal', 'Belajar vokal untuk pelatihan sinden'),
(23, 11, 'Wisata air', 'wisata pantai lebak dan pailus'),
(24, 11, 'Wisata Cagar alam', 'wisata cagar alam Kebun Raya Eka Karya'),
(25, 11, 'Wisata pertanian', 'wisata di perkebunan teh dan tebu'),
(26, 12, 'Peternakan sapi', 'peternakan sapi dengan memanfaatkan hasil susu dari sapi'),
(27, 13, 'Pertanian Tebu', 'Bartani tebu untuk pembuatan gula'),
(28, 13, 'Pertanian Coklat', 'bertani kokoa untuk distribusi kokoa'),
(29, 14, 'Penjualan Busana', 'Penjualan Busana dari kain batik'),
(30, 14, 'menanam sayur hidroponik', 'Pemanfaatan lahan kosong untuk belajar bertanam hidroponik'),
(31, 14, 'Produksi Tenun Ikat', 'Produksi dan penjualan tenun ikat lokal'),
(32, 14, 'Dagang Perhiasan Monel', 'produksi dan penjualan monel berupa perhiasal'),
(33, 15, 'Microsoft', 'Pelatihan untuk microsoft word dan microsoft excel'),
(34, 15, 'Jaringan', 'Pelatihan Untuk menghubungkan jaringan secara luas'),
(35, 16, 'Kerajinan Anyam', 'Pembuatan anyaman menggunakan bambu'),
(36, 17, 'Pembuatan Baju', 'Produksi Baju batik'),
(37, 17, 'Pembuatan Celana', 'Produksi Celana Training dan celana rumahan'),
(38, 18, 'Penjualan jajan trasdisional', 'Produksi dan penjualan jajan tradisional'),
(39, 19, 'Kerajinan tangan', 'pemanfaatan limbah kertas dan plastik '),
(40, 19, 'Kerajinan dari serbuk kayu', 'pemanfaatan serbuk kayu untuk dijadikan bahan mebel'),
(41, 20, 'Budidaya buah', 'Budidaya buah dari biji sampai berbuah'),
(42, 20, 'Budidaya bunga hias', 'Belajar dan membudidayakan bunga hias'),
(43, 20, 'Pertanian Hidroponik', 'Menanam sayuran dengan metode hidroponik'),
(44, 21, 'Wisata Pantai', 'Wisata pantai  Tanjung Karang'),
(45, 21, 'Wisata Budidaya Tanaman Strawberry', 'wisata untuk belajar budidaya tanaman strawberry di dataran tinggi'),
(46, 22, 'Peternakan Bebek', 'Budidaya bebek untuk dimanfaatkan telurnya'),
(47, 23, 'Kerajinan dari kerang', 'memanfaatkan kerang untuk  kerajinan hiasan rumah atau akseoris'),
(48, 23, 'Kerajinan Gerabah', 'Pembuatan perabotan dari tanah liat'),
(49, 24, 'Kesenian Wayang', 'Pelatihan kesenian wayang sejak dini'),
(50, 25, 'Penjualan hasil sayur', 'penjualan hasil sayur yang ditanam di daerah setempat'),
(51, 25, 'Penjualan buah', 'penjualan hasil buah yang ditanam di daerah setempat'),
(52, 26, 'Belajar Software dan Hardware', 'Pelatihan untuk software dan hardware komputer dan laptop'),
(53, 26, 'Belajar Bahasa pemrograman PHP', 'Pelatihan bahasa pemrograman PHP (Bonus Database)'),
(54, 27, 'Pemanfaatan Kertas', 'Pembuatan kertas dari ampas tebu dan kulit jagung'),
(55, 28, 'Pembuatan Baju Pariwista', 'Produksi baju untuk promosi wisata lokak'),
(56, 29, 'Peternakan Kambing', 'Peternakan kambing untuk dimanfaatkan susu dan dagingnya'),
(57, 29, 'Peternakan domba', 'Peternakan domba untuk diambil bulunya'),
(59, 2, 'Pasar', 'aaaaaa'),
(60, 2, 'Kateringa', 'aaaaaa'),
(62, 1, 'Gerabah', 'aaaaaa'),
(63, 0, '', ''),
(64, 0, '', ''),
(65, 1, 'Kateringa', 'aaa'),
(66, 5, 'Dkv', 'aa'),
(67, 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('LPPM','Kelurahan','Bappeda') NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Bappeda', 'bappeda', 'ini123', 'Bappeda', ''),
(2, 'Banguntapan', 'banguntapan', 'banguntapan', 'Kelurahan', ''),
(3, 'Mulyodadi', 'mulyodadi', 'mulyodadi123', 'Kelurahan', ''),
(4, 'Auala', 'auala', 'auala123', 'LPPM', ''),
(5, 'Fiya', 'fiya', 'fiya123', 'LPPM', ''),
(18, 'Nur Riska', 'riska', 'riska123', 'LPPM', ''),
(19, 'Anisa Cahya Ningrum', 'anisa', 'anisa123', 'LPPM', ''),
(20, 'Dewi Wulansari', 'wulan', 'wulan123', 'LPPM', ''),
(26, '', 'kurnia', 'kur', 'LPPM', ''),
(40, 'A', 'bappedak', 'f', 'Kelurahan', 'foto-1669218927.jpg'),
(44, '', 's', '03c7c0ace395d80182db07ae2c30f034', 'LPPM', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan`
--

CREATE TABLE `usulan` (
  `id_usulan` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL,
  `potensi` text DEFAULT NULL,
  `subpotensi` text DEFAULT NULL,
  `usulan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usulan`
--

INSERT INTO `usulan` (`id_usulan`, `id_kel`, `potensi`, `subpotensi`, `usulan`) VALUES
(1, 2, 'Kerajinan', 'Ukir Kayu', 'aa'),
(2, 0, NULL, NULL, 'Coba'),
(3, 2, NULL, NULL, 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indeks untuk tabel `kkn`
--
ALTER TABLE `kkn`
  ADD PRIMARY KEY (`id_kkn`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `pg`
--
ALTER TABLE `pg`
  ADD PRIMARY KEY (`id_pg`);

--
-- Indeks untuk tabel `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id_potensi`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- Indeks untuk tabel `subpotensi`
--
ALTER TABLE `subpotensi`
  ADD PRIMARY KEY (`id_subpotensi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id_usulan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kec` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kkn`
--
ALTER TABLE `kkn`
  MODIFY `id_kkn` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pg`
--
ALTER TABLE `pg`
  MODIFY `id_pg` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id_potensi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `subpotensi`
--
ALTER TABLE `subpotensi`
  MODIFY `id_subpotensi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id_usulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
