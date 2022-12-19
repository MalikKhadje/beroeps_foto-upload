-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2022 at 03:25 PM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foto_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `Antwoorden`
--

CREATE TABLE `Antwoorden` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Reactie_ID` int(11) NOT NULL,
  `Antwoord` text NOT NULL,
  `Aangemaakt_op` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Geupdate_op` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Foto` longblob NOT NULL,
  `Titel` varchar(255) NOT NULL,
  `Beschrijving` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `Aangemaakt_op` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Geupdate_op` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Reacties`
--

CREATE TABLE `Reacties` (
  `ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Post_ID` int(11) NOT NULL,
  `Reactie` text NOT NULL,
  `Aangemaakt_op` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Geupdate_op` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID` int(11) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Wachtwoord` varchar(255) NOT NULL,
  `Aangemaakt_op` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Antwoorden`
--
ALTER TABLE `Antwoorden`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Reacties`
--
ALTER TABLE `Reacties`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Antwoorden`
--
ALTER TABLE `Antwoorden`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Reacties`
--
ALTER TABLE `Reacties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
