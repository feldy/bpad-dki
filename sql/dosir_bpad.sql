-- phpMyAdmin SQL Dump
-- version 4.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2017 at 11:21 PM
-- Server version: 5.5.47-0ubuntu0.12.04.1
-- PHP Version: 7.0.15-1+deb.sury.org~precise+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dosir_bpad`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `sid` varchar(36) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `cover` varchar(50) NOT NULL,
  `viewed` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`sid`, `tanggal`, `judul`, `author`, `isi`, `category`, `cover`, `viewed`) VALUES
('1', '2017-02-08', 'Sejarah Ciliwung Masa Lampau dan Masa Kini !', 'feldy', '&lt;p&gt;\n        Ci Liwung, atau biasa ditulis Ciliwung[1] adalah salah satu sungai terpenting di Tatar Pasundan, Pulau Jawa - Indonesia; terutama karena melalui wilayah ibukota, DKI Jakarta, dan kerap menimbulkan banjir tahunan di wilayah hilirnya.\n    &lt;/p&gt;\n    &lt;p&gt;&lt;img alt=&quot;image&quot; class=&quot;img-responsive&quot; src=&quot;images/ciliwung-1.jpg&quot;&gt;&lt;/p&gt;\n    &lt;p&gt;\n        Panjang aliran utama sungai ini adalah hampir 120 km dengan daerah tangkapan airnya (daerah aliran sungai) seluas 387 km persegi.[2] Sungai ini relatif lebar dan di bagian hilirnya dulu dapat dilayari oleh perahu kecil pengangkut barang dagangan. Wilayah yang dilintasi Ci Liwung adalah Kabupaten Bogor, Kota Bogor, Kota Depok, dan Jakarta.\n    &lt;/p&gt;\n\n    &lt;p&gt;\n        Hulu sungai ini berada di dataran tinggi yang terletak di perbatasan Kabupaten Bogor dan Kabupaten Cianjur, atau tepatnya di Gunung Gede, Gunung Pangrango dan daerah Puncak. Setelah melewati bagian timur Kota Bogor, sungai ini mengalir ke utara, di sisi barat Jalan Raya Jakarta-Bogor, sisi timur Depok, dan memasuki wilayah Jakarta sebagai batas alami wilayah Jakarta Selatan dan Jakarta Timur. Ci Liwung bermuara di daerah Luar Batang, di dekat Pasar Ikan sekarang. Di sebelah barat, DAS Ci Liwung berbatasan dengan DAS Ci Sadane, DAS Kali Grogol dan DAS Kali Krukut. Sementara di sebelah timurnya, DAS ini berbatasan dengan DAS Kali Sunter dan DAS (Kali\n    &lt;/p&gt;\n    &lt;p&gt;&lt;img alt=&quot;image&quot; class=&quot;img-responsive&quot; src=&quot;images/ciliwung-2.jpg&quot;&gt;&lt;/p&gt;\n    &lt;p&gt;\n        Di daerah Manggarai aliran Ci Liwung banyak dimanipulasi untuk mengendalikan banjir. Jalur aslinya mengalir melalui daerah Cikini, Gondangdia, hingga Gambir, namun setelah Pintu Air Istiqlal jalur lama tidak ditemukan lagi karena telah dibuat kanal-kanal semenjak zaman Belanda dulu, seperti kanal di sisi barat Jalan Gunung Sahari dan Kanal Molenvliet di antara Jalan Gajah Mada dan Jalan Hayam Wuruk.[4] Di Manggarai, dibuat Kanal Banjir Barat yang mengarah ke barat, lalu membelok ke utara melewati Tanah Abang, Tomang, Jembatan Lima, hingga ke Pluit. Sedangkan Kanal Banjir Timur direncanakan mulai dari sekitar wilayah Kampung Melayu ke timur, menghubungkan aliran-aliran Ci Liwung, Ci Lilitan, Ci Pinang, Kali Sunter, Kali Buaran, Kali Cakung, hingga ke wilayah Marunda[5].\n    &lt;/p&gt;\n    &lt;p&gt;\n        Dari 13 sungai yang mengalir di Jakarta, Ci Liwung memiliki dampak yang paling luas ketika musim hujan karena ia mengalir melalui tengah kota Jakarta dan melintasi banyak perkampungan, perumahan padat, dan permukiman-permukiman kumuh. Sungai ini juga dianggap sungai yang paling parah mengalami perusakan dibandingkan sungai-sungai lain yang mengalir di Jakarta. Selain karena daerah tangkapan airnya di bagian hulu di wilayah Puncak dan Bogor yang rusak, badan sungai di wilayah Jakarta juga banyak mengalami penyempitan dan pendangkalan yang mengakibatkan daya tampung air sungai menyusut, dan mudah menimbulkan banjir.\n    &lt;/p&gt;\n    &lt;p&gt;&lt;img alt=&quot;image&quot; class=&quot;img-responsive&quot; src=&quot;images/ciliwung-3.jpg&quot;&gt;&lt;/p&gt;\n    &lt;p&gt;\n        Sistem pengendalian banjir sungai ini mencakup pembuatan sejumlah pintu air/pos pengamatan banjir, yaitu di Katulampa (Bogor), Depok, Manggarai, Karet, serta Pintu Air Istiqlal; serta dengan membagi aliran Ci Liwung melalui kanal-kanal banjir seperti yang diuraikan di atas. Pemerintah pernah merencanakan untuk membangun Waduk Ciawi di Gadog, Megamendung, Bogor sebagai cara untuk mengendalikan aliran sejak dari bagian hulu.\n    &lt;/p&gt;', 'Ciliwung', '', 1),
('2', '2017-02-09', 'Sejarah Ciliwung Masa Lampau dan Masa Kini 2!', 'feldy', '&lt;p&gt;\r\n        Ci Liwung, atau biasa ditulis Ciliwung[1] adalah salah satu sungai terpenting di Tatar Pasundan, Pulau Jawa - Indonesia; terutama karena melalui wilayah ibukota, DKI Jakarta, dan kerap menimbulkan banjir tahunan di wilayah hilirnya.\r\n    &lt;/p&gt;\r\n    &lt;p&gt;&lt;img alt=&quot;image&quot; class=&quot;img-responsive&quot; src=&quot;images/ciliwung-1.jpg&quot;&gt;&lt;/p&gt;\r\n    &lt;p&gt;\r\n        Panjang aliran utama sungai ini adalah hampir 120 km dengan daerah tangkapan airnya (daerah aliran sungai) seluas 387 km persegi.[2] Sungai ini relatif lebar dan di bagian hilirnya dulu dapat dilayari oleh perahu kecil pengangkut barang dagangan. Wilayah yang dilintasi Ci Liwung adalah Kabupaten Bogor, Kota Bogor, Kota Depok, dan Jakarta.\r\n    &lt;/p&gt;\r\n\r\n    &lt;p&gt;\r\n        Hulu sungai ini berada di dataran tinggi yang terletak di perbatasan Kabupaten Bogor dan Kabupaten Cianjur, atau tepatnya di Gunung Gede, Gunung Pangrango dan daerah Puncak. Setelah melewati bagian timur Kota Bogor, sungai ini mengalir ke utara, di sisi barat Jalan Raya Jakarta-Bogor, sisi timur Depok, dan memasuki wilayah Jakarta sebagai batas alami wilayah Jakarta Selatan dan Jakarta Timur. Ci Liwung bermuara di daerah Luar Batang, di dekat Pasar Ikan sekarang. Di sebelah barat, DAS Ci Liwung berbatasan dengan DAS Ci Sadane, DAS Kali Grogol dan DAS Kali Krukut. Sementara di sebelah timurnya, DAS ini berbatasan dengan DAS Kali Sunter dan DAS (Kali\r\n    &lt;/p&gt;\r\n    &lt;p&gt;&lt;img alt=&quot;image&quot; class=&quot;img-responsive&quot; src=&quot;images/ciliwung-2.jpg&quot;&gt;&lt;/p&gt;\r\n    &lt;p&gt;\r\n        Di daerah Manggarai aliran Ci Liwung banyak dimanipulasi untuk mengendalikan banjir. Jalur aslinya mengalir melalui daerah Cikini, Gondangdia, hingga Gambir, namun setelah Pintu Air Istiqlal jalur lama tidak ditemukan lagi karena telah dibuat kanal-kanal semenjak zaman Belanda dulu, seperti kanal di sisi barat Jalan Gunung Sahari dan Kanal Molenvliet di antara Jalan Gajah Mada dan Jalan Hayam Wuruk.[4] Di Manggarai, dibuat Kanal Banjir Barat yang mengarah ke barat, lalu membelok ke utara melewati Tanah Abang, Tomang, Jembatan Lima, hingga ke Pluit. Sedangkan Kanal Banjir Timur direncanakan mulai dari sekitar wilayah Kampung Melayu ke timur, menghubungkan aliran-aliran Ci Liwung, Ci Lilitan, Ci Pinang, Kali Sunter, Kali Buaran, Kali Cakung, hingga ke wilayah Marunda[5].\r\n    &lt;/p&gt;\r\n    &lt;p&gt;\r\n        Dari 13 sungai yang mengalir di Jakarta, Ci Liwung memiliki dampak yang paling luas ketika musim hujan karena ia mengalir melalui tengah kota Jakarta dan melintasi banyak perkampungan, perumahan padat, dan permukiman-permukiman kumuh. Sungai ini juga dianggap sungai yang paling parah mengalami perusakan dibandingkan sungai-sungai lain yang mengalir di Jakarta. Selain karena daerah tangkapan airnya di bagian hulu di wilayah Puncak dan Bogor yang rusak, badan sungai di wilayah Jakarta juga banyak mengalami penyempitan dan pendangkalan yang mengakibatkan daya tampung air sungai menyusut, dan mudah menimbulkan banjir.\r\n    &lt;/p&gt;\r\n    &lt;p&gt;&lt;img alt=&quot;image&quot; class=&quot;img-responsive&quot; src=&quot;images/ciliwung-3.jpg&quot;&gt;&lt;/p&gt;\r\n    &lt;p&gt;\r\n        Sistem pengendalian banjir sungai ini mencakup pembuatan sejumlah pintu air/pos pengamatan banjir, yaitu di Katulampa (Bogor), Depok, Manggarai, Karet, serta Pintu Air Istiqlal; serta dengan membagi aliran Ci Liwung melalui kanal-kanal banjir seperti yang diuraikan di atas. Pemerintah pernah merencanakan untuk membangun Waduk Ciawi di Gadog, Megamendung, Bogor sebagai cara untuk mengendalikan aliran sejak dari bagian hulu.\r\n    &lt;/p&gt;', 'Ciliwung', '', 14),
('3', '2017-02-10', 'Pilkada DKI 2017', 'feldy', 'ini content pilkada dki yang sudah berlangsung', 'Pilkada', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `sid` varchar(36) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`sid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
