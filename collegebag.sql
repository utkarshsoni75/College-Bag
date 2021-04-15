-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 07:39 PM
-- Server version: 8.0.23
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegebag`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'iiitbhopal@gmail.com', 'qwertyuiop');

-- --------------------------------------------------------

--
-- Table structure for table `assingment`
--

CREATE TABLE `assingment` (
  `assgn_id` int NOT NULL,
  `sub_name` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `assgn_number` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `assingment`
--

INSERT INTO `assingment` (`assgn_id`, `sub_name`, `user_id`, `link`, `assgn_number`) VALUES
(1, '2', '1', 'assignment/yoshida2016.pdf', '1'),
(2, '3', '1', 'assignment/yoshida2016.pdf', '1'),
(3, 'Computer Networks', '1', 'assignment/Q1 (1).pdf', '1'),
(5, 'Design and Analysis of Algorithm', '1', 'assignment/yoshida2016.pdf', '1'),
(6, 'Discrete Structure', '1', 'assignment/yoshida2016.pdf', '6'),
(7, 'Operating Systems', '1', 'assignment/yoshida2016.pdf', '7'),
(8, 'Discrete Structure', '1', 'assignment/yoshida2016.pdf', '4');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `note_id` int NOT NULL,
  `sub_id` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `text` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `paper_id` int NOT NULL,
  `sub_id` varchar(45) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `text` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`paper_id`, `sub_id`, `link`, `text`) VALUES
(1, '1', 'papers/Q1 (1).pdf', ' jjh');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int NOT NULL,
  `sub_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`) VALUES
(1, 'Operating Systems'),
(2, 'Computer Networks'),
(3, 'Discrete Structure'),
(4, 'Digital Logic and Design'),
(5, 'Design and Analysis of Algorithm'),
(6, 'Principles of Programming Language - C++'),
(7, 'Engineering Mathematics III'),
(8, 'Network Analysis'),
(9, 'Electronic Devices and Circuits'),
(10, 'Signals and Systems'),
(11, 'Microprocessors and Microcontrollers'),
(12, 'Analog and Digital Communication'),
(13, 'Linear Integrated Circuits'),
(14, 'Database Management System'),
(15, 'Probability Theory and random processes'),
(16, 'Computer Organization and Architecture'),
(17, 'Formal Language and Automata theory'),
(18, 'Software Engineering'),
(19, 'Information Theory and Coding'),
(20, 'Digital Image Processing'),
(21, 'Compiler Design'),
(22, 'Control Systems'),
(23, 'EM Fields'),
(24, 'Control Signal Processing'),
(25, 'Data Communication and networks'),
(26, 'Object oriented design and modeling');

-- --------------------------------------------------------

--
-- Table structure for table `top_contributor`
--

CREATE TABLE `top_contributor` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_contributor`
--

