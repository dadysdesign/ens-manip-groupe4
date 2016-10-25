-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 25, 2016 at 11:17 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `memoire`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis_proposition_sujet`
--

CREATE TABLE `avis_proposition_sujet` (
  `id` int(11) NOT NULL,
  `avis_ps_nom_bureau` varchar(256) NOT NULL,
  `avis_ps_sujet` varchar(256) NOT NULL,
  `avis_ps_encadrant` varchar(256) NOT NULL,
  `avis_ps_num_version` int(11) NOT NULL,
  `avis_ps_apport_ai` text NOT NULL,
  `avis_ps_date_envoi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avis_ps_session` varchar(256) NOT NULL,
  `avis_ps_statut_validation` varchar(256) NOT NULL,
  `id_proposition_sujet` int(11) NOT NULL,
  `avis_ps_deroulement` text NOT NULL,
  `avis_ps_problematique` text NOT NULL,
  `avis_ps_valide` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avis_proposition_sujet`
--
ALTER TABLE `avis_proposition_sujet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis_proposition_sujet`
--
ALTER TABLE `avis_proposition_sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
