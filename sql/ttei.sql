-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 04:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttei`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ssc_roll` int(10) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `phn_number` int(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `ssc_roll`, `gmail`, `phn_number`, `dob`, `gender`, `subject`, `comment`) VALUES
(9, 'Md.Nahid Hasan', 950824, 'nhd3456555@gmail.com', 1305193123, '2000-11-01', 'male', 'Computer Technology', 'Good JOb'),
(10, 'Mst. Jannati Khatun', 950843, 'jannati@gmail.com', 1712345678, '2001-12-25', 'female', 'Computer Technology', 'Nice'),
(11, 'Mst. Sornali Khatun', 950825, 'sornali@gmail.com', 1912345678, '2020-12-17', 'female', 'Civil Technology', 'nice'),
(12, 'Md Sakib Hasan', 123562, 'sakib@gmail.com', 1712354658, '2020-12-23', 'male', 'Computer Technology', 'good'),
(13, 'Mst Nusrat Jahan Nuba', 1, 'nusrat@gmail.com', 1787456321, '2020-12-02', 'female', 'GDPM Technology', 'valo');

-- --------------------------------------------------------

--
-- Table structure for table `civil_1st_batch_student`
--

CREATE TABLE `civil_1st_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil_1st_batch_student`
--

INSERT INTO `civil_1st_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `civil_2nd_batch_student`
--

CREATE TABLE `civil_2nd_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil_2nd_batch_student`
--

INSERT INTO `civil_2nd_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid2', 950824, 14881456, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `civil_3rd_batch_student`
--

CREATE TABLE `civil_3rd_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil_3rd_batch_student`
--

INSERT INTO `civil_3rd_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura'),
(2, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `civil_4th_batch_student`
--

CREATE TABLE `civil_4th_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil_4th_batch_student`
--

INSERT INTO `civil_4th_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'baghopara');

-- --------------------------------------------------------

--
-- Table structure for table `cmt_1st_batch_student`
--

CREATE TABLE `cmt_1st_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(10) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmt_1st_batch_student`
--

INSERT INTO `cmt_1st_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'Nahis Hasan ', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `cmt_2nd_batch_student`
--

CREATE TABLE `cmt_2nd_batch_student` (
  `id` int(11) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `roll2` int(50) NOT NULL,
  `reg2` int(50) NOT NULL,
  `gender2` varchar(50) NOT NULL,
  `contact2` int(50) NOT NULL,
  `address2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmt_2nd_batch_student`
--

INSERT INTO `cmt_2nd_batch_student` (`id`, `name2`, `roll2`, `reg2`, `gender2`, `contact2`, `address2`) VALUES
(1, 'Nahid Hasan', 950824, 1418884445, 'male', 1312345678, 'bogura'),
(10, 'Jannati', 950843, 1418884445, 'female', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `cmt_3rd_batch_student`
--

CREATE TABLE `cmt_3rd_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmt_3rd_batch_student`
--

INSERT INTO `cmt_3rd_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'Nahid Hasan', 950824, 141888445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `cmt_4th_batch_student`
--

CREATE TABLE `cmt_4th_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmt_4th_batch_student`
--

INSERT INTO `cmt_4th_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `electrical_1st_batch_student`
--

CREATE TABLE `electrical_1st_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electrical_1st_batch_student`
--

INSERT INTO `electrical_1st_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `electrical_2nd_batch_student`
--

CREATE TABLE `electrical_2nd_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electrical_2nd_batch_student`
--

INSERT INTO `electrical_2nd_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid hasan', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `electrical_3rd_batch_student`
--

CREATE TABLE `electrical_3rd_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electrical_3rd_batch_student`
--

INSERT INTO `electrical_3rd_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `electrical_4th_batch_student`
--

CREATE TABLE `electrical_4th_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electrical_4th_batch_student`
--

INSERT INTO `electrical_4th_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `gdpm_1st_batch_student`
--

CREATE TABLE `gdpm_1st_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gdpm_1st_batch_student`
--

INSERT INTO `gdpm_1st_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `gdpm_2nd_batch_student`
--

CREATE TABLE `gdpm_2nd_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gdpm_2nd_batch_student`
--

INSERT INTO `gdpm_2nd_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `gdpm_3rd_batch_student`
--

CREATE TABLE `gdpm_3rd_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gdpm_3rd_batch_student`
--

INSERT INTO `gdpm_3rd_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `gdpm_4th_batch_student`
--

CREATE TABLE `gdpm_4th_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gdpm_4th_batch_student`
--

INSERT INTO `gdpm_4th_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'Nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `gellary`
--

CREATE TABLE `gellary` (
  `id` int(11) NOT NULL,
  `computer` varchar(200) NOT NULL,
  `civil` varchar(200) NOT NULL,
  `electrical` varchar(200) NOT NULL,
  `texgdpm` varchar(200) NOT NULL,
  `sports` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gellary`
--

