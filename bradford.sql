-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 11:13 PM
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
-- Database: `bradford`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(18) NOT NULL,
  `mobile` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@1234', 1122334455),
(2, 'aisha', 'ai@12', '123', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `bf_biography_info`
--

CREATE TABLE `bf_biography_info` (
  `bioinfo_id` int(11) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `forename` varchar(80) NOT NULL,
  `regiment` varchar(120) NOT NULL,
  `service_no` varchar(120) NOT NULL,
  `biography` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bf_biography_info`
--

INSERT INTO `bf_biography_info` (`bioinfo_id`, `surname`, `forename`, `regiment`, `service_no`, `biography`) VALUES
(1, 'dummy', 'dummy', 'dummy', 'dummy-12', 0x6d6e2e2c),
(2, 'Shaikh', 'Aisha', 'dummy rregiment', 'jgkj', 0x766d626a2c);

-- --------------------------------------------------------

--
-- Table structure for table `bf_buried`
--

CREATE TABLE `bf_buried` (
  `buried_id` int(11) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `forename` varchar(80) NOT NULL,
  `age` int(3) NOT NULL,
  `medals` varchar(120) NOT NULL,
  `date_of_death` date NOT NULL,
  `rank` varchar(120) NOT NULL,
  `service_no` varchar(120) NOT NULL,
  `regiment` varchar(120) NOT NULL,
  `unit` varchar(120) NOT NULL,
  `cemetery` varchar(120) NOT NULL,
  `grave_ref` varchar(120) NOT NULL,
  `info` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bf_buried`
--

INSERT INTO `bf_buried` (`buried_id`, `surname`, `forename`, `age`, `medals`, `date_of_death`, `rank`, `service_no`, `regiment`, `unit`, `cemetery`, `grave_ref`, `info`) VALUES
(1, 'dummyburied', 'dummyburied', 78, 'dummy_medal', '1915-07-22', 'dummy', 'dummy-11', 'dummy', 'dummy', 'dummy place', 'dummy ref', 'dummy '),
(2, 'sdgvb', 'giuhjl', 89, 'jb', '2024-03-15', ' bnm,', 'vjhkl', 'ghkl', 'gchvjk', 'vhjkl', 'guhil', 'fguhi'),
(4, 'bvhvjbkn.', 'vb vhjkl', 67, 'cghjgk', '2024-03-11', 'nvhbj,kn.', 'nvmb,kn.', 'vvmb,n.', 'gcjghk', 'gcvhjhk', 'hvjk', 'gcjkk');

-- --------------------------------------------------------

--
-- Table structure for table `bf_memorials`
--

CREATE TABLE `bf_memorials` (
  `mem_id` int(11) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `forename` varchar(80) NOT NULL,
  `regiment` varchar(120) NOT NULL,
  `unit` varchar(120) NOT NULL,
  `memorial` varchar(120) NOT NULL,
  `memorial_address` varchar(120) NOT NULL,
  `memorial_location` varchar(120) NOT NULL,
  `memorial_post_code` varchar(120) NOT NULL,
  `district` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bf_memorials`
--

INSERT INTO `bf_memorials` (`mem_id`, `surname`, `forename`, `regiment`, `unit`, `memorial`, `memorial_address`, `memorial_location`, `memorial_post_code`, `district`) VALUES
(1, 'Shaikh', 'Aisha', 'cgjhk', 'n n', 'vjbnk.', 'HOUSE NO.44 ', 'jvbknk', '71000', 'bjnkl');

-- --------------------------------------------------------

--
-- Table structure for table `bf_np_ref`
--

CREATE TABLE `bf_np_ref` (
  `nr_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `rank` varchar(80) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(120) NOT NULL,
  `regiment` varchar(120) NOT NULL,
  `comment_catagory` varchar(120) NOT NULL,
  `comment_date` date NOT NULL,
  `newspaper_name` varchar(120) NOT NULL,
  `paper_date` date NOT NULL,
  `page_col` varchar(120) NOT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bf_np_ref`
--

INSERT INTO `bf_np_ref` (`nr_id`, `name`, `rank`, `age`, `address`, `regiment`, `comment_catagory`, `comment_date`, `newspaper_name`, `paper_date`, `page_col`, `photo`) VALUES
(1, 'dummy rank', 'dummy name', 67, 'address', 'dummy reg', 'dummy comment', '2024-03-05', 'dummy paper', '2016-03-02', 'dummy page', ''),
(2, 'kugkadj', 'vjhkb', 78, 'vhjbk', 'hvkjhlj', 'vhbj', '2024-03-11', 'hgjvkl', '0000-00-00', 'vjhbk', '');

-- --------------------------------------------------------

--
-- Table structure for table `bf_rollofhonour`
--

CREATE TABLE `bf_rollofhonour` (
  `id` int(11) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `surname` varchar(80) NOT NULL,
  `forename` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `elec_ward` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `rank` varchar(50) NOT NULL,
  `reg` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `other_reg` varchar(50) NOT NULL,
  `other_unit` varchar(50) NOT NULL,
  `other_com` varchar(50) NOT NULL,
  `bm1` varchar(50) NOT NULL,
  `bm2` varchar(50) NOT NULL,
  `certificates` varchar(50) NOT NULL,
  `men1` varchar(50) NOT NULL,
  `men2` varchar(50) NOT NULL,
  `fm1` varchar(50) NOT NULL,
  `fm2` varchar(50) NOT NULL,
  `enlist_date` date NOT NULL,
  `discharge_date` date NOT NULL,
  `death_ser_date` date NOT NULL,
  `misc_norh_info` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `ser_no` varchar(50) NOT NULL,
  `other_ser_no` varchar(50) NOT NULL,
  `cem_mem` varchar(50) NOT NULL,
  `cem_mem_ref` varchar(50) NOT NULL,
  `cem_mem_country` varchar(50) NOT NULL,
  `add_cwcg_ifo` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `rej_dis` tinyint(1) NOT NULL,
  `death_unknown` tinyint(1) NOT NULL,
  `kia` tinyint(1) NOT NULL,
  `dgas_poision` tinyint(1) NOT NULL,
  `dcapt` tinyint(1) NOT NULL,
  `dship_sank` tinyint(1) NOT NULL,
  `daccident` tinyint(1) NOT NULL,
  `dwounds` tinyint(1) NOT NULL,
  `dillness` tinyint(1) NOT NULL,
  `ser_athome` tinyint(1) NOT NULL,
  `ser_athome_ill` tinyint(1) NOT NULL,
  `ser_athome_unfit` tinyint(1) NOT NULL,
  `western_front` tinyint(1) NOT NULL,
  `balkans` tinyint(1) NOT NULL,
  `dard_gall` tinyint(1) NOT NULL,
  `egy_pal` tinyint(1) NOT NULL,
  `meso` tinyint(1) NOT NULL,
  `salonika` tinyint(1) NOT NULL,
  `east_africa` tinyint(1) NOT NULL,
  `italy` tinyint(1) NOT NULL,
  `malta` tinyint(1) NOT NULL,
  `isle_man` tinyint(1) NOT NULL,
  `ireland` tinyint(1) NOT NULL,
  `india` tinyint(1) NOT NULL,
  `russia` tinyint(1) NOT NULL,
  `persia` tinyint(1) NOT NULL,
  `occ_turkey` tinyint(1) NOT NULL,
  `occ_germany` tinyint(1) NOT NULL,
  `wds1` tinyint(1) NOT NULL,
  `wds2` tinyint(1) NOT NULL,
  `wds3` tinyint(1) NOT NULL,
  `gds` tinyint(1) NOT NULL,
  `limb` tinyint(1) NOT NULL,
  `speech` tinyint(1) NOT NULL,
  `shell_shock` tinyint(1) NOT NULL,
  `sship_sank` tinyint(1) NOT NULL,
  `dishell_shock` tinyint(1) NOT NULL,
  `diswound` tinyint(1) NOT NULL,
  `disgassed` tinyint(1) NOT NULL,
  `disill` tinyint(1) NOT NULL,
  `disphyunfit` tinyint(1) NOT NULL,
  `dismedunfit` tinyint(1) NOT NULL,
  `unfit_overseas` tinyint(1) NOT NULL,
  `over_under_age` tinyint(1) NOT NULL,
  `son_claim` tinyint(1) NOT NULL,
  `captured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `mobile` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(0, 'user', 'user@gmail.com', 'jvhk', '123456789', 'address'),
(1, 'user', 'user@gmail.com', '1234', '123456789', 'address'),
(3, 'user', 'user@gmail.com', '1234', '123456789', 'address'),
(5, 'user', 'user@gmail.com', 'user@123', '123456789', 'address');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bf_biography_info`
--
ALTER TABLE `bf_biography_info`
  ADD PRIMARY KEY (`bioinfo_id`);

--
-- Indexes for table `bf_buried`
--
ALTER TABLE `bf_buried`
  ADD PRIMARY KEY (`buried_id`);

--
-- Indexes for table `bf_memorials`
--
ALTER TABLE `bf_memorials`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `bf_np_ref`
--
ALTER TABLE `bf_np_ref`
  ADD PRIMARY KEY (`nr_id`);

--
-- Indexes for table `bf_rollofhonour`
--
ALTER TABLE `bf_rollofhonour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
