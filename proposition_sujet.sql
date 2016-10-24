-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 24, 2016 at 04:33 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `memoire`
--

-- --------------------------------------------------------

--
-- Table structure for table `proposition_sujet`
--

CREATE TABLE `proposition_sujet` (
  `id` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `sujet` varchar(256) NOT NULL,
  `encadrant` varchar(256) NOT NULL,
  `num_version` int(11) NOT NULL,
  `apport_ai` text NOT NULL,
  `date_depot` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `session` varchar(256) NOT NULL,
  `statut_validation` varchar(256) NOT NULL,
  `id_memoire_final` int(11) NOT NULL,
  `deroulement` text NOT NULL,
  `problematique` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proposition_sujet`
--

INSERT INTO `proposition_sujet` (`id`, `nom`, `sujet`, `encadrant`, `num_version`, `apport_ai`, `date_depot`, `session`, `statut_validation`, `id_memoire_final`, `deroulement`, `problematique`) VALUES
(1, '', '', '', 0, '', '0000-00-00 00:00:00', '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proposition_sujet`
--
ALTER TABLE `proposition_sujet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proposition_sujet`
--
ALTER TABLE `proposition_sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