INSERT INTO `top_contributor` (`id`, `username`) VALUES
(1, 'Ashish Kaushal'),
(2, 'Utkarsh Soni'),
(3, 'Amandeep Singh'),
(4, 'Archit Sahu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `username`, `password`) VALUES
(1, 'Ashish Kaushal', 'ashish@gmail.com', '12345678'),
(2, 'Amandeep Singh', 'amandeep@gmail.com', '12345678'),
(3, 'Archit sahu', 'archit@gmail.com', '12345678'),
(4, 'utkarsh soni', 'utkarsh@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `vid_id` int NOT NULL,
  `sub_id` int DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `text` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`vid_id`, `sub_id`, `link`, `text`) VALUES
(1, 2, 'nvjv', ' jjh'),
(2, 2, 'link', 'text'),
(3, 1, 'https://www.youtube.com/playlist?list=PLxCzCOWd7aiGz9donHRrE9I3Mwn6XdP8p', 'Youtube Tutorial'),
(4, 2, 'https://www.youtube.com/playlist?list=PLxCzCOWd7aiGFBD2-2joCpWOLUrDLvVV_', 'Youtube Tutorial'),
(5, 3, 'https://www.youtube.com/playlist?list=PLBlnK6fEyqRhqJPDXcvYlLfXPh37L89g3', 'Youtube Tutorial 1'),
(6, 3, 'https://www.youtube.com/playlist?list=PLmXKhU9FNesTpQNP_OpXN7WaPwGx7NWsq', 'Youtube Tutorial 2'),
(7, 4, 'https://www.youtube.com/playlist?list=PLmXKhU9FNesSfX1PVt4VGm-wbIKfemUWK', 'Youtube Tutorial 1'),
(8, 4, 'https://www.youtube.com/playlist?list=PL9zFgBale5fuk0FSD8CNixOXXWvNwu7ba', 'Youtube Tutorial 2'),
(9, 5, 'https://www.youtube.com/playlist?list=PLxCzCOWd7aiHcmS4i14bI0VrMbZTUvlTa', 'Youtube Tutorial 1'),
(10, 5, 'https://www.youtube.com/playlist?list=PLDN4rrl48XKpZkf03iYFl-O29szjTrs_O', 'Youtube Tutorial 2'),
(11, 6, 'https://www.youtube.com/playlist?list=PLLYz8uHU480j37APNXBdPz7YzAi4XlQUF', 'Youtube Tutorial 1'),
(12, 6, 'https://www.youtube.com/playlist?list=PLftJ4X48yC1k97-tmIpp0HpW-lh2dv9i2', 'Youtube Tutorial 2'),
(13, 7, 'https://www.youtube.com/playlist?list=PLdM-WZokR4tay4nnYBFb1-G5Ea8ZUjbdg', 'Youtube Tutorial'),
(14, 8, 'https://www.youtube.com/playlist?list=PLbRMhDVUMngfNnABo5mre45ZbHqJE2sUn', 'Youtube Tutorial 1'),
(15, 8, 'https://www.youtube.com/playlist?list=PLs5_Rtf2P2r7hkaum0d0LwgWq7K6Ducxf', 'Youtube Tutorial 2'),
(16, 9, 'https://www.youtube.com/playlist?list=PL00WWA9f-4c8c8JEtwOc521ND-XGhaFkL', 'Youtube Tutorial 1'),
(17, 9, 'https://www.youtube.com/playlist?list=PL0n2jBUgUVhvsXil-D-V8LvNX6X5K00bL', 'Youtube Tutorial 2'),
(18, 10, 'https://www.youtube.com/playlist?list=PLUl4u3cNGP61kdPAOC7CzFjJZ8f1eMUxs', 'Youtube Tutorial'),
(19, 11, 'https://www.youtube.com/playlist?list=PLrjkTql3jnm8HbdMwBYIMAd3UdstWChFH', 'Youtube Tutorial'),
(20, 12, 'https://www.youtube.com/playlist?list=PLdnsORcN_8yi1iEPXagU0acwtChNQShFe', 'Youtube Tutorial 1'),
(21, 12, 'https://www.youtube.com/playlist?list=PLDp9Jik5WjRsLppnN81bheIwGB8Hsx_Xa', 'Youtube Tutorial 2'),
(22, 13, 'https://www.youtube.com/playlist?list=PLuv3GM6-gsE3npYPJJDnEF3pdiHZT6Kj3', 'Youtube Tutorial'),
(23, 14, 'https://www.youtube.com/playlist?list=PLxCzCOWd7aiFAN6I8CuViBuCdJgiOkT2Y', 'Youtube Tutorial 1'),
(24, 14, 'https://www.youtube.com/playlist?list=PLmXKhU9FNesR1rSES7oLdJaNFgmuj0SYV', 'Youtube Tutorial 2'),
(25, 15, 'https://www.youtube.com/playlist?list=PLlQim6boihdhWW3ydjqgguPWPcv6N828W', 'Youtube Tutorial'),
(26, 16, 'https://www.youtube.com/playlist?list=PLxCzCOWd7aiHMonh3G6QNKq53C6oNXGrX', 'Youtube Tutorial 1'),
(27, 16, 'https://www.youtube.com/playlist?list=PLG9aCp4uE-s3WzvFW1nI-7hHWNC8s2RdI', 'Youtube Tutorial 2'),
(28, 17, 'https://www.youtube.com/playlist?list=PLBlnK6fEyqRgp46KUv4ZY69yXmpwKOIev', 'Youtube Tutorial 1'),
(29, 17, 'https://www.youtube.com/playlist?list=PLxCzCOWd7aiFM9Lj5G9G_76adtyb4ef7i', 'Youtube Tutorial 2'),
(30, 18, 'https://www.youtube.com/playlist?list=PLxCzCOWd7aiEed7SKZBnC6ypFDWYLRvB2', 'Youtube Tutorial'),
(31, 19, 'https://www.youtube.com/playlist?list=PLV8vIYTIdSnaigcBvSa_S1NVdHhJHz9a4', 'Youtube Tutorial'),
(32, 20, 'https://www.youtube.com/playlist?list=PLuv3GM6-gsE08DuaC6pFUvFaDZ7EnWGX8', 'Youtube Tutorial'),
(33, 21, 'https://www.youtube.com/playlist?list=PLxCzCOWd7aiEKtKSIHYusizkESC42diyc', 'Youtube Tutorial'),
(34, 22, 'https://www.youtube.com/playlist?list=PLyqSpQzTE6M8-wda5vbgHkMQTmu-21hRK', 'Youtube Tutorial'),
(35, 23, 'https://www.youtube.com/playlist?list=PL_mruqjnuVd87sjSDVS9wuit9CSpgIIfx', 'Youtube Tutorial'),
(36, 24, 'https://www.youtube.com/playlist?list=PL9567DFCA3A66F299', 'Youtube Tutorial'),
(37, 25, 'https://www.youtube.com/playlist?list=PLG9aCp4uE-s325FSHTzzD51k2Kl6vt4fT', 'Youtube Tutorial'),
(38, 26, 'https://www.youtube.com/playlist?list=PLrt8bwOmGRknfT4c0dxZdUl-fDxeCyNcu', 'Youtube Tutorial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assingment`
--
ALTER TABLE `assingment`
  ADD PRIMARY KEY (`assgn_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `top_contributor`
--
ALTER TABLE `top_contributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assingment`
--
ALTER TABLE `assingment`
  MODIFY `assgn_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `note_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `top_contributor`
--
ALTER TABLE `top_contributor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
