-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 05:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booklist`
--

CREATE TABLE `booklist` (
  `bookid` int(50) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `bookdetail` varchar(100) NOT NULL,
  `bookauthor` varchar(100) NOT NULL,
  `bookpub` varchar(100) NOT NULL,
  `bookedi` int(50) NOT NULL,
  `bookprice` int(50) NOT NULL,
  `bookquantity` int(50) NOT NULL,
  `bookimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booklist`
--

INSERT INTO `booklist` (`bookid`, `bookname`, `bookdetail`, `bookauthor`, `bookpub`, `bookedi`, `bookprice`, `bookquantity`, `bookimage`) VALUES
(1, 'The Design of Everyday Things', 'The Design of Everyday Things', 'Donald A Norman', 'Basic Books', 1, 250, 20, ''),
(3, 'test', 'test', 'test', 'test', 10, 100, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `bookrequest`
--

CREATE TABLE `bookrequest` (
  `bookid` int(50) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `days` int(50) NOT NULL,
  `bookemail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookrequest`
--

INSERT INTO `bookrequest` (`bookid`, `bookname`, `days`, `bookemail`) VALUES
(0, '', 0, ''),
(1, 'The Design of Everyday Things', 10, 'siam@gmail.com'),
(2, 'Software Engineering', 7, 'shakib@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE `issuebook` (
  `bookid` int(50) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `issue` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reportbook`
--

CREATE TABLE `reportbook` (
  `bookid` int(50) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `bookdetail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reportbook`
--

INSERT INTO `reportbook` (`bookid`, `bookname`, `bookdetail`) VALUES
(0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(0, 'aahil', 'aahil@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(0, 'Sakil Ahmed', 'ahmed@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(0, 'Samiul Arif', 'arif@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(0, 'Fahim Ahmed', 'fahim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'teacher'),
(0, ' Mahamud Hasan', 'hasan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(0, 'Mahamud Hasan', 'hasanmhamudantor@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(0, 'Mortuza Hasib', 'hasib@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'teacher'),
(0, 'Sazzad Hossain', 'limon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'teacher'),
(0, 'lms', 'lms@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(0, 'Sakil Ahmed', 'sakil@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'teacher'),
(0, 'shakibur Rahman', 'shakib@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(0, 'Atiquzzaman Shopnil', 'shopnil@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(0, 'Siam', 'siam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booklist`
--
ALTER TABLE `booklist`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `bookrequest`
--
ALTER TABLE `bookrequest`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `issuebook`
--
ALTER TABLE `issuebook`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `reportbook`
--
ALTER TABLE `reportbook`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
