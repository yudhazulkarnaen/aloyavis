-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 05:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aloyavis`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_servis_tersedia`
--

CREATE TABLE `alat_servis_tersedia` (
  `id_alat_tersedia` int(11) NOT NULL,
  `pistonringcompressor_jml` int(5) NOT NULL,
  `pistonringexpander_jml` int(5) NOT NULL,
  `valvespringcompressor_jml` int(5) NOT NULL,
  `oilfilterremover_jml` int(5) NOT NULL,
  `oilsealpuller_jml` int(5) NOT NULL,
  `bearingcuppuller_jml` int(5) NOT NULL,
  `universalpuller_jml` int(5) NOT NULL,
  `clutchcentralaligningtool_jml` int(5) NOT NULL,
  `bearingpullerattachment_jml` int(5) NOT NULL,
  `slidinghammer_jml` int(5) NOT NULL,
  `discbrakepistontool_jml` int(5) NOT NULL,
  `coilspringcompressor_jml` int(5) NOT NULL,
  `balljointseparator_jml` int(5) NOT NULL,
  `tierodremover_jml` int(5) NOT NULL,
  `differentialflangeholder_jml` int(5) NOT NULL,
  `impactdriver_jml` int(5) NOT NULL,
  `carlift_jml` int(5) NOT NULL,
  `enginestand_jml` int(5) NOT NULL,
  `mesinlas_jml` int(5) NOT NULL,
  `airgun_jml` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_servis_tersedia`
--

INSERT INTO `alat_servis_tersedia` (`id_alat_tersedia`, `pistonringcompressor_jml`, `pistonringexpander_jml`, `valvespringcompressor_jml`, `oilfilterremover_jml`, `oilsealpuller_jml`, `bearingcuppuller_jml`, `universalpuller_jml`, `clutchcentralaligningtool_jml`, `bearingpullerattachment_jml`, `slidinghammer_jml`, `discbrakepistontool_jml`, `coilspringcompressor_jml`, `balljointseparator_jml`, `tierodremover_jml`, `differentialflangeholder_jml`, `impactdriver_jml`, `carlift_jml`, `enginestand_jml`, `mesinlas_jml`, `airgun_jml`) VALUES
(1, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(2, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(3, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(4, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(5, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(6, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(7, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(8, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(9, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(10, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(11, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(12, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80),
(13, 71, 80, 96, 66, 72, 91, 72, 81, 87, 65, 90, 66, 81, 78, 64, 73, 83, 81, 72, 80);

-- --------------------------------------------------------

--
-- Table structure for table `alat_untuk_servis`
--

CREATE TABLE `alat_untuk_servis` (
  `id_servis_alat` int(5) NOT NULL,
  `pistonringcompressor` int(5) NOT NULL,
  `pistonringexpander` int(5) NOT NULL,
  `valvespringcompressor` int(5) NOT NULL,
  `oilfilterremover` int(5) NOT NULL,
  `oilsealpuller` int(5) NOT NULL,
  `bearingcuppuller` int(5) NOT NULL,
  `universalpuller` int(5) NOT NULL,
  `clutchcentralaligningtool` int(5) NOT NULL,
  `bearingpullerattachment` int(5) NOT NULL,
  `slidinghammer` int(5) NOT NULL,
  `discbrakepistontool` int(5) NOT NULL,
  `coilspringcompressor` int(5) NOT NULL,
  `balljointseparator` int(5) NOT NULL,
  `tierodremover` int(5) NOT NULL,
  `differentialflangeholder` int(5) NOT NULL,
  `impactdriver` int(5) NOT NULL,
  `carlift` int(5) NOT NULL,
  `enginestand` int(5) NOT NULL,
  `mesinlas` int(5) NOT NULL,
  `airgun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat_untuk_servis`
--

INSERT INTO `alat_untuk_servis` (`id_servis_alat`, `pistonringcompressor`, `pistonringexpander`, `valvespringcompressor`, `oilfilterremover`, `oilsealpuller`, `bearingcuppuller`, `universalpuller`, `clutchcentralaligningtool`, `bearingpullerattachment`, `slidinghammer`, `discbrakepistontool`, `coilspringcompressor`, `balljointseparator`, `tierodremover`, `differentialflangeholder`, `impactdriver`, `carlift`, `enginestand`, `mesinlas`, `airgun`) VALUES
(1, 5, 0, 0, 5, 3, 0, 3, 1, 0, 4, 0, 4, 0, 2, 3, 2, 0, 0, 3, 0),
(2, 3, 5, 0, 3, 0, 1, 0, 0, 0, 3, 1, 0, 3, 0, 0, 4, 3, 0, 0, 2),
(3, 1, 1, 0, 0, 3, 5, 4, 0, 0, 3, 2, 3, 0, 3, 4, 0, 3, 0, 0, 4),
(4, 1, 1, 0, 3, 0, 0, 5, 0, 4, 4, 2, 0, 0, 0, 5, 3, 0, 0, 4, 1),
(5, 0, 1, 0, 2, 2, 0, 4, 0, 0, 3, 1, 4, 0, 0, 3, 2, 1, 4, 5, 0),
(6, 2, 5, 4, 0, 3, 1, 0, 0, 0, 0, 1, 1, 0, 3, 5, 1, 0, 1, 4, 4),
(7, 4, 0, 1, 0, 0, 0, 3, 0, 2, 1, 4, 3, 4, 5, 0, 1, 0, 0, 0, 2),
(8, 0, 1, 2, 0, 1, 0, 0, 5, 3, 2, 3, 5, 4, 3, 4, 1, 4, 0, 2, 3),
(9, 0, 0, 1, 0, 0, 1, 3, 5, 2, 5, 1, 0, 1, 0, 0, 3, 0, 0, 4, 2),
(10, 0, 2, 0, 2, 0, 3, 5, 2, 3, 0, 0, 0, 4, 2, 4, 0, 5, 0, 5, 2),
(11, 0, 4, 0, 4, 0, 2, 4, 0, 4, 2, 1, 2, 5, 0, 2, 0, 0, 3, 4, 1),
(12, 0, 0, 0, 2, 5, 2, 4, 3, 1, 0, 2, 3, 4, 0, 1, 2, 0, 4, 0, 0),
(13, 3, 1, 1, 0, 4, 0, 0, 5, 3, 0, 0, 0, 2, 4, 4, 3, 1, 4, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `no_antrian` int(5) NOT NULL,
  `plat_nomor` varchar(99) NOT NULL,
  `jam_servis` time NOT NULL,
  `tgl_antrian` date NOT NULL,
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`no_antrian`, `plat_nomor`, `jam_servis`, `tgl_antrian`, `status`) VALUES
(0, 'AA2251BW', '08:00:00', '2022-11-30', 'cuci kendaraan'),
(2, 'B1124CD', '08:00:00', '2022-11-30', 'penyerahan work order'),
(3, 'B2425CD', '08:00:00', '2022-11-30', 'penyerahan work order'),
(1, 'B3628CD', '09:00:00', '2022-11-30', 'task list');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_peralatan`
--

CREATE TABLE `daftar_peralatan` (
  `id` int(5) NOT NULL,
  `nama_alat` varchar(99) NOT NULL,
  `singkatan_alat` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_peralatan`
--

INSERT INTO `daftar_peralatan` (`id`, `nama_alat`, `singkatan_alat`) VALUES
(1, 'Piston Ring Compressor', 'pistonringcompressor'),
(2, 'Piston Ring Expander', 'pistonringexpander'),
(3, 'Valve Spring Compressor', 'valvespringcompressor'),
(4, 'Oil Filter Remover', 'oilfilterremover'),
(5, 'Oil Seal Puller', 'oilsealpuller'),
(6, 'Bearing Cup Puller', 'bearingcuppuller'),
(7, 'Universal Puller', 'universalpuller'),
(8, 'Clutch Central Aligning Tool', 'clutchcentralaligningtool'),
(9, 'Bearing Puller Attachment', 'bearingpullerattachment'),
(10, 'Sliding Hammer', 'slidinghammer'),
(11, 'Disc Brake Piston Tool', 'discbrakepistontool'),
(12, 'Coil Spring Compressor', 'coilspringcompressor'),
(13, 'Ball Joint Separator/Remover/Tracker Ball Joint', 'balljointseparator'),
(14, 'Tie Rod Remover', 'tierodremover'),
(15, 'Differential Flange Holder', 'differentialflangeholder'),
(16, 'Impact Driver', 'impactdriver'),
(17, 'Car Lift', 'carlift'),
(18, 'Engine Stand', 'enginestand'),
(19, 'Mesin Las', 'mesinlas'),
(20, 'Air Gun', 'airgun');

-- --------------------------------------------------------

--
-- Table structure for table `dikerjakan_oleh`
--

CREATE TABLE `dikerjakan_oleh` (
  `id_dikerjakanoleh` varchar(99) NOT NULL,
  `serviceadvisor` varchar(99) NOT NULL,
  `kepalaregu` varchar(99) NOT NULL,
  `teknisi_a` varchar(99) NOT NULL,
  `teknisi_b` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dikerjakan_oleh`
--

INSERT INTO `dikerjakan_oleh` (`id_dikerjakanoleh`, `serviceadvisor`, `kepalaregu`, `teknisi_a`, `teknisi_b`) VALUES
('AA2251BW - 2022-11-29', 'Service Advisor', 'Kepala Regu 2', 'Saya Teknisi 3', 'Saya Teknisi 4'),
('AA2251BW - 2022-11-30', 'Service Advisor', 'Kepala Regu 1', 'Saya Teknisi 1', 'Saya Teknisi 2'),
('B1124CD - 2022-11-26', 'Service Advisor', 'Kepala Regu 1', 'Saya Teknisi 1', 'Saya Teknisi 2'),
('B1124CD - 2022-11-29', 'Service Advisor', 'Kepala Regu 1', 'Saya Teknisi 1', 'Saya Teknisi 2'),
('B3628CD - 2022-11-24', 'Service Advisor', 'Kepala Regu 2', 'Saya Teknisi 3', 'Saya Teknisi 4'),
('B5410CD - 2022-11-23', 'Service Advisor Cadangan', 'Kepala Regu 1', 'Saya Teknisi 1', 'Saya Teknisi 2'),
('B5410CD - 2022-11-27', 'Service Advisor Cadangan', 'Kepala Regu 3', 'Saya Teknisi 5', 'Saya Teknisi 6'),
('B9132CD - 2022-11-23', 'Service Advisor', 'Kepala Regu 3', 'Saya Teknisi 5', 'Saya Teknisi 6'),
('D1533FG - 2022-11-27', 'Service Advisor Cadangan', 'Kepala Regu 1', 'Saya Teknisi 1', 'Saya Teknisi 2'),
('F6531GHH - 2022-11-25', 'Service Advisor', 'Kepala Regu 3', 'Saya Teknisi 5', 'Saya Teknisi 6'),
('F7180KJ - 2022-11-27', 'Service Advisor Cadangan', 'Kepala Regu 2', 'Saya Teknisi 3', 'Saya Teknisi 4'),
('G5722OI - 2022-11-28', 'Service Advisor', 'Kepala Regu 1', 'Saya Teknisi 1', 'Saya Teknisi 2'),
('H6367BG - 2022-11-26', 'Service Advisor Cadangan', 'Kepala Regu 1', 'Saya Teknisi 1', 'Saya Teknisi 2'),
('K3077PQ - 2022-11-20', 'Service Advisor', 'Kepala Regu 1', 'Saya Teknisi 1', 'Saya Teknisi 2'),
('K3077PQ - 2022-11-21', 'Service Advisor', 'Kepala Regu 2', 'Saya Teknisi 3', 'Saya Teknisi 4'),
('K3077PQ - 2022-11-22', 'Service Advisor', 'Kepala Regu 1', 'Saya Teknisi 1', 'Saya Teknisi 2');

-- --------------------------------------------------------

--
-- Table structure for table `harga_servis`
--

CREATE TABLE `harga_servis` (
  `id` int(11) NOT NULL,
  `id_servis` int(5) NOT NULL,
  `merk_kendaraan` varchar(99) NOT NULL,
  `isi_silinder` bigint(10) NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harga_servis`
--

INSERT INTO `harga_servis` (`id`, `id_servis`, `merk_kendaraan`, `isi_silinder`, `harga`) VALUES
(1, 1, 'A 200 HATCHBACK', 2000, 2000000),
(2, 2, 'A 200 HATCHBACK', 2000, 2000000),
(3, 3, 'A 200 HATCHBACK', 2000, 2000000),
(4, 4, 'A 200 HATCHBACK', 2000, 2000000),
(5, 5, 'A 200 HATCHBACK', 2000, 2000000),
(6, 6, 'A 200 HATCHBACK', 2000, 2000000),
(7, 7, 'A 200 HATCHBACK', 2000, 2000000),
(8, 8, 'A 200 HATCHBACK', 2000, 2000000),
(9, 9, 'A 200 HATCHBACK', 2000, 2000000),
(10, 10, 'A 200 HATCHBACK', 2000, 2000000),
(11, 11, 'A 200 HATCHBACK', 2000, 2000000),
(12, 12, 'A 200 HATCHBACK', 2000, 2000000),
(13, 13, 'A 200 HATCHBACK', 2000, 2000000),
(14, 1, 'Creta', 1500, 2000000),
(15, 2, 'Creta', 1500, 2000000),
(16, 3, 'Creta', 1500, 2000000),
(17, 4, 'Creta', 1500, 2000000),
(18, 5, 'Creta', 1500, 2000000),
(19, 6, 'Creta', 1500, 2000000),
(20, 7, 'Creta', 1500, 2000000),
(21, 8, 'Creta', 1500, 2000000),
(22, 9, 'Creta', 1500, 2000000),
(23, 10, 'Creta', 1500, 2000000),
(24, 11, 'Creta', 1500, 2000000),
(25, 12, 'Creta', 1500, 2000000),
(26, 13, 'Creta', 1500, 2000000),
(28, 1, 'Agya', 1500, 2000000),
(29, 2, 'Agya', 1500, 2000000),
(30, 3, 'Agya', 1500, 2000000),
(31, 4, 'Agya', 1500, 2000000),
(32, 5, 'Agya', 1500, 2000000),
(33, 6, 'Agya', 1500, 2000000),
(34, 7, 'Agya', 1500, 2000000),
(35, 8, 'Agya', 1500, 2000000),
(36, 9, 'Agya', 1500, 2000000),
(37, 10, 'Agya', 1500, 2000000),
(38, 11, 'Agya', 1500, 2000000),
(39, 12, 'Agya', 1500, 2000000),
(40, 13, 'Agya', 1500, 2000000),
(41, 1, 'Alphard', 3500, 2000000),
(42, 2, 'Alphard', 3500, 2000000),
(43, 3, 'Alphard', 3500, 2000000),
(44, 4, 'Alphard', 3500, 2000000),
(45, 5, 'Alphard', 3500, 2000000),
(46, 6, 'Alphard', 3500, 2000000),
(47, 7, 'Alphard', 3500, 2000000),
(48, 8, 'Alphard', 3500, 2000000),
(49, 9, 'Alphard', 3500, 2000000),
(50, 10, 'Alphard', 3500, 2000000),
(51, 11, 'Alphard', 3500, 2000000),
(52, 12, 'Alphard', 3500, 2000000),
(53, 13, 'Alphard', 3500, 2000000),
(54, 1, 'Avanza', 1500, 2000000),
(55, 2, 'Avanza', 1500, 2000000),
(56, 3, 'Avanza', 1500, 2000000),
(57, 4, 'Avanza', 1500, 2000000),
(58, 5, 'Avanza', 1500, 2000000),
(59, 6, 'Avanza', 1500, 2000000),
(60, 7, 'Avanza', 1500, 2000000),
(61, 8, 'Avanza', 1500, 2000000),
(62, 9, 'Avanza', 1500, 2000000),
(63, 10, 'Avanza', 1500, 2000000),
(64, 11, 'Avanza', 1500, 2000000),
(65, 12, 'Avanza', 1500, 2000000),
(66, 13, 'Avanza', 1500, 2000000),
(67, 1, 'Brio', 1500, 2000000),
(68, 2, 'Brio', 1500, 2000000),
(69, 3, 'Brio', 1500, 2000000),
(70, 4, 'Brio', 1500, 2000000),
(71, 5, 'Brio', 1500, 2000000),
(72, 6, 'Brio', 1500, 2000000),
(73, 7, 'Brio', 1500, 2000000),
(74, 8, 'Brio', 1500, 2000000),
(75, 9, 'Brio', 1500, 2000000),
(76, 10, 'Brio', 1500, 2000000),
(77, 11, 'Brio', 1500, 2000000),
(78, 12, 'Brio', 1500, 2000000),
(79, 13, 'Brio', 1500, 2000000),
(80, 1, 'Camry', 2500, 2000000),
(81, 2, 'Camry', 2500, 2000000),
(82, 3, 'Camry', 2500, 2000000),
(83, 4, 'Camry', 2500, 2000000),
(84, 5, 'Camry', 2500, 2000000),
(85, 6, 'Camry', 2500, 2000000),
(86, 7, 'Camry', 2500, 2000000),
(87, 8, 'Camry', 2500, 2000000),
(88, 9, 'Camry', 2500, 2000000),
(89, 10, 'Camry', 2500, 2000000),
(90, 11, 'Camry', 2500, 2000000),
(91, 12, 'Camry', 2500, 2000000),
(92, 13, 'Camry', 2500, 2000000),
(93, 1, 'City', 1500, 2000000),
(94, 2, 'City', 1500, 2000000),
(95, 3, 'City', 1500, 2000000),
(96, 4, 'City', 1500, 2000000),
(97, 5, 'City', 1500, 2000000),
(98, 6, 'City', 1500, 2000000),
(99, 7, 'City', 1500, 2000000),
(100, 8, 'City', 1500, 2000000),
(101, 9, 'City', 1500, 2000000),
(102, 10, 'City', 1500, 2000000),
(103, 11, 'City', 1500, 2000000),
(104, 12, 'City', 1500, 2000000),
(105, 13, 'City', 1500, 2000000),
(106, 1, 'Corolla Altis', 1798, 2000000),
(107, 2, 'Corolla Altis', 1798, 2000000),
(108, 3, 'Corolla Altis', 1798, 2000000),
(109, 4, 'Corolla Altis', 1798, 2000000),
(110, 5, 'Corolla Altis', 1798, 2000000),
(111, 6, 'Corolla Altis', 1798, 2000000),
(112, 7, 'Corolla Altis', 1798, 2000000),
(113, 8, 'Corolla Altis', 1798, 2000000),
(114, 9, 'Corolla Altis', 1798, 2000000),
(115, 10, 'Corolla Altis', 1798, 2000000),
(116, 11, 'Corolla Altis', 1798, 2000000),
(117, 12, 'Corolla Altis', 1798, 2000000),
(118, 13, 'Corolla Altis', 1798, 2000000),
(119, 1, 'Eclipse Cross', 1499, 2000000),
(120, 2, 'Eclipse Cross', 1499, 2000000),
(121, 3, 'Eclipse Cross', 1499, 2000000),
(122, 4, 'Eclipse Cross', 1499, 2000000),
(123, 5, 'Eclipse Cross', 1499, 2000000),
(124, 6, 'Eclipse Cross', 1499, 2000000),
(125, 7, 'Eclipse Cross', 1499, 2000000),
(126, 8, 'Eclipse Cross', 1499, 2000000),
(127, 9, 'Eclipse Cross', 1499, 2000000),
(128, 10, 'Eclipse Cross', 1499, 2000000),
(129, 11, 'Eclipse Cross', 1499, 2000000),
(130, 12, 'Eclipse Cross', 1499, 2000000),
(131, 13, 'Eclipse Cross', 1499, 2000000),
(132, 1, 'Fortuner', 2400, 2000000),
(133, 2, 'Fortuner', 2400, 2000000),
(134, 3, 'Fortuner', 2400, 2000000),
(135, 4, 'Fortuner', 2400, 2000000),
(136, 5, 'Fortuner', 2400, 2000000),
(137, 6, 'Fortuner', 2400, 2000000),
(138, 7, 'Fortuner', 2400, 2000000),
(139, 8, 'Fortuner', 2400, 2000000),
(140, 9, 'Fortuner', 2400, 2000000),
(141, 10, 'Fortuner', 2400, 2000000),
(142, 11, 'Fortuner', 2400, 2000000),
(143, 12, 'Fortuner', 2400, 2000000),
(144, 13, 'Fortuner', 2400, 2000000),
(145, 1, 'HRV', 2000, 2000000),
(146, 2, 'HRV', 2000, 2000000),
(147, 3, 'HRV', 2000, 2000000),
(148, 4, 'HRV', 2000, 2000000),
(149, 5, 'HRV', 2000, 2000000),
(150, 6, 'HRV', 2000, 2000000),
(151, 7, 'HRV', 2000, 2000000),
(152, 8, 'HRV', 2000, 2000000),
(153, 9, 'HRV', 2000, 2000000),
(154, 10, 'HRV', 2000, 2000000),
(155, 11, 'HRV', 2000, 2000000),
(156, 12, 'HRV', 2000, 2000000),
(157, 13, 'HRV', 2000, 2000000),
(158, 1, 'Ioniq Electric', 2500, 2000000),
(159, 2, 'Ioniq Electric', 2500, 2000000),
(160, 3, 'Ioniq Electric', 2500, 2000000),
(161, 4, 'Ioniq Electric', 2500, 2000000),
(162, 5, 'Ioniq Electric', 2500, 2000000),
(163, 6, 'Ioniq Electric', 2500, 2000000),
(164, 7, 'Ioniq Electric', 2500, 2000000),
(165, 9, 'Ioniq Electric', 2500, 2000000),
(166, 10, 'Ioniq Electric', 2500, 2000000),
(167, 11, 'Ioniq Electric', 2500, 2000000),
(168, 12, 'Ioniq Electric', 2500, 2000000),
(169, 13, 'Ioniq Electric', 2500, 2000000),
(170, 8, 'Ioniq Electric', 2500, 2000000),
(171, 1, 'L300', 2268, 2000000),
(172, 2, 'L300', 2268, 2000000),
(173, 3, 'L300', 2268, 2000000),
(174, 4, 'L300', 2268, 2000000),
(175, 5, 'L300', 2268, 2000000),
(176, 6, 'L300', 2268, 2000000),
(177, 7, 'L300', 2268, 2000000),
(178, 8, 'L300', 2268, 2000000),
(179, 9, 'L300', 2268, 2000000),
(180, 10, 'L300', 2268, 2000000),
(181, 11, 'L300', 2268, 2000000),
(182, 12, 'L300', 2268, 2000000),
(183, 13, 'L300', 2268, 2000000),
(184, 1, 'Pajero Sport', 2442, 2000000),
(185, 2, 'Pajero Sport', 2442, 2000000),
(186, 3, 'Pajero Sport', 2442, 2000000),
(187, 4, 'Pajero Sport', 2442, 2000000),
(188, 5, 'Pajero Sport', 2442, 2000000),
(189, 6, 'Pajero Sport', 2442, 2000000),
(190, 7, 'Pajero Sport', 2442, 2000000),
(191, 8, 'Pajero Sport', 2442, 2000000),
(192, 9, 'Pajero Sport', 2442, 2000000),
(193, 10, 'Pajero Sport', 2442, 2000000),
(194, 11, 'Pajero Sport', 2442, 2000000),
(195, 12, 'Pajero Sport', 2442, 2000000),
(196, 13, 'Pajero Sport', 2442, 2000000),
(197, 1, 'Palisade', 2700, 2000000),
(198, 2, 'Palisade', 2700, 2000000),
(199, 3, 'Palisade', 2700, 2000000),
(200, 4, 'Palisade', 2700, 2000000),
(201, 5, 'Palisade', 2700, 2000000),
(202, 6, 'Palisade', 2700, 2000000),
(203, 7, 'Palisade', 2700, 2000000),
(204, 8, 'Palisade', 2700, 2000000),
(205, 9, 'Palisade', 2700, 2000000),
(206, 10, 'Palisade', 2700, 2000000),
(207, 11, 'Palisade', 2700, 2000000),
(208, 12, 'Palisade', 2700, 2000000),
(209, 13, 'Palisade', 2700, 2000000),
(210, 1, 'Santa FE', 2000, 2000000),
(211, 2, 'Santa FE', 2000, 2000000),
(212, 3, 'Santa FE', 2000, 2000000),
(213, 4, 'Santa FE', 2000, 2000000),
(214, 5, 'Santa FE', 2000, 2000000),
(215, 6, 'Santa FE', 2000, 2000000),
(216, 7, 'Santa FE', 2000, 2000000),
(217, 8, 'Santa FE', 2000, 2000000),
(218, 9, 'Santa FE', 2000, 2000000),
(219, 10, 'Santa FE', 2000, 2000000),
(220, 11, 'Santa FE', 2000, 2000000),
(221, 12, 'Santa FE', 2000, 2000000),
(222, 13, 'Santa FE', 2000, 2000000),
(223, 1, 'Staria', 2700, 2000000),
(224, 2, 'Staria', 2700, 2000000),
(225, 3, 'Staria', 2700, 2000000),
(226, 4, 'Staria', 2700, 2000000),
(227, 5, 'Staria', 2700, 2000000),
(228, 6, 'Staria', 2700, 2000000),
(229, 7, 'Staria', 2700, 2000000),
(230, 8, 'Staria', 2700, 2000000),
(231, 9, 'Staria', 2700, 2000000),
(232, 10, 'Staria', 2700, 2000000),
(233, 11, 'Staria', 2700, 2000000),
(234, 12, 'Staria', 2700, 2000000),
(235, 13, 'Staria', 2700, 2000000),
(236, 1, 'Xpander Cross', 1499, 2000000),
(237, 2, 'Xpander Cross', 1499, 2000000),
(238, 3, 'Xpander Cross', 1499, 2000000),
(239, 4, 'Xpander Cross', 1499, 2000000),
(240, 5, 'Xpander Cross', 1499, 2000000),
(241, 6, 'Xpander Cross', 1499, 2000000),
(242, 7, 'Xpander Cross', 1499, 2000000),
(243, 8, 'Xpander Cross', 1499, 2000000),
(244, 9, 'Xpander Cross', 1499, 2000000),
(245, 10, 'Xpander Cross', 1499, 2000000),
(246, 11, 'Xpander Cross', 1499, 2000000),
(247, 12, 'Xpander Cross', 1499, 2000000),
(248, 13, 'Xpander Cross', 1499, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `history_cuci`
--

CREATE TABLE `history_cuci` (
  `id` varchar(99) NOT NULL,
  `cuci_kendaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_cuci`
--

INSERT INTO `history_cuci` (`id`, `cuci_kendaraan`) VALUES
('AA2251BW - 2022-11-29', 'Dikerjakan'),
('AA2251BW - 2022-11-30', 'Dikerjakan'),
('B1124CD - 2022-11-26', 'Dikerjakan'),
('B1124CD - 2022-11-29', 'Dikerjakan'),
('B3628CD - 2022-11-24', 'Dikerjakan'),
('B5410CD - 2022-11-23', 'Tidak Dikerjakan'),
('B5410CD - 2022-11-27', 'Dikerjakan'),
('B9132CD - 2022-11-23', 'Dikerjakan'),
('D1533FG - 2022-11-27', 'Tidak Dikerjakan'),
('F6531GHH - 2022-11-25', 'Dikerjakan'),
('F7180KJ - 2022-11-27', 'Dikerjakan'),
('G5722OI - 2022-11-28', 'Dikerjakan'),
('H6367BG - 2022-11-26', 'Dikerjakan'),
('K3077PQ - 2022-11-20', 'Tidak Dikerjakan'),
('K3077PQ - 2022-11-21', 'Dikerjakan'),
('K3077PQ - 2022-11-22', 'Dikerjakan');

-- --------------------------------------------------------

--
-- Table structure for table `history_part`
--

CREATE TABLE `history_part` (
  `id` int(99) NOT NULL,
  `nama_part` varchar(99) NOT NULL,
  `harga` bigint(15) NOT NULL,
  `id_history_part` varchar(99) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_part`
--

INSERT INTO `history_part` (`id`, `nama_part`, `harga`, `id_history_part`, `status`) VALUES
(8, 'SET REAR WHEEL - 01433-SJ8-000', 188100, 'K3077PQ - 2022-11-20', 'Dikerjakan'),
(10, 'SET,KIT REPAIR - 01462-SDE-A02', 881100, 'K3077PQ - 2022-11-21', 'Dikerjakan'),
(11, 'SET,KIT REPAIR - 01462-SDE-A02', 881100, 'N2358WP - 2022-11-21', NULL),
(12, 'GAUGE COMP,OIL LEVEL - 15650-59B-000', 184800, 'N2358WP - 2022-11-21', NULL),
(19, 'TUBE CLAMP,CRNK H - 32743-RB0-000', 36300, 'K3077PQ - 2022-11-22', 'Dikerjakan'),
(20, 'GREASE PAD - 43231-SB0-316', 48400, 'K3077PQ - 2022-11-22', 'Dikerjakan'),
(21, 'PIPE COMP,OIL LEVEL - 15200-PWA-000', 192500, 'N2358WP - 2022-11-22', NULL),
(22, 'Tidak Ada', 0, 'B5410CD - 2022-11-23', 'Dikerjakan'),
(23, 'Tidak Ada', 0, 'B9132CD - 2022-11-23', 'Dikerjakan'),
(24, 'TUBE CLAMP,CRNK H - 32743-RB0-000', 36300, 'B3628CD - 2022-11-24', 'Dikerjakan'),
(25, 'Tidak Ada', 0, 'H6367BG - 2022-11-24', NULL),
(26, 'Tidak Ada', 0, 'F6531GHH - 2022-11-25', 'Dikerjakan'),
(28, 'GAUGE COMP,OIL LEVEL - 15650-59B-000', 184800, 'AA2251BW - 2022-11-25', NULL),
(29, 'Tidak Ada', 0, 'D1533FG - 2022-11-25', NULL),
(31, 'Tidak Ada', 0, 'AA2251BW - 2022-11-26', NULL),
(32, 'WIRE HARN,INST - 32117-TF0-Q10', 5430700, 'D1533FG - 2022-11-26', NULL),
(34, 'HEAD COMP,CYLN - 12200-PWC-040', 17655000, 'B1124CD - 2022-11-26', 'Dikerjakan'),
(35, 'Tidak Ada', 0, 'H6367BG - 2022-11-26', 'Dikerjakan'),
(36, 'Tidak Ada', 0, 'D1533FG - 2022-11-27', 'Dikerjakan'),
(37, 'GREASE PAD - 43231-SB0-315L', 35200, 'F7180KJ - 2022-11-27', 'Dikerjakan'),
(38, 'PIPE COMP,OIL LEVEL - 15200-PWA-000', 192500, 'B5410CD - 2022-11-27', 'Dikerjakan'),
(39, 'Tidak Ada', 0, 'G5722OI - 2022-11-28', 'Dikerjakan'),
(40, 'GREASE PAD - 43231-SB0-315L', 35200, 'G5722OI - 2022-11-28', 'Dikerjakan'),
(41, 'WIRE HARN,INST - 32117-TF0-Q10', 5430700, 'B1124CD - 2022-11-29', 'Dikerjakan'),
(42, 'LNG ASSY,R TRUNK SIDE - 84601-SNL-Q02ZA', 601700, 'B1124CD - 2022-11-29', 'Dikerjakan'),
(43, 'Tidak Ada', 0, 'AA2251BW - 2022-11-29', 'Dikerjakan'),
(44, 'Tidak Ada', 0, 'B4438CD - 2022-11-29', NULL),
(45, 'Tidak Ada', 0, 'B2425CD - 2022-11-29', NULL),
(46, 'WIRE HARN CABIN - 32120-SDA-Q00', 8516200, 'B1124CD - 2022-11-29', 'Dikerjakan'),
(47, 'GREASE PAD - 43231-SB0-315L', 35200, 'B1124CD - 2022-11-29', 'Dikerjakan'),
(48, 'AS SET_BATTERY IN - 1D245-RTW-T00', 738100, 'AA2251BW - 2022-11-30', 'Dikerjakan'),
(49, 'Tidak Ada', 0, 'B3628CD - 2022-11-30', NULL),
(50, 'HEAD COMP,CYLN - 12200-PWC-040', 17655000, 'B1124CD - 2022-11-30', NULL),
(51, 'Tidak Ada', 0, 'B2425CD - 2022-11-30', NULL),
(52, 'GREASE PAD - 43231-SB0-315L', 35200, 'B3628CD - 2022-11-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history_pemeriksaan`
--

CREATE TABLE `history_pemeriksaan` (
  `id` varchar(99) NOT NULL,
  `nama_pemilik_pemeriksaan` varchar(99) NOT NULL,
  `nomor_polisi_pemeriksaan` varchar(10) NOT NULL,
  `merk_kendaraan_pemeriksaan` varchar(99) NOT NULL,
  `tahun_kendaraan_pemeriksaan` int(6) NOT NULL,
  `nomor_telepon_pemeriksaan` bigint(20) NOT NULL,
  `nomor_handphone_pemeriksaan` bigint(20) NOT NULL,
  `service_advisor` varchar(99) NOT NULL,
  `jam_servis` time NOT NULL,
  `tgl_servis` date NOT NULL,
  `stnk` int(5) NOT NULL,
  `radio` int(5) NOT NULL,
  `buku` int(5) NOT NULL,
  `dongkrak` int(5) NOT NULL,
  `doproda` int(5) NOT NULL,
  `ban` int(5) NOT NULL,
  `segitiga` int(5) NOT NULL,
  `barang_berharga` varchar(99) NOT NULL,
  `km` bigint(20) NOT NULL,
  `bahan_bakar` int(4) NOT NULL,
  `kondisi_battery` varchar(99) NOT NULL,
  `depan_kanan` varchar(10) NOT NULL,
  `depan_kiri` varchar(10) NOT NULL,
  `belakang_kanan` varchar(10) NOT NULL,
  `belakang_kiri` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_pemeriksaan`
--

INSERT INTO `history_pemeriksaan` (`id`, `nama_pemilik_pemeriksaan`, `nomor_polisi_pemeriksaan`, `merk_kendaraan_pemeriksaan`, `tahun_kendaraan_pemeriksaan`, `nomor_telepon_pemeriksaan`, `nomor_handphone_pemeriksaan`, `service_advisor`, `jam_servis`, `tgl_servis`, `stnk`, `radio`, `buku`, `dongkrak`, `doproda`, `ban`, `segitiga`, `barang_berharga`, `km`, `bahan_bakar`, `kondisi_battery`, `depan_kanan`, `depan_kiri`, `belakang_kanan`, `belakang_kiri`) VALUES
('AA2251BW - 2022-11-25', 'Ilham Umar', 'AA2251BW', 'Avanza', 2019, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-25', 1, 1, 1, 1, 1, 1, 1, 'Iphone', 19999, 90, 'CHARGE & RETEST', 'Not Good', 'Not Good', 'Not Good', 'Not Good'),
('AA2251BW - 2022-11-29', 'Ilham Umar', 'AA2251BW', 'Avanza', 2019, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-29', 1, 0, 1, 0, 1, 1, 8, 'Buku novel, koper', 100000, 35, 'GOOD BATTERY', 'Not Good', 'Caution', 'Good', 'Not Good'),
('AA2251BW - 2022-11-30', 'Ilham Umar', 'AA2251BW', 'Avanza', 2019, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-30', 1, 0, 1, 1, 0, 1, 1, 'Macbook', 100000, 89, 'CHARGE & RETEST', 'Caution', 'Good', 'Not Good', 'Caution'),
('B1124CD - 2022-11-26', 'Bambang', 'B1124CD', 'Creta', 2010, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-26', 1, 0, 1, 1, 0, 1, 1, 'Macbook', 100000, 58, 'CHARGE & RETEST', 'Caution', 'Good', 'Not Good', 'Caution'),
('B1124CD - 2022-11-29', 'Bambang', 'B1124CD', 'Creta', 2010, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-29', 1, 0, 1, 0, 1, 1, 6, 'Cincin, Emas', 100000, 38, 'CHARGE & RETEST', 'Caution', 'Not Good', 'Good', 'Caution'),
('B1124CD - 2022-11-30', 'Bambang', 'B1124CD', 'Creta', 2010, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-30', 1, 1, 1, 0, 1, 1, 1, 'Tidak ada', 100000, 12, 'REPLACE BATTERY', 'Good', 'Good', 'Good', 'Good'),
('B2425CD - 2022-11-29', 'Sri Lutfi', 'B2425CD', 'Ioniq Electric', 2019, 2123355, 82123355402, 'Service Advisor', '09:00:00', '2022-11-29', 1, 0, 1, 0, 1, 1, 0, '2343qw', 212, 12, 'REPLACE BATTERY', 'Not Good', 'Caution', 'Caution', 'Not Good'),
('B2425CD - 2022-11-30', 'Sri Lutfi', 'B2425CD', 'Ioniq Electric', 2019, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-30', 1, 1, 0, 0, 0, 0, 0, 'Tidak ada', 154444, 45, 'REPLACE BATTERY', 'Caution', 'Caution', 'Not Good', 'Not Good'),
('B3628CD - 2022-11-24', 'Andika', 'B3628CD', 'Staria', 2012, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-24', 0, 1, 0, 1, 0, 1, 0, 'Mainan Anak', 10000, 46, 'GOOD BATTERY', 'Good', 'Not Good', 'Caution', 'Good'),
('B3628CD - 2022-11-30', 'Andika', 'B3628CD', 'Staria', 2012, 2123355, 82123355402, 'Service Advisor', '09:00:00', '2022-11-30', 1, 1, 1, 0, 1, 1, 1, 'Tidak ada', 574353, 24, 'REPLACE BATTERY', 'Caution', 'Caution', 'Caution', 'Caution'),
('B4438CD - 2022-11-29', 'Nur Hayati', 'B4438CD', 'Palisade', 2019, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-29', 1, 1, 0, 1, 0, 1, 1, 'Iphone', 10000, 23, 'GOOD BATTERY', 'Caution', 'Caution', 'Caution', 'Caution'),
('B5410CD - 2022-11-23', 'Muhamad Zulkarnaen', 'B5410CD', 'Santa FE', 2020, 2123355, 82123355402, 'Service Advisor Cadangan', '08:00:00', '2022-11-23', 1, 1, 1, 1, 1, 1, 1, 'Tidak ada', 1289, 67, 'CHARGE & RETEST', 'Not Good', 'Good', 'Not Good', 'Not Good'),
('B5410CD - 2022-11-27', 'Muhamad Zulkarnaen', 'B5410CD', 'Santa FE', 2020, 2123355, 82123355402, 'Service Advisor Cadangan', '08:00:00', '2022-11-27', 1, 1, 1, 1, 1, 1, 1, 'Keyboard, gitar', 789333, 73, 'CHARGE & RETEST', 'Not Good', 'Not Good', 'Not Good', 'Not Good'),
('B9132CD - 2022-11-23', 'Maman Abdurahman', 'B9132CD', 'Brio', 2010, 2123355, 82123355402, 'Service Advisor', '09:00:00', '2022-11-23', 0, 0, 0, 0, 0, 0, 0, 'Playstation', 12000, 43, 'CHARGE & RETEST', 'Good', 'Good', 'Good', 'Good'),
('D1533FG - 2022-11-25', 'Agung Buana', 'D1533FG', 'Agya', 2021, 2123355, 82123355402, 'Service Advisor', '09:00:00', '2022-11-25', 0, 0, 0, 1, 1, 1, 1, 'Koper', 900000, 97, 'GOOD BATTERY', 'Good', 'Good', 'Good', 'Good'),
('D1533FG - 2022-11-27', 'Agung Buana', 'D1533FG', 'Agya', 2021, 2123355, 82123355402, 'Service Advisor Cadangan', '08:00:00', '2022-11-27', 1, 1, 1, 1, 1, 1, 1, 'Tidak ada', 100000, 7, 'GOOD BATTERY', 'Caution', 'Good', 'Good', 'Good'),
('F6531GHH - 2022-11-25', 'Hidayat Krisna', 'F6531GHH', 'L300', 2015, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-25', 1, 0, 1, 1, 0, 1, 1, 'Tidak Ada', 600000, 20, 'CHARGE & RETEST', 'Not Good', 'Not Good', 'Not Good', 'Not Good'),
('F7180KJ - 2022-11-27', 'Arif Wahyu', 'F7180KJ', 'Pajero Sport', 2014, 2123355, 82123355402, 'Service Advisor Cadangan', '08:00:00', '2022-11-27', 0, 0, 0, 0, 0, 0, 0, 'Tidak ada', 178888, 36, 'CHARGE & RETEST', 'Caution', 'Caution', 'Caution', 'Caution'),
('G5722OI - 2022-11-28', 'Bima Taufik', 'G5722OI', 'Fortuner', 2010, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-28', 1, 0, 1, 0, 1, 0, 1, 'Tidak ada', 460000, 37, 'GOOD BATTERY', 'Caution', 'Good', 'Caution', 'Caution'),
('H6367BG - 2022-11-26', 'Budi Agung', 'H6367BG', 'Eclipse Cross', 2019, 2123355, 82123355402, 'Service Advisor Cadangan', '08:00:00', '2022-11-26', 1, 1, 1, 1, 1, 1, 1, 'Tidak ada', 100, 100, 'GOOD BATTERY', 'Good', 'Good', 'Good', 'Good'),
('K3077PQ - 2022-11-20', 'Tirto Bima', 'K3077PQ', 'A 200 HATCHBACK', 2022, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-20', 1, 1, 1, 1, 1, 1, 1, 'Buku komik', 100000, 12, 'CHARGE & RETEST', 'Not Good', 'Caution', 'Good', 'Caution'),
('K3077PQ - 2022-11-21', 'Tirto Bima', 'K3077PQ', 'A 200 HATCHBACK', 2022, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-21', 1, 1, 1, 1, 1, 1, 1, 'PS', 12345, 45, 'CHARGE & RETEST', 'Caution', 'Good', 'Caution', 'Not Good'),
('K3077PQ - 2022-11-22', 'Tirto Bima', 'K3077PQ', 'A 200 HATCHBACK', 2022, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-22', 0, 1, 1, 1, 1, 1, 1, 'Mac', 1000, 34, 'GOOD BATTERY', 'Not Good', 'Caution', 'Good', 'Not Good'),
('N2358WP - 2022-11-21', 'Amir Yusuf', 'N2358WP', 'A 200 HATCHBACK', 2019, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-21', 1, 1, 1, 1, 1, 1, 1, '123', 123, 12, 'GOOD BATTERY', 'Caution', 'Caution', 'Caution', 'Caution'),
('N2358WP - 2022-11-22', 'Amir Yusuf', 'N2358WP', 'A 200 HATCHBACK', 2019, 2123355, 82123355402, 'Service Advisor', '08:00:00', '2022-11-22', 1, 0, 1, 0, 1, 0, 1, 'Buku Novel', 45000, 46, 'GOOD BATTERY', 'Caution', 'Not Good', 'Good', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `history_qmc_1`
--

CREATE TABLE `history_qmc_1` (
  `id` varchar(99) NOT NULL,
  `dk_a_1` varchar(20) NOT NULL,
  `dk_a_2` varchar(20) NOT NULL,
  `dk_a_3` varchar(20) NOT NULL,
  `dk_a_4` varchar(20) NOT NULL,
  `dk_a_5` varchar(20) NOT NULL,
  `dk_a_6` varchar(20) NOT NULL,
  `dk_a_7` varchar(20) NOT NULL,
  `dk_a_8` varchar(20) NOT NULL,
  `dk_a_9` varchar(20) NOT NULL,
  `dk_a_10` varchar(20) NOT NULL,
  `dk_a_11` varchar(20) NOT NULL,
  `dk_a_12` varchar(20) NOT NULL,
  `dk_a_13` varchar(20) NOT NULL,
  `dk_a_14` varchar(20) NOT NULL,
  `dk_a_15` varchar(20) NOT NULL,
  `dk_a_16` varchar(20) NOT NULL,
  `dk_a_17` varchar(20) NOT NULL,
  `dk_a_18` varchar(20) NOT NULL,
  `dk_a_19` varchar(20) NOT NULL,
  `dk_a_20` varchar(20) NOT NULL,
  `dk_a_21` varchar(20) NOT NULL,
  `dk_a_22` varchar(20) NOT NULL,
  `jumlah_klik` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_qmc_1`
--

INSERT INTO `history_qmc_1` (`id`, `dk_a_1`, `dk_a_2`, `dk_a_3`, `dk_a_4`, `dk_a_5`, `dk_a_6`, `dk_a_7`, `dk_a_8`, `dk_a_9`, `dk_a_10`, `dk_a_11`, `dk_a_12`, `dk_a_13`, `dk_a_14`, `dk_a_15`, `dk_a_16`, `dk_a_17`, `dk_a_18`, `dk_a_19`, `dk_a_20`, `dk_a_21`, `dk_a_22`, `jumlah_klik`) VALUES
('AA2251BW - 2022-11-29', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0),
('AA2251BW - 2022-11-30', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5),
('B1124CD - 2022-11-26', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0),
('B1124CD - 2022-11-29', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5),
('B3628CD - 2022-11-24', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5),
('B5410CD - 2022-11-23', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0),
('B5410CD - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 10),
('B9132CD - 2022-11-23', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0),
('D1533FG - 2022-11-27', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 0),
('F6531GHH - 2022-11-25', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0),
('F7180KJ - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 21),
('G5722OI - 2022-11-28', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5),
('H6367BG - 2022-11-26', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 10),
('K3077PQ - 2022-11-20', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0),
('K3077PQ - 2022-11-21', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0),
('K3077PQ - 2022-11-22', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0);

-- --------------------------------------------------------

--
-- Table structure for table `history_qmc_2`
--

CREATE TABLE `history_qmc_2` (
  `id` varchar(99) NOT NULL,
  `rm_b_1` varchar(20) NOT NULL,
  `rm_b_2` varchar(20) NOT NULL,
  `rm_b_3` varchar(20) NOT NULL,
  `rm_b_4` varchar(20) NOT NULL,
  `rm_b_5` varchar(20) NOT NULL,
  `rm_b_6` varchar(20) NOT NULL,
  `rm_b_7` varchar(20) NOT NULL,
  `rm_b_8` varchar(20) NOT NULL,
  `rm_b_9` varchar(20) NOT NULL,
  `rm_b_10` varchar(20) NOT NULL,
  `rm_b_11` varchar(20) NOT NULL,
  `rm_b_12` varchar(20) NOT NULL,
  `rm_b_13` varchar(20) NOT NULL,
  `rm_b_14` varchar(20) NOT NULL,
  `rm_b_15` varchar(20) NOT NULL,
  `rm_b_16` varchar(20) NOT NULL,
  `rm_b_17` varchar(20) NOT NULL,
  `rm_b_18` varchar(20) NOT NULL,
  `rm_b_19` varchar(20) NOT NULL,
  `rm_b_20` varchar(20) NOT NULL,
  `rm_b_21` varchar(20) NOT NULL,
  `rm_b_22` varchar(20) NOT NULL,
  `rm_b_23` varchar(20) NOT NULL,
  `rm_b_24` varchar(20) NOT NULL,
  `rm_b_25` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_qmc_2`
--

INSERT INTO `history_qmc_2` (`id`, `rm_b_1`, `rm_b_2`, `rm_b_3`, `rm_b_4`, `rm_b_5`, `rm_b_6`, `rm_b_7`, `rm_b_8`, `rm_b_9`, `rm_b_10`, `rm_b_11`, `rm_b_12`, `rm_b_13`, `rm_b_14`, `rm_b_15`, `rm_b_16`, `rm_b_17`, `rm_b_18`, `rm_b_19`, `rm_b_20`, `rm_b_21`, `rm_b_22`, `rm_b_23`, `rm_b_24`, `rm_b_25`) VALUES
('AA2251BW - 2022-11-29', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('AA2251BW - 2022-11-30', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok'),
('B1124CD - 2022-11-26', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('B1124CD - 2022-11-29', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok'),
('B3628CD - 2022-11-24', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('B5410CD - 2022-11-23', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('B5410CD - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('B9132CD - 2022-11-23', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('D1533FG - 2022-11-27', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('F6531GHH - 2022-11-25', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Ok', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok'),
('F7180KJ - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('G5722OI - 2022-11-28', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('H6367BG - 2022-11-26', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('K3077PQ - 2022-11-20', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok'),
('K3077PQ - 2022-11-21', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok'),
('K3077PQ - 2022-11-22', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok');

-- --------------------------------------------------------

--
-- Table structure for table `history_qmc_3`
--

CREATE TABLE `history_qmc_3` (
  `id` varchar(99) NOT NULL,
  `pmt_a_1` varchar(20) NOT NULL,
  `pmt_a_2` varchar(20) NOT NULL,
  `pmt_a_3` varchar(20) NOT NULL,
  `pmt_a_4` varchar(20) NOT NULL,
  `pmt_a_5` varchar(20) NOT NULL,
  `pmt_a_6` varchar(20) NOT NULL,
  `pmt_a_7` varchar(20) NOT NULL,
  `pmt_a_8` varchar(20) NOT NULL,
  `pmt_a_9` varchar(20) NOT NULL,
  `pmt_a_10` varchar(20) NOT NULL,
  `pmt_a_11` varchar(20) NOT NULL,
  `pmt_a_12` varchar(20) NOT NULL,
  `pmt_a_13` varchar(20) NOT NULL,
  `pmt_a_14` varchar(20) NOT NULL,
  `pmt_a_15` varchar(20) NOT NULL,
  `pmt_a_16` varchar(20) NOT NULL,
  `pmt_a_17` varchar(20) NOT NULL,
  `pmt_a_18` varchar(20) NOT NULL,
  `pmt_a_ketebalanpadkanan` bigint(20) DEFAULT NULL,
  `pmt_a_ketebalanpadkiri` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_qmc_3`
--

INSERT INTO `history_qmc_3` (`id`, `pmt_a_1`, `pmt_a_2`, `pmt_a_3`, `pmt_a_4`, `pmt_a_5`, `pmt_a_6`, `pmt_a_7`, `pmt_a_8`, `pmt_a_9`, `pmt_a_10`, `pmt_a_11`, `pmt_a_12`, `pmt_a_13`, `pmt_a_14`, `pmt_a_15`, `pmt_a_16`, `pmt_a_17`, `pmt_a_18`, `pmt_a_ketebalanpadkanan`, `pmt_a_ketebalanpadkiri`) VALUES
('AA2251BW - 2022-11-29', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0),
('AA2251BW - 2022-11-30', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 10, 10),
('B1124CD - 2022-11-26', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0),
('B1124CD - 2022-11-29', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 5, 5),
('B3628CD - 2022-11-24', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5, 5),
('B5410CD - 2022-11-23', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 0, 0),
('B5410CD - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 10, 10),
('B9132CD - 2022-11-23', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 4, 4),
('D1533FG - 2022-11-27', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 0, 0),
('F6531GHH - 2022-11-25', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0),
('F7180KJ - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5, 5),
('G5722OI - 2022-11-28', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5, 5),
('H6367BG - 2022-11-26', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 5, 5),
('K3077PQ - 2022-11-20', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 0, 0),
('K3077PQ - 2022-11-21', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 0, 0),
('K3077PQ - 2022-11-22', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history_qmc_4`
--

CREATE TABLE `history_qmc_4` (
  `id` varchar(99) NOT NULL,
  `pmt_b_1` varchar(20) NOT NULL,
  `pmt_b_2` varchar(20) NOT NULL,
  `pmt_b_3` varchar(20) NOT NULL,
  `pmt_b_4` varchar(20) NOT NULL,
  `pmt_b_5` varchar(20) NOT NULL,
  `pmt_b_6` varchar(20) NOT NULL,
  `pmt_b_7` varchar(20) NOT NULL,
  `pmt_b_8` varchar(20) NOT NULL,
  `pmt_b_9` varchar(20) NOT NULL,
  `pmt_b_10` varchar(20) NOT NULL,
  `pmt_b_11` varchar(20) NOT NULL,
  `pmt_b_12` varchar(20) NOT NULL,
  `pmt_b_13` varchar(20) NOT NULL,
  `pmt_b_14` varchar(20) NOT NULL,
  `pmt_b_15` varchar(20) NOT NULL,
  `pmt_b_16` varchar(20) NOT NULL,
  `pmt_b_17` varchar(20) NOT NULL,
  `pmt_b_ketebalanpadkanan` bigint(20) DEFAULT NULL,
  `pmt_b_ketebalanpadkiri` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_qmc_4`
--

INSERT INTO `history_qmc_4` (`id`, `pmt_b_1`, `pmt_b_2`, `pmt_b_3`, `pmt_b_4`, `pmt_b_5`, `pmt_b_6`, `pmt_b_7`, `pmt_b_8`, `pmt_b_9`, `pmt_b_10`, `pmt_b_11`, `pmt_b_12`, `pmt_b_13`, `pmt_b_14`, `pmt_b_15`, `pmt_b_16`, `pmt_b_17`, `pmt_b_ketebalanpadkanan`, `pmt_b_ketebalanpadkiri`) VALUES
('AA2251BW - 2022-11-29', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0),
('AA2251BW - 2022-11-30', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 10, 10),
('B1124CD - 2022-11-26', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0),
('B1124CD - 2022-11-29', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5, 5),
('B3628CD - 2022-11-24', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5, 5),
('B5410CD - 2022-11-23', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0),
('B5410CD - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 10, 10),
('B9132CD - 2022-11-23', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 4, 5),
('D1533FG - 2022-11-27', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 0, 0),
('F6531GHH - 2022-11-25', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0),
('F7180KJ - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5, 5),
('G5722OI - 2022-11-28', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 5, 5),
('H6367BG - 2022-11-26', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 0, 0),
('K3077PQ - 2022-11-20', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0),
('K3077PQ - 2022-11-21', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0),
('K3077PQ - 2022-11-22', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history_qmc_5`
--

CREATE TABLE `history_qmc_5` (
  `id` varchar(99) NOT NULL,
  `pma_a_1` varchar(20) NOT NULL,
  `pma_a_2` varchar(20) NOT NULL,
  `pma_a_3` varchar(20) NOT NULL,
  `pma_a_4` varchar(20) NOT NULL,
  `pma_a_5` varchar(20) NOT NULL,
  `pma_a_6` varchar(20) NOT NULL,
  `pma_a_7` varchar(20) NOT NULL,
  `pma_a_8` varchar(20) NOT NULL,
  `pma_a_9` varchar(20) NOT NULL,
  `pma_a_10` varchar(20) NOT NULL,
  `pma_b_1` varchar(20) NOT NULL,
  `pma_b_2` varchar(20) NOT NULL,
  `pma_b_3` varchar(20) NOT NULL,
  `pma_b_4` varchar(20) NOT NULL,
  `pma_b_5` varchar(20) NOT NULL,
  `pma_b_6` varchar(20) NOT NULL,
  `pma_b_7` varchar(20) NOT NULL,
  `pma_b_8` varchar(20) NOT NULL,
  `pma_b_9` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_qmc_5`
--

INSERT INTO `history_qmc_5` (`id`, `pma_a_1`, `pma_a_2`, `pma_a_3`, `pma_a_4`, `pma_a_5`, `pma_a_6`, `pma_a_7`, `pma_a_8`, `pma_a_9`, `pma_a_10`, `pma_b_1`, `pma_b_2`, `pma_b_3`, `pma_b_4`, `pma_b_5`, `pma_b_6`, `pma_b_7`, `pma_b_8`, `pma_b_9`) VALUES
('AA2251BW - 2022-11-29', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('AA2251BW - 2022-11-30', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('B1124CD - 2022-11-26', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('B1124CD - 2022-11-29', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('B3628CD - 2022-11-24', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('B5410CD - 2022-11-23', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok'),
('B5410CD - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('B9132CD - 2022-11-23', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('D1533FG - 2022-11-27', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('F6531GHH - 2022-11-25', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('F7180KJ - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('G5722OI - 2022-11-28', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok'),
('H6367BG - 2022-11-26', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('K3077PQ - 2022-11-20', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('K3077PQ - 2022-11-21', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan'),
('K3077PQ - 2022-11-22', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok');

-- --------------------------------------------------------

--
-- Table structure for table `history_qmc_6`
--

CREATE TABLE `history_qmc_6` (
  `id` varchar(99) NOT NULL,
  `pmb_a_1` varchar(20) NOT NULL,
  `pmb_a_2` varchar(20) NOT NULL,
  `pmb_a_3` varchar(20) NOT NULL,
  `pmb_a_4` varchar(20) NOT NULL,
  `pmb_a_5` varchar(20) NOT NULL,
  `pmb_a_6` varchar(20) NOT NULL,
  `pmb_b_1` varchar(20) NOT NULL,
  `pmb_b_2` varchar(20) NOT NULL,
  `pmb_b_3` varchar(20) NOT NULL,
  `pmb_b_4` varchar(20) NOT NULL,
  `pmb_b_5` varchar(20) NOT NULL,
  `pmb_b_6` varchar(20) NOT NULL,
  `pmb_b_7` varchar(20) NOT NULL,
  `pma2_a_1` varchar(20) NOT NULL,
  `pma2_b_1` varchar(20) NOT NULL,
  `pma2_b_2` varchar(20) NOT NULL,
  `pmb2_b_1` varchar(20) NOT NULL,
  `pmb2_b_2` varchar(20) NOT NULL,
  `pma3_b_1` varchar(20) NOT NULL,
  `catatan_qmc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_qmc_6`
--

INSERT INTO `history_qmc_6` (`id`, `pmb_a_1`, `pmb_a_2`, `pmb_a_3`, `pmb_a_4`, `pmb_a_5`, `pmb_a_6`, `pmb_b_1`, `pmb_b_2`, `pmb_b_3`, `pmb_b_4`, `pmb_b_5`, `pmb_b_6`, `pmb_b_7`, `pma2_a_1`, `pma2_b_1`, `pma2_b_2`, `pmb2_b_1`, `pmb2_b_2`, `pma3_b_1`, `catatan_qmc`) VALUES
('AA2251BW - 2022-11-29', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', ''),
('AA2251BW - 2022-11-30', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Tidak ada'),
('B1124CD - 2022-11-26', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', ''),
('B1124CD - 2022-11-29', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', ''),
('B3628CD - 2022-11-24', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Belum ada'),
('B5410CD - 2022-11-23', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', ''),
('B5410CD - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', ''),
('B9132CD - 2022-11-23', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', ''),
('D1533FG - 2022-11-27', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak dikerjakan karena pelanggan ingin pulang'),
('F6531GHH - 2022-11-25', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', ''),
('F7180KJ - 2022-11-27', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', ''),
('G5722OI - 2022-11-28', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', ''),
('H6367BG - 2022-11-26', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', 'Tidak Dikerjakan', ''),
('K3077PQ - 2022-11-20', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', ''),
('K3077PQ - 2022-11-21', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Ok', 'Ok', 'Tidak Ok', 'Tidak Ok', 'Tidak Dikerjakan', 'Tidak ada'),
('K3077PQ - 2022-11-22', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', 'Ok', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_tasklist`
--

CREATE TABLE `history_tasklist` (
  `id` varchar(99) NOT NULL,
  `olimesin` varchar(20) DEFAULT NULL,
  `olifilter` varchar(20) DEFAULT NULL,
  `saringanudara` varchar(20) DEFAULT NULL,
  `keregangankatup` varchar(20) DEFAULT NULL,
  `saringanbensin` varchar(20) DEFAULT NULL,
  `busitipenikel` varchar(20) DEFAULT NULL,
  `busitipeiridium` varchar(20) DEFAULT NULL,
  `drivebelt` varchar(20) DEFAULT NULL,
  `kecepatanstasioner` varchar(20) DEFAULT NULL,
  `radiatorcoolant` varchar(20) DEFAULT NULL,
  `olitransmisi` varchar(20) DEFAULT NULL,
  `enginecleaner` varchar(20) DEFAULT NULL,
  `remdepanbelakang` varchar(20) DEFAULT NULL,
  `fluidarem` varchar(20) DEFAULT NULL,
  `remparkir` varchar(20) DEFAULT NULL,
  `saringanac` varchar(20) DEFAULT NULL,
  `rotasiban` varchar(20) DEFAULT NULL,
  `pintugeserlistrik` varchar(20) DEFAULT NULL,
  `tierods` varchar(20) DEFAULT NULL,
  `komponensuspensi` varchar(20) DEFAULT NULL,
  `bootsdriveshaft` varchar(20) DEFAULT NULL,
  `selangrempipa` varchar(20) DEFAULT NULL,
  `semuaketinggianlevel` varchar(20) DEFAULT NULL,
  `sistempembuangan` varchar(20) DEFAULT NULL,
  `selangbensin` varchar(20) DEFAULT NULL,
  `keluhan` varchar(20) NOT NULL,
  `catatan_tasklist` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_tasklist`
--

INSERT INTO `history_tasklist` (`id`, `olimesin`, `olifilter`, `saringanudara`, `keregangankatup`, `saringanbensin`, `busitipenikel`, `busitipeiridium`, `drivebelt`, `kecepatanstasioner`, `radiatorcoolant`, `olitransmisi`, `enginecleaner`, `remdepanbelakang`, `fluidarem`, `remparkir`, `saringanac`, `rotasiban`, `pintugeserlistrik`, `tierods`, `komponensuspensi`, `bootsdriveshaft`, `selangrempipa`, `semuaketinggianlevel`, `sistempembuangan`, `selangbensin`, `keluhan`, `catatan_tasklist`) VALUES
('AA2251BW - 2022-11-29', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, NULL, NULL, NULL, NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', ''),
('AA2251BW - 2022-11-30', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Tidak Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Tidak Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Tidak ada'),
('B1124CD - 2022-11-26', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', ''),
('B1124CD - 2022-11-29', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', ''),
('B3628CD - 2022-11-24', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, NULL, NULL, 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Tidak ada'),
('B5410CD - 2022-11-23', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, NULL, NULL, NULL, NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, NULL, NULL, 'Dikerjakan', 'tIDAK ADA'),
('B5410CD - 2022-11-27', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, NULL, NULL, NULL, NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, NULL, NULL, 'Dikerjakan', 'Mobil masih baik'),
('B9132CD - 2022-11-23', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, NULL, NULL, 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Tidak Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'tIDAK ADA'),
('D1533FG - 2022-11-27', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, NULL, NULL, 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, 'Tidak Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', ''),
('F6531GHH - 2022-11-25', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, NULL, NULL, 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', ''),
('F7180KJ - 2022-11-27', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Mobil baik'),
('G5722OI - 2022-11-28', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, NULL, NULL, NULL, NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, NULL, NULL, 'Dikerjakan', ''),
('H6367BG - 2022-11-26', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, NULL, NULL, 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', ''),
('K3077PQ - 2022-11-20', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, NULL, NULL, 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', ''),
('K3077PQ - 2022-11-21', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, 'Dikerjakan', NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', ''),
('K3077PQ - 2022-11-22', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', NULL, NULL, NULL, NULL, NULL, NULL, 'Dikerjakan', NULL, 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', 'Dikerjakan', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_workorder`
--

CREATE TABLE `history_workorder` (
  `id_history_workorder` varchar(99) NOT NULL,
  `nomor_pitstop_wo` int(5) NOT NULL,
  `merk_kendaraan_wo` varchar(99) NOT NULL,
  `tahun_kendaraan_wo` int(6) NOT NULL,
  `nomor_polisi_wo` varchar(10) NOT NULL,
  `pemilik_kendaraan_wo` varchar(99) NOT NULL,
  `nomor_handphone_wo` bigint(20) NOT NULL,
  `alamat_pemilik_wo` varchar(99) NOT NULL,
  `nomor_chasis_wo` varchar(99) NOT NULL,
  `nomor_mesin_wo` varchar(99) NOT NULL,
  `warna_kendaraan_wo` varchar(99) NOT NULL,
  `km_wo` bigint(50) NOT NULL,
  `paket_servis_wo` int(5) NOT NULL,
  `olimesin` varchar(1) NOT NULL,
  `merkolimesin` varchar(99) DEFAULT NULL,
  `olifilter` varchar(1) NOT NULL,
  `saringanudara` varchar(1) NOT NULL,
  `keregangankatup` varchar(1) NOT NULL,
  `saringanbensin` varchar(1) NOT NULL,
  `busitipenikel` varchar(1) NOT NULL,
  `busitipeiridium` varchar(1) NOT NULL,
  `drivebelt` varchar(1) NOT NULL,
  `kecepatanstasioner` varchar(1) NOT NULL,
  `radiatorcoolant` varchar(1) NOT NULL,
  `olitransmisi` varchar(1) NOT NULL,
  `merkolitransmisi` varchar(99) DEFAULT NULL,
  `enginecleaner` varchar(1) NOT NULL,
  `remdepanbelakang` varchar(1) NOT NULL,
  `fluidarem` varchar(1) NOT NULL,
  `remparkir` varchar(1) NOT NULL,
  `saringanac` varchar(1) NOT NULL,
  `rotasiban` varchar(1) NOT NULL,
  `pintugeserlistrik` varchar(1) NOT NULL,
  `tierods` varchar(1) NOT NULL,
  `komponensuspensi` varchar(1) NOT NULL,
  `bootsdriveshaft` varchar(1) NOT NULL,
  `selangrempipa` varchar(1) NOT NULL,
  `semuaketinggianlevel` varchar(1) NOT NULL,
  `sistempembuangan` varchar(1) NOT NULL,
  `selangbensin` varchar(1) NOT NULL,
  `keluhan` varchar(99) NOT NULL,
  `estimasiselesai` time NOT NULL,
  `harga_servis` varchar(99) NOT NULL,
  `harga_olimesin` varchar(99) DEFAULT NULL,
  `harga_olitransmisi` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_workorder`
--

INSERT INTO `history_workorder` (`id_history_workorder`, `nomor_pitstop_wo`, `merk_kendaraan_wo`, `tahun_kendaraan_wo`, `nomor_polisi_wo`, `pemilik_kendaraan_wo`, `nomor_handphone_wo`, `alamat_pemilik_wo`, `nomor_chasis_wo`, `nomor_mesin_wo`, `warna_kendaraan_wo`, `km_wo`, `paket_servis_wo`, `olimesin`, `merkolimesin`, `olifilter`, `saringanudara`, `keregangankatup`, `saringanbensin`, `busitipenikel`, `busitipeiridium`, `drivebelt`, `kecepatanstasioner`, `radiatorcoolant`, `olitransmisi`, `merkolitransmisi`, `enginecleaner`, `remdepanbelakang`, `fluidarem`, `remparkir`, `saringanac`, `rotasiban`, `pintugeserlistrik`, `tierods`, `komponensuspensi`, `bootsdriveshaft`, `selangrempipa`, `semuaketinggianlevel`, `sistempembuangan`, `selangbensin`, `keluhan`, `estimasiselesai`, `harga_servis`, `harga_olimesin`, `harga_olitransmisi`) VALUES
('AA2251BW - 2022-11-25', 2, 'Avanza', 2019, 'AA2251BW', 'Ilham Umar', 82123355402, 'Kecamatan Cisarua', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 19999, 5, 'g', 'E-Pro Gold', 'g', 'p', 'p', 't', 'g', 't', 'p', 't', 'p', 'g', 'Oli transmisi ATF-Z1', 'p', 'p', 'p', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Tidak ada', '09:00:00', 'Rp. 2000000', 'Rp. 125000', 'Rp. 300000'),
('AA2251BW - 2022-11-29', 2, 'Avanza', 2019, 'AA2251BW', 'Ilham Umar', 82123355402, 'Kecamatan Cisarua', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 100000, 3, 'g', 'E-Pro Blue', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', NULL, 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'ban bocor', '09:00:00', 'Rp. 2000000', 'Rp. 150000', 'Rp. 0'),
('AA2251BW - 2022-11-30', 1, 'Avanza', 2019, 'AA2251BW', 'Ilham Umar', 82123355402, 'Kecamatan Cisarua', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 100000, 13, 'g', 'E-Pro Green SN GF-5', 'g', 'g', 'p', 't', 'g', 't', 'p', 'p', 'p', 'g', 'Oli transmisi CVTF', 'p', 'p', 'g', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Kap berasap', '09:00:00', 'Rp. 2000000', 'Rp. 175000', 'Rp. 500000'),
('B1124CD - 2022-11-26', 1, 'Creta', 2010, 'B1124CD', 'Bambang', 82123355402, 'Kecamatan Banjaran', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 100000, 5, 'g', 'E-Pro Green SN GF-5', 'g', 'p', 'p', 't', 'g', 't', 'p', 't', 'p', 'g', 'Oli Transmisi MTF', 'p', 'p', 'p', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Kap mesin pernah berasap', '09:00:00', 'Rp. 2000000', 'Rp. 175000', 'Rp. 100000'),
('B1124CD - 2022-11-29', 1, 'Creta', 2010, 'B1124CD', 'Bambang', 82123355402, 'Kecamatan Banjaran', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 100000, 5, 'g', 'E-Pro Green SN GF-5', 'g', 'p', 'p', 't', 'g', 't', 'p', 't', 'p', 'g', 'Oli Transmisi ATF-DW1', 'p', 'p', 'p', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Ban pernah bocor', '09:00:00', 'Rp. 2000000', 'Rp. 175000', 'Rp. 200000'),
('B1124CD - 2022-11-30', 2, 'Creta', 2010, 'B1124CD', 'Bambang', 82123355402, 'Kecamatan Banjaran', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 100000, 8, 'g', 'E-Pro Green SN GF-5', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', NULL, 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't', 'Tidak ada', '09:00:00', 'Rp. 2000000', 'Rp. 175000', 'Rp. 0'),
('B2425CD - 2022-11-29', 3, 'Ioniq Electric', 2019, 'B2425CD', 'Sri Lutfi', 82123355402, 'Kecamatan Cileungsi', 'MHRGK5860JJ800110', 'L15Z52233415', 'Putih', 212, 1, 'p', NULL, 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', NULL, 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'tida ada', '10:00:00', 'Rp. 2000000', 'Rp. 0', 'Rp. 0'),
('B2425CD - 2022-11-30', 3, 'Ioniq Electric', 2019, 'B2425CD', 'Sri Lutfi', 82123355402, 'Kecamatan Cileungsi', 'MHRGK5860JJ800110', 'L15Z52233415', 'Putih', 154444, 1, 'p', NULL, 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', NULL, 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Tidak ada', '09:00:00', 'Rp. 2000000', 'Rp. 0', 'Rp. 0'),
('B3628CD - 2022-11-24', 2, 'Staria', 2012, 'B3628CD', 'Andika', 82123355402, 'Kecamatan Bojongsoang', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning', 10000, 1, 'p', NULL, 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', NULL, 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Belum ada', '09:00:00', 'Rp. 2000000', 'Rp. 0', 'Rp. 0'),
('B3628CD - 2022-11-30', 1, 'Staria', 2012, 'B3628CD', 'Andika', 82123355402, 'Kecamatan Bojongsoang', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning', 574353, 2, 'g', 'E-Pro Blue', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', NULL, 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't', 'Tidak ada', '10:00:00', 'Rp. 2000000', 'Rp. 150000', 'Rp. 0'),
('B4438CD - 2022-11-29', 2, 'Palisade', 2019, 'B4438CD', 'Nur Hayati', 82123355402, 'Kecamatan Arjasari', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning', 10000, 1, 'p', NULL, 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', NULL, 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Tida ada', '09:00:00', 'Rp. 2000000', 'Rp. 0', 'Rp. 0'),
('B5410CD - 2022-11-23', 1, 'Santa FE', 2020, 'B5410CD', 'Muhamad Zulkarnaen', 82123355402, 'Kecamatan Cisauk', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 1289, 2, 'g', 'E-Pro Blue', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', NULL, 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't', 'Tidak ada', '09:00:00', 'Rp. 2000000', 'Rp. 150000', 'Rp. 0'),
('B5410CD - 2022-11-27', 3, 'Santa FE', 2020, 'B5410CD', 'Muhamad Zulkarnaen', 82123355402, 'Kecamatan Cisauk', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 789333, 8, 'g', 'E-Pro Gold', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', NULL, 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't', 'Tidak ada', '09:00:00', 'Rp. 2000000', 'Rp. 125000', 'Rp. 0'),
('B9132CD - 2022-11-23', 3, 'Brio', 2010, 'B9132CD', 'Maman Abdurahman', 82123355402, 'Kecamatan Tanjungpriok', 'MHRGK5860JJ800110', 'L15Z52233415', 'Hitam', 12000, 1, 'p', NULL, 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', NULL, 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'tidak ada', '10:00:00', 'Rp. 2000000', 'Rp. 0', 'Rp. 0'),
('D1533FG - 2022-11-25', 3, 'Agya', 2021, 'D1533FG', 'Agung Buana', 82123355402, 'Kecamatan Lembang', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning', 900000, 2, 'g', 'E-Pro Blue', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', NULL, 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't', 'Ban bocor', '10:00:00', 'Rp. 2000000', 'Rp. 150000', 'Rp. 0'),
('D1533FG - 2022-11-27', 1, 'Agya', 2021, 'D1533FG', 'Agung Buana', 82123355402, 'Kecamatan Lembang', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning', 100000, 1, 'p', NULL, 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', NULL, 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'tidak ada', '09:00:00', 'Rp. 2000000', 'Rp. 0', 'Rp. 0'),
('F6531GHH - 2022-11-25', 3, 'L300', 2015, 'F6531GHH', 'Hidayat Krisna', 82123355402, 'Kecamatan Agrabinta', 'MHRGK5860JJ800110', 'L15Z52233415', 'Hitam', 600000, 1, 'p', NULL, 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', NULL, 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Tidak Ada', '09:00:00', 'Rp. 2000000', 'Rp. 0', 'Rp. 0'),
('F7180KJ - 2022-11-27', 2, 'Pajero Sport', 2014, 'F7180KJ', 'Arif Wahyu', 82123355402, 'Kecamatan Bojongpicung', 'MHRGK5860JJ800110', 'L15Z52233415', 'Silver', 178888, 13, 'g', 'E-Pro Blue', 'g', 'g', 'p', 't', 'g', 't', 'p', 'p', 'p', 'g', 'Oli Transmisi ATF-DW1', 'p', 'p', 'g', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'tidak ada', '09:00:00', 'Rp. 2000000', 'Rp. 150000', 'Rp. 200000'),
('G5722OI - 2022-11-28', 1, 'Fortuner', 2010, 'G5722OI', 'Bima Taufik', 82123355402, 'Kecamatan Ngamprah', 'MHRGK5860JJ800110', 'L15Z52233415', 'Jingga', 460000, 10, 'g', 'E-Pro Green SN GF-5', 'g', 'g', 't', 't', 't', 't', 't', 't', 'p', 't', NULL, 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't', 'Tidak ada', '09:00:00', 'Rp. 2000000', 'Rp. 175000', 'Rp. 0'),
('H6367BG - 2022-11-26', 1, 'Eclipse Cross', 2019, 'H6367BG', 'Budi Agung', 82123355402, 'Kecamatan Ciapatat', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning', 100, 1, 'p', NULL, 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', NULL, 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Tidak ada', '09:00:00', 'Rp. 2000000', 'Rp. 0', 'Rp. 0'),
('K3077PQ - 2022-11-20', 1, 'A 200 HATCHBACK', 2022, 'K3077PQ', 'Tirto Bima', 82123355402, 'Kecamatan Candimulyo', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 100000, 1, 'p', NULL, 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', NULL, 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Ban kempes', '09:00:00', 'Rp. 2000000', 'Rp. 0', 'Rp. 0'),
('K3077PQ - 2022-11-21', 2, 'A 200 HATCHBACK', 2022, 'K3077PQ', 'Tirto Bima', 82123355402, 'Kecamatan Candimulyo', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 12345, 5, 'g', 'E-Pro Green SN GF-5', 'g', 'p', 'p', 't', 'g', 't', 'p', 't', 'p', 'g', 'Oli Transmisi MTF', 'p', 'p', 'p', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Ban kempes', '09:00:00', 'Rp. 2000000', 'Rp. 175000', 'Rp. 100000'),
('K3077PQ - 2022-11-22', 1, 'A 200 HATCHBACK', 2022, 'K3077PQ', 'Tirto Bima', 82123355402, 'Kecamatan Candimulyo', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah', 1000, 3, 'g', 'E-Pro Green SN GF-5', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', NULL, 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'qwerty', '09:00:00', 'Rp. 2000000', 'Rp. 175000', 'Rp. 0'),
('N2358WP - 2022-11-21', 3, 'A 200 HATCHBACK', 2019, 'N2358WP', 'Amir Yusuf', 82123355402, 'Kecamatan Campaka Mulya', 'MHRGK5860JJ800110', 'L15Z52233415', 'Putih', 123, 5, 'g', 'E-Pro Blue', 'g', 'p', 'p', 't', 'g', 't', 'p', 't', 'p', 'g', 'Oli Transmisi ATF-DW1', 'p', 'p', 'p', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Ban bocor', '09:00:00', 'Rp. 2000000', 'Rp. 150000', 'Rp. 200000'),
('N2358WP - 2022-11-22', 1, 'A 200 HATCHBACK', 2019, 'N2358WP', 'Amir Yusuf', 82123355402, 'Kecamatan Campaka Mulya', 'MHRGK5860JJ800110', 'L15Z52233415', 'Putih', 45000, 3, 'g', 'E-Pro Blue', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', NULL, 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'Susah starter', '09:00:00', 'Rp. 2000000', 'Rp. 150000', 'Rp. 0');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_servis`
--

CREATE TABLE `kegiatan_servis` (
  `id_kegiatan_servis` int(11) NOT NULL,
  `olimesin` varchar(1) NOT NULL,
  `olifilter` varchar(1) NOT NULL,
  `saringanudara` varchar(1) NOT NULL,
  `keregangankatup` varchar(1) NOT NULL,
  `saringanbensin` varchar(1) NOT NULL,
  `busitipenikel` varchar(1) NOT NULL,
  `busitipeiridium` varchar(1) NOT NULL,
  `drivebelt` varchar(1) NOT NULL,
  `kecepatanstasioner` varchar(1) NOT NULL,
  `radiatorcoolant` varchar(1) NOT NULL,
  `olitransmisi` varchar(1) NOT NULL,
  `enginecleaner` varchar(1) NOT NULL,
  `remdepanbelakang` varchar(1) NOT NULL,
  `fluidarem` varchar(1) NOT NULL,
  `remparkir` varchar(1) NOT NULL,
  `saringanac` varchar(1) NOT NULL,
  `rotasiban` varchar(1) NOT NULL,
  `pintugeserlistrik` varchar(1) NOT NULL,
  `tierods` varchar(1) NOT NULL,
  `komponensuspensi` varchar(1) NOT NULL,
  `bootsdriveshaft` varchar(1) NOT NULL,
  `selangrempipa` varchar(1) NOT NULL,
  `semuaketinggianlevel` varchar(1) NOT NULL,
  `sistempembuangan` varchar(1) NOT NULL,
  `selangbensin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan_servis`
--

INSERT INTO `kegiatan_servis` (`id_kegiatan_servis`, `olimesin`, `olifilter`, `saringanudara`, `keregangankatup`, `saringanbensin`, `busitipenikel`, `busitipeiridium`, `drivebelt`, `kecepatanstasioner`, `radiatorcoolant`, `olitransmisi`, `enginecleaner`, `remdepanbelakang`, `fluidarem`, `remparkir`, `saringanac`, `rotasiban`, `pintugeserlistrik`, `tierods`, `komponensuspensi`, `bootsdriveshaft`, `selangrempipa`, `semuaketinggianlevel`, `sistempembuangan`, `selangbensin`) VALUES
(1, 'p', 't', 'p', 't', 't', 't', 't', 'p', 'p', 't', 'p', 't', 't', 'p', 'p', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(2, 'g', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't'),
(3, 'g', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(4, 'g', 'g', 'g', 't', 't', 't', 't', 't', 't', 'p', 't', 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't'),
(5, 'g', 'g', 'p', 'p', 't', 'g', 't', 'p', 't', 'p', 'g', 'p', 'p', 'p', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(6, 'g', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't'),
(7, 'g', 'g', 'g', 't', 't', 't', 't', 't', 't', 'p', 't', 'p', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(8, 'g', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't'),
(9, 'g', 'g', 'p', 'p', 'g', 'g', 't', 'p', 't', 'p', 'g', 'p', 'p', 'p', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(10, 'g', 'g', 'g', 't', 't', 't', 't', 't', 't', 'p', 't', 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't'),
(11, 'g', 'g', 'p', 't', 't', 't', 'g', 't', 't', 'p', 't', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
(12, 'g', 'g', 'p', 't', 't', 't', 't', 't', 't', 'p', 't', 'p', 'p', 'p', 't', 't', 'p', 'p', 'p', 'p', 'p', 't', 't', 't', 't'),
(13, 'g', 'g', 'g', 'p', 't', 'g', 't', 'p', 'p', 'p', 'g', 'p', 'p', 'g', 'p', 'g', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `nomor_polisi` varchar(99) NOT NULL,
  `nama_pemilik` varchar(99) NOT NULL,
  `merk_kendaraan` varchar(99) NOT NULL,
  `tahun_kendaraan` int(6) NOT NULL,
  `nomor_telepon` bigint(20) NOT NULL,
  `nomor_handphone` bigint(20) NOT NULL,
  `isi_silinder` bigint(20) NOT NULL,
  `alamat_pemilik` varchar(99) NOT NULL,
  `nomor_chasis` varchar(99) NOT NULL,
  `nomor_mesin` varchar(99) NOT NULL,
  `warna_kendaraan` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`nomor_polisi`, `nama_pemilik`, `merk_kendaraan`, `tahun_kendaraan`, `nomor_telepon`, `nomor_handphone`, `isi_silinder`, `alamat_pemilik`, `nomor_chasis`, `nomor_mesin`, `warna_kendaraan`) VALUES
('AA1448GF', 'Agung Sulaiman', 'Agya', 2022, 2123355, 82123355402, 1500, 'Kecamatan Bandongan', 'MHRGK5860JJ800110', 'L15Z52233415', 'Putih'),
('AA2251BW', 'Ilham Umar', 'Avanza', 2019, 2123355, 82123355402, 1500, 'Kecamatan Cisarua', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah'),
('AA3046LO', 'Harta Muhamad', 'Avanza', 2022, 2123355, 82123355402, 1500, 'Kecamatan Borobudur', 'MHRGK5860JJ800110', 'L15Z52233415', 'Silver'),
('B1124CD', 'Bambang', 'Creta', 2010, 2123355, 82123355402, 1500, 'Kecamatan Banjaran', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah'),
('B2425CD', 'Sri Lutfi', 'Ioniq Electric', 2019, 2123355, 82123355402, 2500, 'Kecamatan Cileungsi', 'MHRGK5860JJ800110', 'L15Z52233415', 'Putih'),
('B3628CD', 'Andika', 'Staria', 2012, 2123355, 82123355402, 2700, 'Kecamatan Bojongsoang', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning'),
('B4438CD', 'Nur Hayati', 'Palisade', 2019, 2123355, 82123355402, 2700, 'Kecamatan Arjasari', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning'),
('B5410CD', 'Muhamad Zulkarnaen', 'Santa FE', 2020, 2123355, 82123355402, 2000, 'Kecamatan Cisauk', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah'),
('B6233CD', 'Nindya Azhari', 'HRV', 2022, 2123355, 82123355402, 2000, 'Kecamatan Lembang', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning'),
('B6387CD', 'Nida Zakiyah', 'City', 2019, 2123355, 82123355402, 1500, 'Kecamatan Cisaat', 'MHRGK5860JJ800110', 'L15Z52233415', 'Abu-abu'),
('B9132CD', 'Maman Abdurahman', 'Brio', 2010, 2123355, 82123355402, 1500, 'Kecamatan Tanjungpriok', 'MHRGK5860JJ800110', 'L15Z52233415', 'Hitam'),
('D1533FG', 'Agung Buana', 'Agya', 2021, 2123355, 82123355402, 1500, 'Kecamatan Lembang', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning'),
('D1566GH', 'Ridwan Ismail', 'Alphard', 2015, 2123355, 82123355402, 3500, 'Kecamatan Parongpong', 'MHRGK5860JJ800110', 'L15Z52233415', 'Gold'),
('DM4331EW', 'Danial Dian', 'Alphard', 2010, 2123355, 82123355402, 3500, 'Kecamatan Banyumanik', 'MHRGK5860JJ800110', 'L15Z52233415', 'Hitam'),
('F6531GHH', 'Hidayat Krisna', 'L300', 2015, 2123355, 82123355402, 2268, 'Kecamatan Agrabinta', 'MHRGK5860JJ800110', 'L15Z52233415', 'Hitam'),
('F7180KJ', 'Arif Wahyu', 'Pajero Sport', 2014, 2123355, 82123355402, 2442, 'Kecamatan Bojongpicung', 'MHRGK5860JJ800110', 'L15Z52233415', 'Silver'),
('G5722OI', 'Bima Taufik', 'Fortuner', 2010, 2123355, 82123355402, 2400, 'Kecamatan Ngamprah', 'MHRGK5860JJ800110', 'L15Z52233415', 'Jingga'),
('H6367BG', 'Budi Agung', 'Eclipse Cross', 2019, 2123355, 82123355402, 1499, 'Kecamatan Ciapatat', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning'),
('K3077PQ', 'Tirto Bima', 'A 200 HATCHBACK', 2022, 2123355, 82123355402, 2000, 'Kecamatan Candimulyo', 'MHRGK5860JJ800110', 'L15Z52233415', 'Merah'),
('K3586JK', 'Rustam Tirto', 'Camry', 2022, 2123355, 82123355402, 2500, 'Kecamatan Cikalong Wetan', 'MHRGK5860JJ800110', 'L15Z52233415', 'Hitam'),
('KT5644PR', 'Zulfikar Harun', 'Brio', 2019, 2123355, 82123355402, 1500, 'Kecamatan Candisari', 'MHRGK5860JJ800110', 'L15Z52233415', 'Kuning'),
('M9409DK', 'Arif Zulfikar', 'Xpander Cross', 2022, 2123355, 82123355402, 1499, 'Kecamatan Campaka', 'MHRGK5860JJ800110', 'L15Z52233415', 'Hitam'),
('N2358WP', 'Amir Yusuf', 'A 200 HATCHBACK', 2019, 2123355, 82123355402, 2000, 'Kecamatan Campaka Mulya', 'MHRGK5860JJ800110', 'L15Z52233415', 'Putih'),
('R5693GH', 'Setiawan Muhamad', 'Corolla Altis', 2010, 2123355, 82123355402, 1798, 'Kecamatan Cipeundeuy', 'MHRGK5860JJ800110', 'L15Z52233415', 'Silver');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `nama_parts` varchar(99) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `part_number` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `nama_parts`, `harga`, `part_number`) VALUES
(1, 'SET,KIT REPAIR - 01462-SDE-A02', 881100, '01462-SDE-A02'),
(2, 'SET,MASTER CYLN (20.64MM) - 01462-SEL-000', 1414600, '01462-SEL-000'),
(3, 'SET,MASTER CYLN (20.64MM) - 01462-SEL-950', 1021900, '01462-SEL-950'),
(4, 'SET,MASTER CYLN. - 01462-SNA-A01', 798600, '01462-SNA-A01'),
(5, 'PIPE COMP,OIL LEVEL - 15200-PWA-000', 192500, '15200-PWA-000'),
(6, 'ECU_AUTO LEVELING LIGHT - 33137-T7A-J01', 3591500, '33137-T7A-J01'),
(7, 'AS SET_BATTERY IN - 1D245-RTW-T00', 738100, '1D245-RTW-T00'),
(8, 'CAP,SPARE TIRE - 84641-SZY-T01ZA', 110000, '84641-SZY-T01ZA'),
(9, 'BRKT,HOSE CLAMP - 19116-5AA-A00', 28600, '19116-5AA-A00'),
(10, 'TUBE CLAMP,CRNK H - 32743-RB0-000', 36300, '32743-RB0-000'),
(11, 'LAMP UNIT,R - 33501-S5A-003', 1604900, '33501-S5A-003'),
(12, 'WIRE HARN,INST - 32117-TF0-Q10', 5430700, '32117-TF0-Q10'),
(13, 'CORD INTR - 32155-T5L-Q01', 165000, '32155-T5L-Q01'),
(14, 'LNG ASSY,R TRUNK SIDE - 84601-SNL-Q02ZA', 601700, '84601-SNL-Q02ZA'),
(15, '01431-SAE-T01L - 01431-SAE-T01', 207900, '01431-SAE-T01'),
(16, 'SHOE KIT R RR BRAKE - 01431-SAE-T01L', 207900, '01431-SAE-T01L'),
(17, '01432-SAE-T01L - 01432-SAE-T01', 207900, '01432-SAE-T01'),
(18, 'SHOE KIT L RR BRAKE - 01432-SAE-T01L', 207900, '01432-SAE-T01L'),
(19, 'SET,RR WHEEL CYLINDER (15.87MM) - 01433-SAA-010', 534600, '01433-SAA-010'),
(20, 'CYLINDER SET RR WHEEL - 01433-SE0-010', 139700, '01433-SE0-010'),
(21, 'SET REAR WHEEL - 01433-SJ8-000', 188100, '01433-SJ8-000'),
(22, 'SET_REAR WHEEL CY - 01433-T4G-000', 245300, '01433-T4G-000'),
(23, 'SET,REAR WHEEL CYLN - 01433-T5R-A00', 188100, '01433-T5R-A00'),
(24, 'CYLINDER SET, RR. WH - 01433-TG4-000', 188100, '01433-TG4-000'),
(25, '01462-SDB-A02 - 01462-SDB-A01', 1976700, '01462-SDB-A01'),
(26, 'SET,MASTER CYLN. - 01462-SDB-A02', 1976700, '01462-SDB-A02'),
(27, 'SET,KIT REPAIR - 01462-SDD-A02', 1560900, '01462-SDD-A02'),
(28, 'SET,MASTER CYLIND - 01462-SFE-J10', 1614800, '01462-SFE-J10'),
(29, '01462-SNA-A01 - 01462-SNA-A00', 798600, '01462-SNA-A00'),
(30, '01462-SNB-J01 - 01462-SNB-J00', 1027400, '01462-SNB-J00'),
(31, 'PIPE COMP,OIL LEVEL - 15200-RE2-E00', 357500, '15200-RE2-E00'),
(32, 'GAUGE COMP,OIL LEVEL - 15650-59B-000', 184800, '15650-59B-000'),
(33, 'ECU_AUTO LEVELING - 33137-T7A-003', 3591500, '33137-T7A-003'),
(34, 'UNIT AUTO LEVELING - 33138-SLE-003', 3854400, '33138-SLE-003'),
(35, 'BOX SUB ASSY,BATT - 1D010-RBJ-J01', 40684600, '1D010-RBJ-J01'),
(36, 'SENSOR ASSY,BATT - 1K530-RW0-003', 2610300, '1K530-RW0-003'),
(37, 'FACE,FR BUMPER - 04711-S7A-000ZZ', 4262500, '04711-S7A-000ZZ'),
(38, 'MUDGUARD,R FR - 75800-S5H-T10', 479600, '75800-S5H-T10'),
(39, 'CLIP,SPARE TIRE L - 91513-S70-000', 60500, '91513-S70-000'),
(40, 'GREASE PAD - 43231-SB0-315L', 35200, '43231-SB0-315L'),
(41, 'GREASE PAD - 43231-SB0-316', 48400, '43231-SB0-316'),
(42, 'LAMP UNIT,R. - 33501-S5H-T01', 1686300, '33501-S5H-T01'),
(43, 'WIRE HARN CABIN - 32120-SDA-Q00', 8516200, '32120-SDA-Q00'),
(44, 'CAPTHRGH ACHR YR327L - 81493-S2K-004ZQ', 34100, '81493-S2K-004ZQ'),
(45, 'OIL SEAL,LOW TORQ - 91212-59B-003', 122100, '91212-59B-003'),
(46, 'KNOB ASSY FUEL OPENE - 85511-SB2-003ZQ', 81400, '85511-SB2-003ZQ'),
(47, 'PLATE,JACK CAUTIO - 89311-SFE-Q01', 56100, '89311-SFE-Q01'),
(48, 'FASTENER A,QTR WS - 91536-S7A-003', 44000, '91536-S7A-003'),
(49, 'GLASSCELL CLEAR LACQ - AF060-000-0', 86900, 'AF060-000-0'),
(50, 'REMOTE PANASONIC - KPANA-SON-IC2XQRM', 479600, 'KPANA-SON-IC2XQRM'),
(51, 'PANASONIC CQ EH 4480 - PCQEH-448-0', 9395100, 'PCQEH-448-0'),
(52, 'OUTRIGGER SET R,FR SIDE - 04600-SEL-T01ZZ', 1219900, '04600-SEL-T01ZZ'),
(53, 'HEAD COMP,CYLN - 12200-PWC-040', 17655000, '12200-PWC-040'),
(54, 'HEAD COMP,CYLINDER - 12200-PWK-Z01', 17655000, '12200-PWK-Z01'),
(55, 'HEAD COMP,CYLINDER - 12200-R1A-A00', 22057200, '12200-R1A-A00'),
(56, 'TIMING BELT IDLER - 14550-RCA-A01', 711700, '14550-RCA-A01'),
(57, 'DOWEL PIN,18X13 - 15123-PCX-003', 51700, '15123-PCX-003'),
(58, 'DOWEL PIN,23X13 - 15123-RZP-000', 56100, '15123-RZP-000'),
(59, 'INNER_VISOR T - 77202-TG1-T01ZB', 239800, '77202-TG1-T01ZB'),
(60, 'INNER LOCK CABLE - 81334-TME-T51', 58300, '81334-TME-T51'),
(61, 'INNER GARN,RR BACK - 82125-TF0-J01', 74800, '82125-TF0-J01'),
(62, 'INNER GARN,RR BACK - 82125-TG0-T01', 56100, '82125-TG0-T01'),
(63, 'VALVE_INLET CAM - 14711-59B-J00', 239800, '14711-59B-J00'),
(64, 'VALVE,INLET - 14711-RB0-J00', 239800, '14711-RB0-J00'),
(65, 'JOINT HOSE,COMP F - 16728-R70-A01', 3969900, '16728-R70-A01'),
(66, 'JOINT COMP,PCS - 17103-PWA-000', 192500, '17103-PWA-000'),
(67, 'Tidak Ada', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `request_part`
--

CREATE TABLE `request_part` (
  `id` int(11) NOT NULL,
  `nama_part` varchar(99) NOT NULL,
  `plat_nomor_request` varchar(99) NOT NULL,
  `id_request_part` varchar(99) NOT NULL,
  `harga` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sedang_servis`
--

CREATE TABLE `sedang_servis` (
  `nomor_pitstop` int(5) NOT NULL,
  `nomor_polisi` varchar(20) NOT NULL,
  `nama_pemilik` varchar(99) NOT NULL,
  `nomor_handphone` bigint(20) NOT NULL,
  `request_karu` varchar(99) NOT NULL,
  `catatan_karu` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sedang_servis`
--

INSERT INTO `sedang_servis` (`nomor_pitstop`, `nomor_polisi`, `nama_pemilik`, `nomor_handphone`, `request_karu`, `catatan_karu`) VALUES
(1, 'B3628CD', 'Andika', 82123355402, 'BELUM ADA REQUEST', 'BELUM ADA CATATAN'),
(2, 'B1124CD', 'Bambang', 82123355402, 'BELUM ADA REQUEST', 'BELUM ADA CATATAN'),
(3, 'B2425CD', 'Sri Lutfi', 82123355402, 'BELUM ADA REQUEST', 'BELUM ADA CATATAN');

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE `servis` (
  `id_servis` int(11) NOT NULL,
  `nama_servis` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servis`
--

INSERT INTO `servis` (`id_servis`, `nama_servis`) VALUES
(1, '1000 KM atau 1 Bulan Kepemilikan'),
(2, '10.000 KM atau 6 Bulan Kepemilikan'),
(3, '20.000 KM atau 12 Bulan Kepemilikan'),
(4, '30.000 KM atau 18 Bulan Kepemilikan'),
(5, '40.000 KM atau 24 Bulan Kepemilikan'),
(6, '50.000 KM atau 30 Bulan Kepemilikan'),
(7, '60.000 KM atau 36 Bulan Kepemilikan'),
(8, '70.000 KM atau 42 Bulan Kepemilikan'),
(9, '80.000 KM atau 48 Bulan Kepemilikan'),
(10, '90.000 KM atau 54 Bulan Kepemilikan'),
(11, '100.000 KM atau 60 Bulan Kepemilikan'),
(12, '110.000 KM atau 66 Bulan Kepemilikan'),
(13, '120.000 KM atau 72 Bulan Kepemilikan');

-- --------------------------------------------------------

--
-- Table structure for table `telah_servis`
--

CREATE TABLE `telah_servis` (
  `id` varchar(99) NOT NULL,
  `konfirmasi` varchar(6) NOT NULL,
  `nomor_polisi_selesai` varchar(99) NOT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telah_servis`
--

INSERT INTO `telah_servis` (`id`, `konfirmasi`, `nomor_polisi_selesai`, `tgl`) VALUES
('AA2251BW - 2022-11-29', 'Sudah', 'AA2251BW', '2022-11-29'),
('AA2251BW - 2022-11-30', 'Sudah', 'AA2251BW', '2022-11-30'),
('B1124CD - 2022-11-26', 'Sudah', 'B1124CD', '2022-11-26'),
('B1124CD - 2022-11-29', 'Sudah', 'B1124CD', '2022-11-29'),
('B3628CD - 2022-11-24', 'Sudah', 'B3628CD', '2022-11-24'),
('B5410CD - 2022-11-23', 'Sudah', 'B5410CD', '2022-11-23'),
('B5410CD - 2022-11-27', 'Sudah', 'B5410CD', '2022-11-27'),
('B9132CD - 2022-11-23', 'Sudah', 'B9132CD', '2022-11-23'),
('D1533FG - 2022-11-27', 'Sudah', 'D1533FG', '2022-11-27'),
('F6531GHH - 2022-11-25', 'Sudah', 'F6531GHH', '2022-11-25'),
('F7180KJ - 2022-11-27', 'Sudah', 'F7180KJ', '2022-11-27'),
('G5722OI - 2022-11-28', 'Sudah', 'G5722OI', '2022-11-28'),
('H6367BG - 2022-11-26', 'Sudah', 'H6367BG', '2022-11-26'),
('K3077PQ - 2022-11-20', 'Sudah', 'K3077PQ', '2022-11-20'),
('K3077PQ - 2022-11-21', 'Sudah', 'K3077PQ', '2022-11-21'),
('K3077PQ - 2022-11-22', 'Sudah', 'K3077PQ', '2022-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(99) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `handphone` bigint(20) NOT NULL,
  `role` int(5) NOT NULL,
  `teknisi_a` varchar(99) NOT NULL,
  `teknisi_b` varchar(99) NOT NULL,
  `nomor_pitstop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `nama`, `nip`, `handphone`, `role`, `teknisi_a`, `teknisi_b`, `nomor_pitstop`) VALUES
('sayakepalaregu1', '$2y$10$XSYbgmajE8rR5doYYQm4te4YJZlY7/QRE5nNZ8f6xt3sTiPmm4IdC', 'Kepala Regu 1', 400002, 81299413340, 2, 'Saya Teknisi 1', 'Saya Teknisi 2', 1),
('sayakepalaregu2', '$2y$10$AjjB59uWvPvFhpDF4yBr6O0IDMdboBLcjhhEei/rCDAASiWJsN26i', 'Kepala Regu 2', 400003, 81299413341, 2, 'Saya Teknisi 3', 'Saya Teknisi 4', 2),
('sayakepalaregu3', '$2y$10$Ah7URgROUobS1jYJhZwPuugf4dXHF7Vxglz7MWJbzP8TVMvX1O0p2', 'Kepala Regu 3', 400004, 81299413342, 2, 'Saya Teknisi 5', 'Saya Teknisi 6', 3),
('sayamanager', '$2y$10$W.ZAyVgkQHPrlS5OUEhRxOQaTpO7vbcxN.qQ9ZQdHuz/xmlESo2iC', 'Manager', 400005, 82123355402, 3, '', '', 0),
('sayaserviceadvisor', '$2y$10$v7sczDDEGWTpNgFo4KLTzeBfcfEHeSWUjlOoWIwo7DsKlmDAdZLMa', 'Service Advisor', 400001, 81299413339, 1, '', '', 0),
('serviceadvisor2', '$2a$12$1MpFuqcn59r3LLhPVPeope9JrFf7YBdxv0Ql1G4uMOLs/CfOnOBBi', 'Service Advisor Cadangan', 400006, 81299413340, 1, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_servis_tersedia`
--
ALTER TABLE `alat_servis_tersedia`
  ADD PRIMARY KEY (`id_alat_tersedia`);

--
-- Indexes for table `alat_untuk_servis`
--
ALTER TABLE `alat_untuk_servis`
  ADD PRIMARY KEY (`id_servis_alat`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`plat_nomor`);

--
-- Indexes for table `daftar_peralatan`
--
ALTER TABLE `daftar_peralatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dikerjakan_oleh`
--
ALTER TABLE `dikerjakan_oleh`
  ADD PRIMARY KEY (`id_dikerjakanoleh`);

--
-- Indexes for table `harga_servis`
--
ALTER TABLE `harga_servis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_cuci`
--
ALTER TABLE `history_cuci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_part`
--
ALTER TABLE `history_part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_pemeriksaan`
--
ALTER TABLE `history_pemeriksaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_qmc_1`
--
ALTER TABLE `history_qmc_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_qmc_2`
--
ALTER TABLE `history_qmc_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_qmc_3`
--
ALTER TABLE `history_qmc_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_qmc_4`
--
ALTER TABLE `history_qmc_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_qmc_5`
--
ALTER TABLE `history_qmc_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_qmc_6`
--
ALTER TABLE `history_qmc_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_tasklist`
--
ALTER TABLE `history_tasklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_workorder`
--
ALTER TABLE `history_workorder`
  ADD PRIMARY KEY (`id_history_workorder`);

--
-- Indexes for table `kegiatan_servis`
--
ALTER TABLE `kegiatan_servis`
  ADD PRIMARY KEY (`id_kegiatan_servis`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`nomor_polisi`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_part`
--
ALTER TABLE `request_part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sedang_servis`
--
ALTER TABLE `sedang_servis`
  ADD PRIMARY KEY (`nomor_pitstop`);

--
-- Indexes for table `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id_servis`);

--
-- Indexes for table `telah_servis`
--
ALTER TABLE `telah_servis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_servis_tersedia`
--
ALTER TABLE `alat_servis_tersedia`
  MODIFY `id_alat_tersedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `alat_untuk_servis`
--
ALTER TABLE `alat_untuk_servis`
  MODIFY `id_servis_alat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `harga_servis`
--
ALTER TABLE `harga_servis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `history_part`
--
ALTER TABLE `history_part`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `kegiatan_servis`
--
ALTER TABLE `kegiatan_servis`
  MODIFY `id_kegiatan_servis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `request_part`
--
ALTER TABLE `request_part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `servis`
--
ALTER TABLE `servis`
  MODIFY `id_servis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
