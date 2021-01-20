-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 09:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `matakuliah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `img`, `matakuliah`) VALUES
(1, 'Akhmad Ghasi', 'Akhmad_Ghasi_Pathollah.png', 'Psikologi Pendidikan'),
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
(1, 'Latar Belakang', 'Kurikulum yang digunakan di Sekolah Tinggi Ilmu Tarbiyah Togo Ambarsari (STITTA) Bondowoso pada dua Program Studi telah dirancang dan selalu dievaluasi serta direvisi oleh pihak Kampus STITTA. Kurikulum yang disusun selalu mengacu pada dokumen mutu yang dimiliki Program studi, yaitu Standar Akademik, Kebijakan akademik, Peraturan Akademik, manual Prosedur dan Manual mutu akademik. Kurikulum juga disusun sesuai dengan masukan stake holder internal dan eksternal serta kondisi kekinian, untuk mengikuti perkembangan iptek dan tuntutan stake holder memenuhi dan sangat gayut dengan visi, misi dan tujuan program studi. Untuk memenuhi kompetensi utama dan standar kompetensi sarjana kedokteran hewan dan dokter hewan, harus menempuh minimal 149 sks selama 8 semester. \r\nKurikulum yang dilaksanakan adalah kurikulum berbasis kompetensi yang mengacu standar KKNI, dan mengakomodasi tuntutan dan kebutuhan stake holder yang dimintakan masukannya pada saat lokakarya kurikulum yang bertujuan untuk merevisi kurikulum.\r\n'),
(2, 'Kebijakan', 'Kebijakan pendidikan dan panduan pendidikan di STITTA Bondowoso dinyatakan di dalam Peraturan Presiden Nomor 8 Tahun 2012 tentang Kerangka Kualifikasi Nasional Indonesia (KKNI) yaitu kerangka penjenjangan kualifikasi kompetensi yang dapat menyandingkan, menyetarakan, dan mengintegrasikan antara bidang pendidikan dan bidang pelatihan kerja serta pengalaman kerja dalam rangka pemberian pengakuan kompetensi kerja sesuai dengan struktur pekerjaan di berbagai sektor (pasal 1 ayat 1). Selanjutnya di dalam pasal 1 ayat 2 peraturan tersebut, CP dinyatakan sebagai kemampuan yang diperoleh melalui internalisasi pengetahuan, sikap, keterampilan, kompetensi, dan akumulasi pengalaman kerja. KKNI pada sistem pendidikan tinggi dinyatakan dalam Undang-Undang Republik Indonesia nomor 12 Tahun 2012 tentang Pendidikan Tinggi yang selanjutnya disingkat UU Dikti 12/2012. Pasal 29 UU Dikti 12/2012 menyatakan bahwa:\r\n1.Kerangka Kualifikasi Nasional merupakan penjenjangan capaian pembelajaran yang menyetarakan luaran bidang pendidikan formal, nonformal, informal, atau pengalaman kerja dalam rangka pengakuan kompetensi kerja sesuai dengan struktur pekerjaan di berbagai sektor.\r\n2.Kerangka Kualifikasi Nasional sebagaimana dimaksud pada ayat (1) menjadi acuan pokok dalam penetapan kompetensi lulusan pendidikan akademik, pendidikan vokasi, dan pendidikan profesi.\r\n3.Penetapan kompetensi lulusan sebagaimana dimaksud pada ayat (2) ditetapkan oleh Menteri.\r\n');

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

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `kategori_id`, `judul`, `tanggal`, `file`) VALUES
(1, 2, 'Pengaruh Religiusitas terhadap pembelajaran Agama Islam', '2021-01-20', 'FPPKPN.pdf');

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
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `nama`, `keterangan`, `status`) VALUES
(4, 'Seminar_Demokrasi.jpg', 'Slider Satu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `img`, `jabatan`) VALUES
(1, 'Atiqotul Fitriyah', 'Atiqotul_Fitriyah.png', 'TU'),
(2, 'Nurur Rahman', 'Nurur_Rahman.png', 'TU'),
(3, 'Dr. Hasan Sayfullah', 'Dr._Hasan_Sayfullah.png', 'Senat Kampus'),
(4, 'Misbahul Munir', 'Misbahul_Munir.png', 'P. Kurikulum');

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
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_jurnal`
--
ALTER TABLE `kategori_jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_jurnal`
--
ALTER TABLE `kategori_jurnal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
