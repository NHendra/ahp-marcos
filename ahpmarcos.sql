-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 11:15 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahpmarcos`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `c1` float NOT NULL,
  `c2` float NOT NULL,
  `c3` float NOT NULL,
  `c4` float NOT NULL,
  `c5` float NOT NULL,
  `c6` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `kode`, `nama`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES
(29, 'A1', 'Zoom', 5.68, 5.39, 5.84, 5.03, 4.97, 5.23),
(30, 'A2', 'Google Hangout', 4.52, 4.65, 4.35, 4.48, 4.77, 4.74),
(31, 'A3', 'Google Meet', 5.65, 6.03, 5.9, 5.97, 5.81, 5.9),
(32, 'A4', 'GoToMeeting', 4.29, 4.26, 4.48, 4.29, 4.35, 4.32),
(33, 'A5', 'Skype', 4.68, 4.35, 4.48, 4.48, 4.42, 4.35),
(34, 'A6', 'Cisco Webex', 5.13, 4.97, 4.97, 5.03, 4.9, 4.94),
(35, 'A7 ', 'Microsoft Team', 4.58, 4.48, 4.65, 4.45, 4.48, 4.55);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `crit_id` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `cosben` tinyint(1) NOT NULL,
  `p1` float NOT NULL,
  `p2` float NOT NULL,
  `p3` float NOT NULL,
  `p4` float NOT NULL,
  `p5` float NOT NULL,
  `p6` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`crit_id`, `nama`, `cosben`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`) VALUES
('c1', 'Feature', 1, 1, 1, 1, 5, 1, 1),
('c2', 'User Friendly', 1, 1, 1, 1, 1, 1, 1),
('c3', 'Participant', 1, 1, 1, 1, 1, 1, 1),
('c4', 'Duration', 1, 0.2, 1, 1, 1, 1, 0.2),
('c5', 'Bandwith', 1, 1, 1, 1, 1, 1, 1),
('c6', 'Connectivity', 1, 1, 1, 1, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$6cC6ByWV0YruobPv52sY7efVc0Aryx/9SW1pW645KveK0jrhF988.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`crit_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
