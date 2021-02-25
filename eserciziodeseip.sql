-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 11:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eserciziodeseip`
--
CREATE DATABASE IF NOT EXISTS `eserciziodeseip` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eserciziodeseip`;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(200) NOT NULL,
  `banner_text` varchar(200) NOT NULL,
  `banner_link` varchar(200) NOT NULL,
  `banner_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_text`, `banner_link`, `banner_image`) VALUES
(1, 'Prodotti', 'Impianti automatizzati per la foratura, <br/>inserimento e montaggio dei mobili', '', 'banner-1.jpg'),
(2, 'Prodotti', 'Impianti automatizzati per la foratura, <br/> inserimento e montaggio dei mobili', '', 'banner-1.jpg'),
(3, 'Prodotti', 'Impianti automatizzati per la foratura, <br/> inserimento e montaggio dei mobili', '', 'banner-1.jpg'),
(4, 'Prodotti', 'Impianti automatizzati per la foratura, <br/>inserimento e montaggio dei mobili', '', 'banner-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `machine_id` int(11) NOT NULL,
  `machine_code` varchar(30) NOT NULL,
  `machine_type` varchar(30) NOT NULL,
  `machine_summary` varchar(500) NOT NULL,
  `machine_description` int(11) NOT NULL,
  `lati_foratura` int(11) NOT NULL,
  `num_mandrini` int(11) NOT NULL,
  `cambio_utensili` varchar(10) NOT NULL,
  `pantografo` varchar(10) NOT NULL,
  `gruppi` varchar(500) NOT NULL,
  `image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`machine_id`, `machine_code`, `machine_type`, `machine_summary`, `machine_description`, `lati_foratura`, `num_mandrini`, `cambio_utensili`, `pantografo`, `gruppi`, `image`) VALUES
(2, 'BMA-DLS-CNC', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'bma.jpg'),
(4, 'BMA-DLS-CNC-2', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'bma.jpg'),
(7, 'BMA-DLS-CNC-3', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'bma.jpg'),
(9, 'BMA-DLS-CNC-4', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'bma.jpg'),
(12, 'BMA-DLS-CNC-5', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'bma.jpg'),
(1, 'DTW-1', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'dtw.jpg'),
(3, 'DTW-2', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'dtw.jpg'),
(5, 'DTW-3', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'dtw.jpg'),
(6, 'DTW-4', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'dtw.jpg'),
(8, 'DTW-5', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'dtw.jpg'),
(10, 'DTW-6', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'dtw.jpg'),
(11, 'DTW-7', 'Foratrice', 'Linea con caricatore, prima foratrice, traslatore a 180° e seconda foratrice.', 1, 6, 18, 'No', 'Sì', 'Foratura da sopra, foratura orizzontale sui bordi trasversali e inserimento colla e spine, Foratura orizzontale sui bordi longitudinali, 2 gruppi di foratura per cerniere (sotto)', 'dtw.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`machine_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
