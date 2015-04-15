-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2015 at 08:49 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `movement`
--
CREATE DATABASE `movement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `movement`;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bio` text NOT NULL,
  `pword` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`fname`, `lname`, `email`, `bio`, `pword`, `username`) VALUES
('Joe', 'Lear', 'joeisamonkey@yahoo.com', 'All about me', 'joe', '');
