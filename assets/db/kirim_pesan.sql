-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 03:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kirim_pesan`
--

-- --------------------------------------------------------

--
-- Table structure for table `isi_pesan`
--

CREATE TABLE `isi_pesan` (
  `id` int(11) NOT NULL,
  `salam` text NOT NULL,
  `isi` longtext NOT NULL,
  `penutup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isi_pesan`
--

INSERT INTO `isi_pesan` (`id`, `salam`, `isi`, `penutup`) VALUES
(22, 'Assalamualaikum Bapak/ibu wali kelas X RPL.', 'Selamat pagi, mohon maaf mengganggu waktunya. Saya mendapatkan amanah dari sekolah untuk menginformasikan terkait administrasi keuangan sekolah Ananda', 'Mohon untuk melakukan angsuran administrasi keuangan sekolah, mengingat sudah akhir bulan supaya tidak terjadi penunggakan keuangan sekolah. Semoga bapak/ibu selalu dilampangkan rezekinya. Aamiin... 🙏🏻');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isi_pesan`
--
ALTER TABLE `isi_pesan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
