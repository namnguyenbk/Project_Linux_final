-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2018 at 08:39 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `User`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `birthday` date NOT NULL,
  `sdt` varchar(15) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mail` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `contact` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `name`, `pass`, `contact`) VALUES
('123ssss', 'sog le nad', 'a05e527e6653d90d380b7074eb1ba386', '11111111'),
('12sonbg qwjqw', 'song le van', 'a05e527e6653d90d380b7074eb1ba386', '12212131323'),
('ancong', 'Luu Công An', 'd10e7dbbe31193ebf3f20644a057670b', '123456'),
('ancong123', 'Ancong', 'a05e527e6653d90d380b7074eb1ba386', '123'),
('luonghoang', 'Hoang Nong Luong', 'a05e527e6653d90d380b7074eb1ba386', '123456789'),
('namnguyen', 'Nguyễn Danh Nam', 'a05e527e6653d90d380b7074eb1ba386', '01686137754'),
('song123', 'Le Van Long', '879c67791fc1d9c51a1291b517cf6ecf', '1234571'),
('songle', 'Le Van Song', 'a05e527e6653d90d380b7074eb1ba386', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
