-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 05:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stitta`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `images` text NOT NULL,
  `judul` text NOT NULL,
  `isi_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `images`, `judul`, `isi_berita`) VALUES
(16, '2021-03-24', 'course-1-6.jpg', 'dsdada', '<p>dsadada</p>');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kat_berita`
--

CREATE TABLE `detail_kat_berita` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_kat_berita`
--

INSERT INTO `detail_kat_berita` (`id`, `id_kategori`, `id_berita`) VALUES
(34, 1, 16),
(35, 2, 16),
(36, 3, 16),
(37, 4, 16),
(38, 5, 16),
(39, 6, 16),
(40, 7, 16),
(41, 8, 16),
(42, 9, 16),
(43, 10, 16),
(44, 11, 16);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `matakuliah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `file`, `matakuliah`) VALUES
(1, 'Akhmad', 'Akhmad_Ghasi_Pathollah.png', 'Psikologi Pendidikan'),
(2, 'Ali Wafi ', 'Ali_Wafi.png', 'Manajemen SDM'),
(3, 'Anis Sulalah', 'Anis_Sulalah.png', 'Manajemen Keuangan'),
(4, 'Desi Susanti', 'Desi_Susanti.png', 'Microteaching'),
(5, 'Husnu F.S', 'Husnu_Fadilatus_Syarafah.png', 'M. Penelitian'),
(6, 'Muhalli', 'Muhalli_Dosen.png', 'Filsafat Islam'),
(7, 'Luthfiyatun Nawiroh', 'Luthfiyatun_Nawiroh.png', 'Manajemen Umum');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `uraian`) VALUES
(5, 'Latar Belakang', '<p style=\"text-align: justify; \">Kurikulum yang digunakan di Sekolah Tinggi Ilmu Tarbiyah Togo Ambarsari (STITTA) Bondowoso pada dua Program Studi telah dirancang dan selalu dievaluasi serta direvisi oleh pihak Kampus STITTA. Kurikulum yang disusun selalu mengacu pada dokumen mutu yang dimiliki Program studi, yaitu Standar Akademik, Kebijakan akademik, Peraturan Akademik, manual Prosedur dan Manual mutu akademik. Kurikulum juga disusun sesuai dengan masukan stake holder internal dan eksternal serta kondisi kekinian, untuk mengikuti perkembangan iptek dan tuntutan stake holder memenuhi dan sangat gayut dengan visi, misi dan tujuan program studi. Untuk memenuhi kompetensi utama dan standar kompetensi sarjana kedokteran hewan dan dokter hewan, harus menempuh minimal 149 sks selama 8 semester. Kurikulum yang dilaksanakan adalah kurikulum berbasis kompetensi yang mengacu standar KKNI, dan mengakomodasi tuntutan dan kebutuhan stake holder yang dimintakan masukannya pada saat lokakarya kurikulum yang bertujuan untuk merevisi kurikulum.<br></p>'),
(6, 'Kebijakan', '<p style=\"text-align: justify; \">Kebijakan pendidikan dan panduan pendidikan di STITTA Bondowoso dinyatakan di dalam Peraturan Presiden Nomor 8 Tahun 2012 tentang Kerangka Kualifikasi Nasional Indonesia (KKNI) yaitu kerangka penjenjangan kualifikasi kompetensi yang dapat menyandingkan, menyetarakan, dan mengintegrasikan antara bidang pendidikan dan bidang pelatihan kerja serta pengalaman kerja dalam rangka pemberian pengakuan kompetensi kerja sesuai dengan struktur pekerjaan di berbagai sektor (pasal 1 ayat 1). Selanjutnya di dalam pasal 1 ayat 2 peraturan tersebut, CP dinyatakan sebagai kemampuan yang diperoleh melalui internalisasi pengetahuan, sikap, keterampilan, kompetensi, dan akumulasi pengalaman kerja. KKNI pada sistem pendidikan tinggi dinyatakan dalam Undang-Undang Republik Indonesia nomor 12 Tahun 2012 tentang Pendidikan Tinggi yang selanjutnya disingkat UU Dikti 12/2012. Pasal 29 UU Dikti 12/2012 menyatakan bahwa: 1.Kerangka Kualifikasi Nasional merupakan penjenjangan capaian pembelajaran yang menyetarakan luaran bidang pendidikan formal, nonformal, informal, atau pengalaman kerja dalam rangka pengakuan kompetensi kerja sesuai dengan struktur pekerjaan di berbagai sektor. 2.Kerangka Kualifikasi Nasional sebagaimana dimaksud pada ayat (1) menjadi acuan pokok dalam penetapan kompetensi lulusan pendidikan akademik, pendidikan vokasi, dan pendidikan profesi. 3.Penetapan kompetensi lulusan sebagaimana dimaksud pada ayat (2) ditetapkan oleh Menteri.<br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `periode` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `tahun`, `periode`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(4, 2021, 1, '2021-03-02', '2021-08-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `keterangan`) VALUES
(1, 'PAI', 'PENDIDIKAN AGAMA ISLAM'),
(2, 'MAI', 'MANAGEMENT AGAMA ISLAM');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Berita'),
(2, 'Informasi'),
(3, 'Rencana Pengembangan'),
(4, 'Kegiatan Mahasiswa'),
(5, 'Pengabdian Masyarakat'),
(6, 'Kegiatan Ekstra dan Intra'),
(7, 'Kolom Mahasiswa'),
(8, 'Kolom Stitta'),
(9, 'Penunjang Perkuliahan'),
(10, 'Pustaka'),
(11, 'Kajian Periodik');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_jurnal`
--