INSERT INTO `gellary` (`id`, `computer`, `civil`, `electrical`, `texgdpm`, `sports`) VALUES
(16, '111.jpg', '', '', '', ''),
(17, 'Screenshot (3).png', '', '', '', ''),
(18, 'Screenshot (2).png', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `page_view`
--

CREATE TABLE `page_view` (
  `id` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_view`
--

INSERT INTO `page_view` (`id`, `view`) VALUES
(1, 350);

-- --------------------------------------------------------

--
-- Table structure for table `textile_1st_batch_student`
--

CREATE TABLE `textile_1st_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textile_1st_batch_student`
--

INSERT INTO `textile_1st_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid hasan', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `textile_2nd_batch_student`
--

CREATE TABLE `textile_2nd_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textile_2nd_batch_student`
--

INSERT INTO `textile_2nd_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `textile_3rd_batch_student`
--

CREATE TABLE `textile_3rd_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textile_3rd_batch_student`
--

INSERT INTO `textile_3rd_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `textile_4th_batch_student`
--

CREATE TABLE `textile_4th_batch_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `reg` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `textile_4th_batch_student`
--

INSERT INTO `textile_4th_batch_student` (`id`, `name`, `roll`, `reg`, `gender`, `contact`, `address`) VALUES
(1, 'nahid', 950824, 1418884445, 'male', 1312345678, 'bogura');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `repassword`, `area`, `role`) VALUES
(4, 'Nahid Hasan', 'nahid321', 'nahid321', 'bogura', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_1st_batch_student`
--
ALTER TABLE `civil_1st_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_2nd_batch_student`
--
ALTER TABLE `civil_2nd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_3rd_batch_student`
--
ALTER TABLE `civil_3rd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil_4th_batch_student`
--
ALTER TABLE `civil_4th_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmt_1st_batch_student`
--
ALTER TABLE `cmt_1st_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmt_2nd_batch_student`
--
ALTER TABLE `cmt_2nd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmt_3rd_batch_student`
--
ALTER TABLE `cmt_3rd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cmt_4th_batch_student`
--
ALTER TABLE `cmt_4th_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical_1st_batch_student`
--
ALTER TABLE `electrical_1st_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical_2nd_batch_student`
--
ALTER TABLE `electrical_2nd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical_3rd_batch_student`
--
ALTER TABLE `electrical_3rd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical_4th_batch_student`
--
ALTER TABLE `electrical_4th_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdpm_1st_batch_student`
--
ALTER TABLE `gdpm_1st_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdpm_2nd_batch_student`
--
ALTER TABLE `gdpm_2nd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdpm_3rd_batch_student`
--
ALTER TABLE `gdpm_3rd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gdpm_4th_batch_student`
--
ALTER TABLE `gdpm_4th_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gellary`
--
ALTER TABLE `gellary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_view`
--
ALTER TABLE `page_view`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textile_1st_batch_student`
--
ALTER TABLE `textile_1st_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textile_2nd_batch_student`
--
ALTER TABLE `textile_2nd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textile_3rd_batch_student`
--
ALTER TABLE `textile_3rd_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textile_4th_batch_student`
--
ALTER TABLE `textile_4th_batch_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `civil_1st_batch_student`
--
ALTER TABLE `civil_1st_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `civil_2nd_batch_student`
--
ALTER TABLE `civil_2nd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `civil_3rd_batch_student`
--
ALTER TABLE `civil_3rd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `civil_4th_batch_student`
--
ALTER TABLE `civil_4th_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cmt_1st_batch_student`
--
ALTER TABLE `cmt_1st_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cmt_2nd_batch_student`
--
ALTER TABLE `cmt_2nd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cmt_3rd_batch_student`
--
ALTER TABLE `cmt_3rd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cmt_4th_batch_student`
--
ALTER TABLE `cmt_4th_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `electrical_1st_batch_student`
--
ALTER TABLE `electrical_1st_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `electrical_2nd_batch_student`
--
ALTER TABLE `electrical_2nd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `electrical_3rd_batch_student`
--
ALTER TABLE `electrical_3rd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `electrical_4th_batch_student`
--
ALTER TABLE `electrical_4th_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gdpm_1st_batch_student`
--
ALTER TABLE `gdpm_1st_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gdpm_2nd_batch_student`
--
ALTER TABLE `gdpm_2nd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gdpm_3rd_batch_student`
--
ALTER TABLE `gdpm_3rd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gdpm_4th_batch_student`
--
ALTER TABLE `gdpm_4th_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gellary`
--
ALTER TABLE `gellary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `page_view`
--
ALTER TABLE `page_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `textile_1st_batch_student`
--
ALTER TABLE `textile_1st_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `textile_2nd_batch_student`
--
ALTER TABLE `textile_2nd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `textile_3rd_batch_student`
--
ALTER TABLE `textile_3rd_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `textile_4th_batch_student`
--
ALTER TABLE `textile_4th_batch_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
