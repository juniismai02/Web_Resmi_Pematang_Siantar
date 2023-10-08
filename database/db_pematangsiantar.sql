-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 07:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pematangsiantar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `agenda_deskripsi` text DEFAULT NULL,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(1, 'Penyembelihan Hewan Kurban Idul Adha 2022', '2022-07-27 06:18:01', 'Idul Adha yang biasa disebut lebaran haji atapun lebaran kurban sangat identik dengan penyembelihan hewan kurban. M-Sekolah tahun ini juga melakukan penyembelihan hewan kurban. Yang rencananya akan dihadiri oleh guru-guru, siswa dan pengurus OSIS.', '2022-08-27', '2022-08-27', 'Website Resmi Kota Pematang Siantar', '08.00 - 11.00 WIB', 'Dihadiri oleh guru-guru, siswa dan pengurus OSIS', 'Kurnia Agung'),
(2, 'Peluncuran Website Resmi Website Resmi Kota Pematang Siantar', '2022-07-27 06:26:33', 'Peluncuran website resmi  Website Resmi Kota Pematang Siantar, sebagai media informasi dan akademik online untuk pelayanan pendidikan yang lebih baik kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat.', '2022-08-27', '2022-06-27', 'Website Resmi Kota Pematang Siantar', '07.30 - 12.00 WIB', '-', 'Kurnia Agung'),
(3, 'Penerimaan Raport Semester Ganjil Tahun Ajaran 2022-2023', '2022-08-28 06:29:49', 'Berakhirnya semester ganjil tahun pelajaran 2022-2023, ditandai dengan pembagian laporan hasil belajar.', '2022-08-18', '2022-08-27', 'Website Resmi Kota Pematang Siantar', '07.30 - 12.00 WIB', 'Untuk kelas V dan VI, pembagian raport dimulai pukul 07.30 WIB. Sedangkan untuk kelas V pada pukul 09.00 WIB. Raport diambil oleh orang tua/wali murid masing-masing.', 'Kurnia Agung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT 0,
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(6, 'Header Beranda', '2023-10-01 08:46:07', 1, 'Kurnia Agung', 2, 'd79ca056658ef59fda36c249063b7c07.jpg'),
(7, 'Galeri Kota', '2023-10-03 12:15:48', 1, 'Kurnia Agung', 7, '263576daa7386d2870769318192360f0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text DEFAULT NULL,
  `file_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT 0,
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(19, '-', '2022-07-27 07:50:34', '553a931e252ed1943649d1b380c0c0b1.png', 4, 1, 'Kurnia Agung'),
(20, '-', '2022-07-27 07:50:45', '0b437d2becfbd73d34d35c3b457049d9.png', 4, 1, 'Kurnia Agung'),
(21, '-', '2022-07-27 07:50:54', '7e51facf2598b268c359c94b7d9a5905.png', 4, 1, 'Kurnia Agung'),
(22, '-', '2022-07-27 07:51:03', 'aae55c4f0f0e3481a90eed16c5b357de.png', 4, 1, 'Kurnia Agung'),
(32, 'bfgsfdsdf', '2023-10-02 01:21:58', 'ff4b02b8b525d0bbc81fda4df694d6e4.png', 6, 1, 'Kurnia Agung'),
(33, 'bndb', '2023-10-02 01:22:27', '0afbc36187f2b754121612f88760b714.png', 6, 1, 'Kurnia Agung'),
(35, 'fdbdb', '2023-10-03 12:16:13', '672840e2c744a78943422009ed315421.jpg', 7, 1, 'Kurnia Agung'),
(36, 'dfbfdb', '2023-10-03 12:16:25', 'c8b1c7c482490f6f2d4a548ba71eb79c.jpg', 7, 1, 'Kurnia Agung'),
(37, 'dfbdb', '2023-10-03 12:16:39', '994289797c26bb105d005cb272c9bd62.jpg', 7, 1, 'Kurnia Agung'),
(38, 'bdfbdb', '2023-10-03 12:16:50', 'e2948b3776f0d0118fa87e5a1023c598.jpg', 7, 1, 'Kurnia Agung'),
(39, 'ghn', '2023-10-03 12:17:08', '98f200323865b61f5d8c170d6da4ea1d.jpg', 7, 1, 'Kurnia Agung'),
(40, 'nhgnjgj', '2023-10-03 12:20:12', 'ca38144b78dd85a401b2efbe786d0e1c.jpg', 7, 1, 'Kurnia Agung'),
(41, 'yjg', '2023-10-03 12:20:26', '8743283bb24217052e1bee82b3280d5a.jpg', 7, 1, 'Kurnia Agung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`guru_id`, `guru_nip`, `guru_nama`, `guru_jenkel`, `guru_tmp_lahir`, `guru_tgl_lahir`, `guru_mapel`, `guru_photo`, `guru_tgl_input`) VALUES
(1, '927482658274923', 'ARIFIN SIREGAR', 'L', 'Pematangsiantar ', '01/08/1974', 'Matematika', '0f660490b67167019d9b9731e88ebafd.png', '2017-01-26 07:49:43'),
(2, '927482658274989', 'MAHDALENA HASIBUAN, S.H.I', 'P', 'Pematangsiantar', '08/05/1978', 'Tematik', 'a21b60d5fecf93c324f777ca034eb2d6.png', '2017-01-26 13:38:54'),
(3, '-', 'FITRI DIANAN, S.Pd', 'P', 'Perapat Hulu', '28/04/1987', 'B.Inggris', 'dd3c83f96c1900c5603758c08e460665.png', '2017-01-26 13:41:20'),
(4, '-', 'MARIANI SYAHPUTRI, S.Pd', 'P', 'Pematangsiantar ', '07/01/1982', 'Takhasus', '02f4c649bfb2a4f8219ba79c9d633f74.png', '2017-01-26 13:42:08'),
(5, '-', 'ADILA SINTIA DEWI, S.Pd', 'P', 'Pematangsiantar', '25/02/1996', 'Bahasa Indonesia', '2f32881f108d310502b2ca65cf9a4e45.png', '2017-01-26 13:42:48'),
(6, '927482658274993', 'Ari Hidayat', 'L', 'Pematangsiantar', '07/01/1982', 'SKI', '17d6f3fbba4a669ad22c73aacb560012.png', '2017-01-26 13:43:46'),
(7, '927482658274995', 'WINDA LESTARI', 'P', 'Karang Sari', '28/03/2002', 'Fiqih', 'd587a249fb204febc14ff3a39fc2d4fe.png', '2017-01-26 13:45:11'),
(8, '-', 'NAURAH NAZHIFAH SILALAHI', 'P', 'Pematangsiantar', '30/09/1998', 'Penjaskes', '5bb01ca3a78863e350cd034a7ac9f19f.png', '2017-01-27 04:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Berita Terbaru', '2016-09-06 05:49:04'),
(2, 'Pengumuman', '2016-09-06 05:50:01'),
(3, 'Sosialisasi', '2016-09-06 05:59:39'),
(5, 'Kolom Informasi', '2016-09-06 06:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kelas_id`, `kelas_nama`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III'),
(4, 'IV'),
(5, 'V'),
(6, 'VI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', '2018-08-07 15:09:07', '1', 24, 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', '2018-08-07 15:14:26', '1', 24, 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', '2018-08-08 03:54:56', '1', 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text DEFAULT NULL,
  `log_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob DEFAULT NULL,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(7, 'Pematang Siantar', NULL, 'L', 'admin_psiantar', '2cb8d772770223ec2ed1792783d071f7', NULL, 'pematangsiantar@mail.go.id', 'pematangsiantar@mail', NULL, NULL, NULL, NULL, 1, '1', '2023-10-03 12:40:17', '1dca31bdb398b85310510c6484c7a3c7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text DEFAULT NULL,
  `pengumuman_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(1, 'Pengumuman Libur Semester Ganjil Tahun Ajaran 2022-2023', 'Libur semester ganjil tahun ajaran 2022-2023 dimulai dari tanggal 3 Maret 2023 sampai dengan tanggal 7 Maret 2023.', '2022-08-27 01:17:30', 'Kurnia Agung'),
(2, 'Pengumuman Pembagian Raport Semester Ganjil Tahun Ajaran 2022-2023', 'Menjelang berakhirnya proses belajar-mengajar di semester ganjil tahun ajaran 2022-2023, maka akan diadakan pembagian hasil belajar/raport pada tanggal 4 Maret 2017 pukul 07.30 WIB.\r\nYang bertempat di Website Resmi Kota Pematang Siantar . Raport diambil oleh orang tua/wali kelas murid masing-masing', '2022-01-17 01:16:20', 'Kurnia Agung'),
(3, 'Pengumuman Peresmian dan Launching Website Perdana Website Resmi Kota Pematang Siantar ', 'Peresmian dan launching website resmi Website Resmi Kota Pematang Siantar  akan diadakan pada hari 23 Desember 2022 pukul 10.00, bertepatan dengan pembagian raport semester ganjil tahun ajaran 2022-2023', '2022-09-21 07:16:16', 'M Fikri Setiadi'),
(4, 'Pengumuman Proses Belajar Mengajar di Semester Genap Tahun Ajaran 2022-2023', 'Setelah libur semester ganjil tahun ajaran 2022 - 2023, proses belajar mengajar di semester genap tahun ajaran 2022-2023 mulai aktif kembali tanggal 2 Maret 2023.', '2022-08-28 07:15:28', 'Kurnia Agung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2022-07-18 01:51:32', '::1', 'Chrome'),
(932, '2022-07-19 15:24:09', '::1', 'Chrome'),
(933, '2022-07-19 17:54:49', '::1', 'Chrome'),
(934, '2022-07-22 03:52:16', '::1', 'Chrome'),
(935, '2022-07-25 02:17:36', '::1', 'Chrome'),
(936, '2022-07-26 10:07:37', '::1', 'Chrome'),
(937, '2022-07-27 01:59:32', '::1', 'Chrome'),
(938, '2022-07-28 02:38:31', '::1', 'Chrome'),
(939, '2022-07-28 04:47:36', '127.0.0.1', 'Firefox'),
(940, '2022-08-03 07:07:04', '::1', 'Chrome'),
(941, '2022-08-09 08:02:36', '::1', 'Chrome'),
(942, '2022-08-11 02:08:05', '::1', 'Chrome'),
(943, '2022-08-16 03:12:10', '::1', 'Chrome'),
(944, '2023-10-01 07:14:45', '::1', 'Chrome'),
(945, '2023-10-01 17:01:00', '::1', 'Chrome'),
(946, '2023-10-02 22:29:25', '::1', 'Chrome'),
(947, '2023-10-03 17:02:11', '::1', 'Chrome');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nis` varchar(20) DEFAULT NULL,
  `siswa_nama` varchar(70) DEFAULT NULL,
  `siswa_jenkel` varchar(2) DEFAULT NULL,
  `siswa_kelas_id` int(11) DEFAULT NULL,
  `siswa_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`siswa_id`, `siswa_nis`, `siswa_nama`, `siswa_jenkel`, `siswa_kelas_id`, `siswa_photo`) VALUES
(1, '9287482', 'Alvaro Sanchez', 'L', 8, '083d547659a2d4bb15c0322d15955da5.png'),
(2, '9287483', 'Ririn Cantika', 'P', 8, '74eec6ad37550cc12fe8fa83d46878af.jpg'),
(4, '123083', 'Ari Hidayat', 'L', 3, '3c0c33e19cf9823f27e973c9e7a5e5bd.png'),
(5, '123084', 'Irma Chaiyo', 'P', 2, '3dbe940f900b92a4e3f65afca3f6d0f7.png'),
(6, '123085', 'Nadila Ginting', 'P', 4, '8fcfb5ae63dedbc54cc3be976287ab52.png'),
(7, '123086', 'Anna Marina', 'P', 5, '998fff65e9b61ead87f487de5ab13fdc.png'),
(8, '123086', 'Dhea Lubis', 'P', 5, 'c51baf4cca7272ded23548933c9ae4a3.png'),
(9, '123087', 'Nadia Ginting', 'P', 6, 'fd4d3a36e2337d11ae5e0652c4eb3832.png'),
(10, '123088', 'Mita Febrina', 'P', 1, 'a1ff0beccdd43d2fe52230d506855484.png'),
(11, '123089', 'Elizabeth ', 'P', 3, '2ad9abcc07a22a29bf46845fb6de7dda.png'),
(12, '123090', 'Della Guswono', 'P', 2, '696f81c7f3447af445847da96bb358aa.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `testimoni_id` int(11) NOT NULL,
  `testimoni_nama` varchar(30) DEFAULT NULL,
  `testimoni_isi` varchar(120) DEFAULT NULL,
  `testimoni_email` varchar(35) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT 0,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT 0,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(26, 'utryrtyrt', '<p>tryrtyrtyrtyrt</p>\r\n', '2023-10-01 07:42:16', 1, 'Berita Terbaru', 12, '082ed3b8925f09b045b32678283ebef7.png', 1, 'Kurnia Agung', 0, 'utryrtyrt'),
(27, 'hhsdshdh', '<p>dhsdhsdh</p>\r\n', '2023-10-01 07:49:24', 3, 'Sosialisasi', 1, '05ed4ea601c91395e1f630ac9a7ab4bd.png', 1, 'Kurnia Agung', 0, 'hhsdshdh'),
(28, 'dghfhfg', '<p>fghfdghfgh</p>\r\n', '2023-10-01 07:49:38', 5, 'Kolom Informasi', 12, '8240de3bee107597cb4afb163f5ffc79.png', 1, 'Kurnia Agung', 0, 'dghfhfg'),
(42, 'vfsdgs', '<p>gsdfgsdg</p>\r\n', '2023-10-01 18:49:53', 1, 'Berita Terbaru', 13, 'c7a4787568f52f7248c62de61865c063.jpg', 1, 'Kurnia Agung', 0, 'vfsdgs'),
(43, 'jghjhjh', '<p>hjghjghj</p>\r\n', '2023-10-01 18:50:15', 1, 'Berita Terbaru', 1, '53baf0d6fd785d8e11f40586fd687834.jpg', 1, 'Kurnia Agung', 0, 'jghjhjh'),
(44, 'ghjghjghjgh', '<p>jfgjfgjfghj</p>\r\n', '2023-10-01 18:50:29', 1, 'Berita Terbaru', 1, 'fa128a8015c93668d61f55d9b31539fb.jpg', 1, 'Kurnia Agung', 0, 'ghjghjghjgh'),
(45, 'hjhgj', '<p>ghjfghjhfgj</p>\r\n', '2023-10-01 18:50:53', 3, 'Sosialisasi', 0, '1bddce6397ac9299bd46378fc0e8a36f.jpg', 1, 'Kurnia Agung', 0, 'hjhgj'),
(46, 'fgjfghjf', '<p>fghjhfgj</p>\r\n', '2023-10-01 18:51:18', 3, 'Sosialisasi', 0, '3e7803f097797013b9e9bdaf34e5a393.jpg', 1, 'Kurnia Agung', 0, 'fgjfghjf'),
(47, 'cvbncbn', '<p>cncvn</p>\r\n', '2023-10-01 18:51:44', 3, 'Sosialisasi', 1, '97706ec2e492f6c45907247010d3f2fd.jpg', 1, 'Kurnia Agung', 0, 'cvbncbn'),
(48, 'fghfghfg', '<p>fhdfhdf</p>\r\n', '2023-10-01 18:52:15', 1, 'Berita Terbaru', 2, '36243823ed90c104f1be1ebd789f3007.jpg', 1, 'Kurnia Agung', 0, 'fghfghfg'),
(49, 'jkjghkghj', '<p>ghjkghkgh</p>\r\n', '2023-10-01 18:52:49', 2, 'Pengumuman', 7, '3c2c7ca053269fc9248afe5bb6b7e648.jpg', 1, 'Kurnia Agung', 0, 'jkjghkghj'),
(50, 'rtyeryre', '<p>ertyertyert</p>\r\n', '2023-10-01 18:53:01', 5, 'Kolom Informasi', 14, '293149940045a69a9725daec0581dd5a.jpg', 1, 'Kurnia Agung', 0, 'rtyeryre'),
(51, 'fgdgsd', '<p>gsdfgsdg</p>\r\n', '2023-10-01 18:56:31', 1, 'Berita Terbaru', 32, '3afc2972a5d831b00d067877f43b2374.jpg', 1, 'Kurnia Agung', 0, 'fgdgsd'),
(52, 'mghmghm', '<p>hgmhgmgm</p>\r\n', '2023-10-02 15:09:45', 1, 'Berita Terbaru', 0, '85910375c468110f0c2c43424f1a1adf.png', 1, 'Kurnia Agung', 0, 'mghmghm'),
(53, 'fghsds', '<p>sghsff</p>\r\n', '2023-10-02 15:15:59', 2, 'Pengumuman', 0, 'e8c729557c24e34ff83e7d900fc93bfd.png', 1, 'Kurnia Agung', 0, 'fghsds'),
(54, 'vcxh', '<p>fghfhfgh</p>\r\n', '2023-10-02 15:16:24', 1, 'Berita Terbaru', 2, '9640995599f38e239535c16bfe88da06.png', 1, 'Kurnia Agung', 0, 'vcxh'),
(55, 'asdffd', '<p>gdfgdfg</p>\r\n', '2023-10-02 15:22:23', 5, 'Kolom Informasi', 1, 'f7bdae923aeb64bde9a598e7e184168a.png', 1, 'Kurnia Agung', 0, 'asdffd'),
(56, 'ghgdfh', '<p>fghfghfg</p>\r\n', '2023-10-02 15:27:09', 1, 'Berita Terbaru', 1, '162985ab32cd187a952e84dfd8bc04da.png', 1, 'Kurnia Agung', 0, 'ghgdfh'),
(57, 'apaaaa', '<p>apdfsdfsds</p>\r\n', '2023-10-03 05:01:03', 1, 'Berita Terbaru', 1, '79af73c7c7b0478f8de7a580dd20eaf0.png', 1, 'Kurnia Agung', 0, 'apaaaa'),
(58, 'asuuuu', '<p>gsdfgsdfgsd</p>\r\n', '2023-10-03 05:01:38', 5, 'Kolom Informasi', 1, '144354101fac0a6be5c8796f4cdb5646.png', 1, 'Kurnia Agung', 0, 'asuuuu'),
(59, 'ergerg', '<p>rgerger</p>\r\n', '2023-10-03 05:02:36', 1, 'Berita Terbaru', 0, '4800934d2f2211fbc1df07453e8ff3ed.png', 1, 'Kurnia Agung', 0, 'ergerg'),
(60, 'greger', '<p>ergerg</p>\r\n', '2023-10-03 05:02:45', 1, 'Berita Terbaru', 0, '3291e6e823181d63322126cb320537c9.png', 1, 'Kurnia Agung', 0, 'greger'),
(61, 'ergerg', '<p>ergerger</p>\r\n', '2023-10-03 05:02:54', 1, 'Berita Terbaru', 0, 'fcf898634def5505b3de538559f4946e.png', 1, 'Kurnia Agung', 0, 'ergerg'),
(62, 'ergergd', '<p>dfgdgd</p>\r\n', '2023-10-03 05:03:04', 1, 'Berita Terbaru', 0, 'f8374c47ce5a60ae8aecbb47f29bddf0.png', 1, 'Kurnia Agung', 0, 'ergergd'),
(63, 'dfgfdger', '<p>rgegergr</p>\r\n', '2023-10-03 05:03:24', 1, 'Berita Terbaru', 0, '780c7e82645c8bb6644e72455307c793.png', 1, 'Kurnia Agung', 0, 'dfgfdger'),
(64, 'cvgbdf', '<p>ghgfhfg</p>\r\n', '2023-10-03 05:03:33', 1, 'Berita Terbaru', 0, 'e2d306f202edc0a50621624090a9885e.png', 1, 'Kurnia Agung', 0, 'cvgbdf'),
(65, 'dfghdfgh', '<p>dfghdfh</p>\r\n', '2023-10-03 05:03:43', 2, 'Pengumuman', 1, 'e093d8d40903b6cd3636ca5c3b4d400c.png', 1, 'Kurnia Agung', 0, 'dfghdfgh'),
(66, 'dfghdfg', '<p>fdghfh</p>\r\n', '2023-10-03 05:03:53', 1, 'Berita Terbaru', 0, '37edb242cedf9a2205eaf17851e13c52.png', 1, 'Kurnia Agung', 0, 'dfghdfg'),
(67, 'cvhcfgh', '<p>fhfgh</p>\r\n', '2023-10-03 05:04:11', 5, 'Kolom Informasi', 1, 'ae6fff2a6fe25ded59206a2f77ebafe6.png', 1, 'Kurnia Agung', 0, 'cvhcfgh'),
(68, 'cvghx', '<p>fghfhdf</p>\r\n', '2023-10-03 05:04:22', 2, 'Pengumuman', 2, '8852b7a9084d11f6d4ecd9617f714dfe.png', 1, 'Kurnia Agung', 0, 'cvghx'),
(69, 'xcvghxcvh', '<p>fghfdh</p>\r\n', '2023-10-03 05:04:32', 3, 'Sosialisasi', 2, '234702c037d6cfd798bb981619a429fd.png', 1, 'Kurnia Agung', 0, 'xcvghxcvh'),
(70, 'ghcvh', '<p>fghfhfg</p>\r\n', '2023-10-03 05:04:42', 3, 'Sosialisasi', 0, '4875ea5e8e1f056d9d32fa456dfdb876.png', 1, 'Kurnia Agung', 0, 'ghcvh'),
(71, 'zaaaaa', '<p>dfdsfsdf</p>\r\n', '2023-10-03 05:06:10', 1, 'Berita Terbaru', 2, 'a101f9cc023654f07cc24da1f29c414c.png', 1, 'Kurnia Agung', 0, 'zaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indexes for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`testimoni_id`);

--
-- Indexes for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=948;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