CREATE TABLE `kategori_jurnal` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_jurnal`
--

INSERT INTO `kategori_jurnal` (`id`, `nama`) VALUES
(1, 'Salwatuna'),
(2, 'Educare'),
(3, 'Miftahuna');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kolommhs`
--

CREATE TABLE `kolommhs` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lambang`
--

CREATE TABLE `lambang` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lambang`
--

INSERT INTO `lambang` (`id`, `nama`, `keterangan`) VALUES
(1, 'photo6167814156976237147.png', '<ol><li style=\"text-align: justify; \">Buku terbuka melambangkan sumber ilmu pengetahuan yang senantiasa berkembang, menunjukkan wawasan yang luas, dan memberikan manfaat bagi manusia.</li><li style=\"text-align: justify;\">Pena melambangkan cita-cita dunia pendidikan yang ingin menciptakan manusia yang cerdas dan berkarakter.</li><li style=\"text-align: justify;\">Tugu melambangkan monumen pahlawan di kabupaten Bondowoso serta pendiri yayasan pondok pesantren.</li><li style=\"text-align: justify;\">Puncak Tugu melambangkan fokus manusia terhadap sang pencipta sebagai tujuan hidup.</li><li style=\"text-align: justify;\">Kubah melambangkan perisai dan karakter yang kuat dalam pengembanagn kepribadian yang beriman dan bertaqwa.</li><li style=\"text-align: justify;\">Bintang melambangkan sila pertama yakni Ke-Tuhan-an yang maha Esa dan wali songo sebagai penyebar Islam Nusantara.</li><li style=\"text-align: justify;\">Warna Hijau menunjukan simbol akan kehidupan, kesuburan, keamanan, dan lingkungan.</li><li style=\"text-align: justify;\">Warna Kuning menunjukan simbol kegembiraan dan harapan.</li><li style=\"text-align: justify;\">Warna Putih menunjukan simbol kesederhanaan, kemurnian, netral, dan elegan.</li><li style=\"text-align: justify;\">Warna Emas menunjukan simbol kesuksesan, prestasi, kemewahan, dan kemakmuran.</li><li style=\"text-align: justify;\">Warna Orange menunjukan simbol kehangatan, kenyamanan, dan keceriaan.</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id` int(11) NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id`, `misi`) VALUES
(1, 'Menyelenggarakan ilmu tarbiyah, Program Studi Manajemen Pendidikan Islam (MPI) dan Pendidikan Agama Islam (PAI) yang inovatif-kreatif dalam mengembangkan Tridharma Perguruan Tinggi sesuai regulasi dan kebutuhan zaman.'),
(2, 'Mengembangkan ilmu pengetahuan Islam melalui pengkajian dan penalaran ilmiah.'),
(3, 'Menyiapkan sumberdaya robbani yang mampu bersinergi dengan masyarakat dalam kehidupan sosial.'),
(4, 'Membentuk kepribadian muslim yang beriman, bertaqwa, berdaya, bermartabat, berakhlak mulia dan berkebangsaan.'),
(5, 'Membangun kepercayaan dan mengembangkan kerjasama dengan berbagai pihak untuk meningkatkan kualitas pelaksanaan Tridharma perguruan tinggi.');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `program_studi` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(75) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(5) NOT NULL,
  `alamat_siswa` varchar(255) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `no_ijasah` varchar(100) NOT NULL,
  `tgl_ijasah` date NOT NULL,
  `nilai_un` varchar(8) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id`, `kategori_id`, `tanggal`, `judul`, `keterangan`, `file`) VALUES
(3, 1, '2021-03-24', 'dsada', '<p>dadadada</p>', 'about-2-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesantren`
--

CREATE TABLE `pesantren` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pstudi`
--

CREATE TABLE `pstudi` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `uraian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pstudi`
--

INSERT INTO `pstudi` (`id`, `jurusan`, `uraian`) VALUES
(4, 'Manajemen Pendidikan Islam', '<p style=\"text-align: justify; \">Program Studi Manajemen Pendidikan Islam (MPI) berada dibawah strutur Sekolah Tinggi Ilmu Tarbiyah Togo Ambarsari (STITTA), sedangkan STIT TA berada dibawah naungan Yayasan Pondok Pesantren Manbaul Ulum Tangsil Weyan Wonosari Bondowoso Jawa Timur. Hal ini dapat dikatakan bahwa sebagai salah satu dari penyelenggaraan Pendidikan Tinggi yang telah berdiri kurang lebih 2,5 Tahun. Sekolah Tinggi Ilmu Tarbiyah Togo Ambarsari (STITTA) Bondowoso akan berupaya semaksimal mungkin dengan optimis yang berlipat mampu untuk meningkatkan eksistensi dan memajukan perguruan tinggi kedepan.</p><p style=\"text-align: justify; \">Program Studi Manajemen Pendidikan Islam (MPI) Sekolah Tinggi Ilmu Tarbiyah Togo Ambarsari (STITTA) berdasarkan SK dari Dirjen Pendis Kemenag RI telah terbit pada tanggal 10 Mei 2017 dengan Nomor SK 2647. Sekolah Tinggi Ilmu Tarbiyah Togo Ambarsari (STITTA) telah berjalan dengan penuh keyakinan animo masyarakat Bondowoso tertarik dan berminat untuk melanjutkan jenjang pendidikan ke Sekolah Tinggi Ilmu Tarbiyah Togo Ambarsari (STITTA) .pada tahun 2019 secara keseluruhan jumlah mahasiswa 77 Mahasiswa. Kedepan Program Studi Manajemen Pendidikan Islam (MPI) Sekolah Tinggi Ilmu Tarbiyah Togo Ambarsari (STITTA) mampu bersaing perguruan tinggi, akademik dan sebagainnya dengan perguruan tinggi lainnya. </p>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `nama` text NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `nama`, `keterangan`, `status`) VALUES
(4, 'Seminar_Demokrasi.jpg', 'Slider Satu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `file`, `jabatan`) VALUES
(1, 'Atiqotul Fitriyah', 'Atiqotul_Fitriyah.png', 'TU'),
(2, 'Nurur Rahman', 'Nurur_Rahman.png', 'TU'),
(3, 'Dr. Hasan Sayfullah', 'Dr._Hasan_Sayfullah.png', 'Senat Kampus'),
(4, 'Misbahul Munir', 'Misbahul_Munir.png', 'P. Kurikulum');

-- --------------------------------------------------------

--
-- Table structure for table `status_slider`
--

CREATE TABLE `status_slider` (
  `id` int(11) NOT NULL,
  `status_slider` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_slider`
--

INSERT INTO `status_slider` (`id`, `status_slider`) VALUES
(1, 'Aktif'),
(2, 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `strukturorg`
--

CREATE TABLE `strukturorg` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strukturorg`
--

INSERT INTO `strukturorg` (`id`, `keterangan`, `gambar`) VALUES
(1, 'STRUKTUR ORGANISASI STITTA WONOSARI TAHUN 2020 - 2025', 'chartorg.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `id` int(11) NOT NULL,
  `jurusan_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`id`, `jurusan_id`, `judul`, `keterangan`) VALUES
(4, 1, '', '<div>Administrasi :</div><div><br></div><div><ol><li>Beragama Islam</li><li>Warganegara Indonesia</li></ol><p>Umum :</p><ol><li>Baligh</li></ol></div>');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id` int(11) NOT NULL,
  `tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id`, `tujuan`) VALUES
(1, 'Menghasilkan lulusan berkualitas tinggi, bermartabat, yang mampu mengintegrasikan, menerapkan dan mengembangkan ilmu Pendidikan dan Manajemen agar mampu bersaing di tingkat nasional dan internasional.'),
(2, 'Menghasilkan penelitian inovatif yang mampu memecahkan permasalahan yang terjadi di masyarakat serta mendorong pengembangan ilmu pengetahuan dan teknologi dalam bidang Pendidikan dan Manajemen.'),
(3, 'Menghasilkan karya pengabdian kepada masyarakat yang dapat meningkatkan kemampuan masyarakat untuk mengidentifikasi, merumuskan dan memecahkan masalah yang berkaitan dengan bidang Pendidikan dan Manajemen secara mandiri dan berkelanjutan.'),
(4, 'Mewujudkan kemandirian program studi dan fakultas yang adaptif, kreatif, proaktif terhadap tuntutan perkembangan ilmu pengetahuan dan teknologi di bidang Pendidikan dan Manajemen'),
(5, 'Mengembangkan program studi dan fakultas berjiwa profesional yang berbasis riset dengan keunggulan kelas lokal, nasional, dan internasional yang berlandaskan nilai kebangsaan, moral agama, etika, dan kemandirian.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Administrator', 'admin@stitta.ac.id', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `visi`) VALUES
(1, 'Terwujudnya Sekolah Tinggi Ilmu Tarbiyah Togo Ambarsari yang Melesat dan Terpercaya dalam Menyiapkan Tenaga Pendidik dan Kependidikan yang Professional pada Tahun 2027.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `detail_kat_berita`
--
ALTER TABLE `detail_kat_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_jurnal`
--
ALTER TABLE `kategori_jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kolommhs`
--
ALTER TABLE `kolommhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lambang`
--
ALTER TABLE `lambang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesantren`
--
ALTER TABLE `pesantren`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pstudi`
--
ALTER TABLE `pstudi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_slider`
--
ALTER TABLE `status_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strukturorg`
--
ALTER TABLE `strukturorg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detail_kat_berita`
--
ALTER TABLE `detail_kat_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori_jurnal`
--
ALTER TABLE `kategori_jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kolommhs`
--
ALTER TABLE `kolommhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lambang`
--
ALTER TABLE `lambang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesantren`
--
ALTER TABLE `pesantren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pstudi`
--
ALTER TABLE `pstudi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_slider`
--
ALTER TABLE `status_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `strukturorg`
--
ALTER TABLE `strukturorg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
