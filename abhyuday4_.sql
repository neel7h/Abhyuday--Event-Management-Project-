-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 12:45 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abhyuday4_`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('123', '123', 17);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`) VALUES
(1, 'A.M.C College1'),
(2, 'Abhudaya degree College'),
(3, 'Acharya Institute of Management and Science'),
(4, 'Acharya Institute Of Technology'),
(5, 'Acharya Instiute Graduate Studies'),
(6, 'Acharya Patashala College of Arts and Science'),
(7, 'Acharyas Bangalore B School'),
(8, 'Adarsh Institute of Management and Information Technology'),
(9, 'Adarsha College of Management Studies'),
(10, 'Adharsha Vidhya Kendra College'),
(11, 'Adithya Institue of Management and Studies and Resarch'),
(12, 'Administrative Management College'),
(13, 'Advanced Management College'),
(14, 'AJ Institute of Management Studies'),
(15, 'Akash International Business Management'),
(16, 'Al-Ameen Institute of Information Science'),
(17, 'Al-Ameen Science and Arts College'),
(18, 'AMC Engineering College'),
(19, 'ASC Degree College'),
(20, 'B.E.T College of Management and Science'),
(21, 'B.M.S. College for Women''s'),
(22, 'Baldwin Methodist College'),
(23, 'Baldwin Methodist Womens College'),
(24, 'Bangalore Institute Of Technology'),
(25, 'Bangalore Management College'),
(26, 'Bangalore University(UNI.)'),
(27, 'Bapu Degree College'),
(28, 'BATS Business School'),
(29, 'BES College'),
(30, 'Bharatiya Vidya Foundation College'),
(31, 'Bishop Cotton Academy of Professional management'),
(32, 'Bishop Cotton Women College'),
(33, 'BMA College of Arts, Science and Commerce '),
(34, 'BMS College Of Engineering'),
(35, 'BMS Institute Of Technology and Management'),
(36, 'Brindavan College'),
(37, 'Brindavan College Of Engineering'),
(38, 'Cambridge Institute Of Technology'),
(39, 'Cauvery First Grade College'),
(40, 'City college'),
(41, 'CMR Centre for Business Studies'),
(42, 'CMR Institute Of Management Studies'),
(43, 'CMR Institute Of Technology'),
(44, 'Colombia College'),
(45, 'Community Institute of Commerce and Management '),
(46, 'Dayananda Sagar Academy Of Technology And Management'),
(47, 'Dayananda Sagar Business Academy'),
(48, 'Dayananda Sagar College of Arts, Science and commerce College '),
(49, 'Dayananda Sagar College Of Engineering, Bangalore'),
(50, 'Don Bosco institute of Bio Science and Management Studies'),
(51, 'Dr Ambedkar Institute Of Technology'),
(52, 'Dr. Ambedkar Institute of Management'),
(53, 'Dr. S. Gopalaraju Government First Grade College'),
(54, 'East Point College of Mangement'),
(55, 'East West College Of Management(I SHIFT)'),
(56, 'East West College Of Management(II SHIFT)'),
(57, 'East West Institute Of Technology'),
(58, 'Ebenezer College'),
(59, 'Faith British Academy'),
(60, 'Faran College of Management'),
(61, 'FAS First Grade College'),
(62, 'Federal College of Management'),
(63, 'Florence Degree College '),
(64, 'G.T. Institute of Advanced Studies'),
(65, 'G.V.S College of Management Studies'),
(66, 'Garden City College of Science and Management College'),
(67, 'Gateway College of Business Management'),
(68, 'Global Institute for Corporate Education'),
(69, 'Global Institute of Management Sciences'),
(70, 'Global Institute Of Management Sciences, Bangalore'),
(71, 'Goodwill Christain Womens College '),
(72, 'Green City Degree College'),
(73, 'GRV Business Management Academy'),
(74, 'Harward Institute of Management and Science'),
(75, 'Hasnath Academy of Management '),
(76, 'Hasnath College'),
(77, 'Hill Side Institute of Management'),
(78, 'HKBK Degree College'),
(79, 'IBMT College of Graduate Studies'),
(80, 'IFIM College '),
(81, 'Indian Academy Degree College'),
(82, 'Indo Asian Academy Degree College'),
(83, 'Indo Asian Women''s Degree College'),
(84, 'International Institute of Business Studies'),
(85, 'ISBR College'),
(86, 'IZEE College of Management and Information Science '),
(87, 'Jain College'),
(88, 'Jame-Ul-Uloom College of Information Science'),
(89, 'Jindal First Grade College for Women '),
(90, 'Jnana Vikas Institute of Management Studies and Commerce '),
(91, 'Jnanajyothi Degree College'),
(92, 'Jnanjyothi College of Business'),
(93, 'Jyoti Nivas College for Womens'),
(94, 'K.G.F Frist Grade College'),
(95, 'K.L.E Society S'),
(96, 'Kanaka College of Management Studies and Science'),
(97, 'KLE Society''s S Nijalingappa College, Bangalore'),
(98, 'Koshys Institute Of Management Studies '),
(99, 'Kristu Jayanti College Of Management And Technology'),
(100, 'Krupanidhi Group Of Institutions, Bangalore'),
(101, 'L.B.S Government First Grade College'),
(102, 'Lowry Memorial College'),
(103, 'Loyola Business School'),
(104, 'M S Engineering College'),
(105, 'M S Ramaiah Institute Of Technology'),
(106, 'M.H. Institute of Management Sciences '),
(107, 'M.N. Degree College'),
(108, 'M.S. Ramaiah First Grade College'),
(109, 'Maharani Lakshmi Ammani Women''s College '),
(110, 'Maharani''s Science College For Women(GOVT)'),
(111, 'Maharishi Institute of Master Management '),
(112, 'Miranda Institute of Management'),
(113, 'Mount Carmel College (Womens), Bangalore'),
(114, 'MVJ College Of Engineering, Bangalore'),
(115, 'Navya College of Management and Science'),
(116, 'New Horizon College Of Engineering (M&T)'),
(117, 'Nitte Meenakshi Institute Of Technology'),
(118, 'Noble Institute of Business Excellence '),
(119, 'Noble School of Business'),
(120, 'P.E.S. Degree College '),
(121, 'P.E.S. Evening College'),
(122, 'Padma College of Management and Science'),
(123, 'Padmashree Institute of Management and Science'),
(124, 'Patel Institute of Science and Management'),
(125, 'PES Institute of Technology-South Campus'),
(126, 'PES University (Formerly PESIT), Bangalore'),
(127, 'Presidency College, Bangalore'),
(128, 'Pushpagiri College of Management and Sciences'),
(129, 'R S College of Management and Science'),
(130, 'R.N. Shetty First Grade College'),
(131, 'R.S. College of Management And Science'),
(132, 'Rajajinagar Parents Association First Grade College'),
(133, 'Rajarajeswari College Of Engineering'),
(134, 'Ramanashree Academy of Management'),
(135, 'RBANMS First Grade College'),
(136, 'Reva Institute of Management Studies'),
(137, 'Reva University, Bangalore'),
(138, 'RNS Institute Of Technology'),
(139, 'Rock Valley College of Science and Management'),
(140, 'Royal College of Arts, Science and Management'),
(141, 'RR Institute of Management'),
(142, 'Rural College'),
(143, 'RV College Of Engineering'),
(144, 'S.B. College of Management Studies'),
(145, 'S.E.A College of Arts, Science and Commerce'),
(146, 'Sacred Hearts Girls First Grade College'),
(147, 'Sambhram Academy Of Management Studies'),
(148, 'Sambhram Institute Of Technology'),
(149, 'Sambram Academi of Management Studies'),
(150, 'Shantiniketan College of Science and Management Studies '),
(151, 'Sha-Shib College'),
(152, 'Sheshadhripuram First Grade College '),
(153, 'Sheshadripuram Arts, Science and Commerce College '),
(154, 'Sheshdripuram Academy of Busienss Study '),
(155, 'Silicon City College Seats'),
(156, 'Sindhi College of Commerce'),
(157, 'Sir M Visvesvaraya Institute Of Technology'),
(158, 'Sitadevi Ratan Chand Nahar Adarsh College '),
(159, 'SJR Women College'),
(160, 'SJRC Arts, Science and Commerce College'),
(161, 'Smt. Danamma Channabasavaiah College of Arts, Commerce and Science and Management Studies '),
(162, 'Smt. Mehra''s College of Management Studies and Science '),
(163, 'Smt. VHD Central Institute of Home Science Palace'),
(164, 'Soundarya Institute of Management and Science '),
(165, 'Spurthy College of Science and Management Studies '),
(166, 'Sree Omkar College of Commerce and Management '),
(167, 'Sri Aurbindo First Grade College for Women '),
(168, 'Sri Baghawan Mahaveer Jain Degree College'),
(169, 'Sri Gokula College of Arts, Science and management Studies '),
(170, 'Sri Krishna Degree College '),
(171, 'Sri Kuvempu Maha Vidhyalaya First Grade College '),
(172, 'Sri Mangilal Sundar Bai Gotawat Jain College of Arts and Commerce '),
(173, 'Sri Sadguru Sainath Degree College'),
(174, 'Sri Venkateshwara College'),
(175, 'Sri. Sai Sathyanarayana College'),
(176, 'SSMRV College Seats'),
(177, 'SSR College of Science and Commerce '),
(178, 'SSR College of Science and Management Studies '),
(179, 'St. Aloysius Degree College '),
(180, 'St. Ann''s First Grade College for Women'),
(181, 'St. Claret College'),
(182, 'St. Francis D Sales College'),
(183, 'St. Theresa Institute of Management Studies'),
(184, 'St. Vincent Pallotti College'),
(185, 'Surana College '),
(186, 'Surana College Centre For Post Graduate Studies'),
(187, 'T John College'),
(188, 'The East Point College of Higher Education '),
(189, 'The Oxford College Of Engineering'),
(190, 'The Oxford College Of Science'),
(191, 'Universal College of Commerce '),
(192, 'Universal College of Computer Application'),
(193, 'V.E.T First Grade College '),
(194, 'Vasavi Jnanapeeta First Grade College '),
(195, 'VEIT Degree College '),
(196, 'Vidhya Vahini First Grade College'),
(197, 'Vijaya College'),
(198, 'Vishwa Chethana Degree College '),
(199, 'Vivekananda College of Arts Science and Commerce '),
(200, 'VJR College'),
(201, 'Westline College of Commerece and Management and Science '),
(202, 'Williams International College'),
(203, 'Christ University'),
(204, 'NMKRV College for Women'),
(205, 'National Degree College'),
(206, 'St. Joseph''s College '),
(207, 'Vidya Vardhaka Sangha First Grade College'),
(208, 'Basaveshwara College Of Commerce, Arts & Science');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `college name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `query` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `college name`, `email`, `mobile`, `query`, `time`) VALUES
(1, 'anil', 'mes', 'anilkumar7.gon@gmail.com', '8050198500', 'nothing is working', '2017-04-21 16:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `id` int(11) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `event_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`id`, `usn`, `name`, `phone`, `event_id`, `email`) VALUES
(1, 'u1 edit', 'n1 edit', 'p1 edit', 1, 'e1 edit');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tag` text NOT NULL,
  `subname` text NOT NULL,
  `image` varchar(10) DEFAULT NULL,
  `rules` text NOT NULL,
  `category` tinyint(1) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `tag`, `subname`, `image`, `rules`, `category`, `min`, `max`) VALUES
(8, 'ULTIMATES', 'bca', '(Poster Making)', 'a8.png', 'BCA', 1, 2, 2),
(9, 'DEADPOOL', 'bca', '(Mock IPL Auctions)', 'a9.png', 'MCA', 0, 2, 2),
(10, 'EXTREMIS', 'bca', '(JAM)', 'a10.png', 'MCA', 0, 1, 1),
(11, 'WAR OF KING', 'bca', '(Treasure Hunt)', 'a11.png', 'MCA', 0, 2, 2),
(13, 'AVENGERS', 'bca', '(Counter Strike) ', 'a13.png', 'MCA', 0, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `frontimg`
--

CREATE TABLE `frontimg` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tag` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frontimg`
--

INSERT INTO `frontimg` (`id`, `name`, `tag`, `img`) VALUES
(1, 'MSRIT', 'ABHYUDAY', 'images/slide1.jpg'),
(2, 'abc', 'msrit', 'images/5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `sourcetmp` varchar(200) NOT NULL,
  `source` varchar(200) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `sourcetmp`, `source`, `name`) VALUES
(9, 'images/59123087a3e6d.png', 'images/59123087a3c38.png', 'img1'),
(10, 'images/59123f5fbe811.png', 'images/59123f5fbe06b.png', 'avv'),
(11, 'images/59123f7fbfa48.png', 'images/59123f7fbf46d.png', 'qserr');

-- --------------------------------------------------------

--
-- Table structure for table `headteam`
--

CREATE TABLE `headteam` (
  `id` int(11) NOT NULL,
  `ref` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `college` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `college_id` int(11) NOT NULL,
  `team_head_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `usn`, `email`, `phone`, `college_id`, `team_head_id`, `event_id`, `time`) VALUES
(53, 'mustafa izzy', '16ujsb7016', 'izzymustafa52@gmail.com', '9916029026', 193, 224, 9, '2017-03-20 03:22:21'),
(54, 'Abhishek', '1NH15MCA02', 'Retroville2jimmy@gmail.com', '9035788400', 116, 225, 3, '2017-03-20 07:07:16'),
(55, 'Nada', '1NH14MCA75', 'retroville2jimmy@gmail.com', '9035788400', 116, 226, 2, '2017-03-20 07:10:50'),
(56, 'Aashita Balan', '146JSB7001', 'aashita.balan@gmail.com', '7795276123', 47, 229, 2, '2017-03-21 19:46:09'),
(57, 'Amit Rana', '14kusb7009', 'amitmnx23@gmail.com', '8951153907', 108, 230, 3, '2017-03-21 22:23:26'),
(58, 'jrsfkuvs', '1', 'sample@email.tst', '555-666-0606', 1, 234, 2, '2017-03-22 05:19:29'),
(59, 'wbmcoswn', '1', 'sample@email.tst', '555-666-0606', 1, 235, 7, '2017-03-22 05:21:40'),
(60, 'mrjryknm', '1', 'sample@email.tst', '555-666-0606', 1, 236, -1, '2017-03-22 05:21:54'),
(61, 'hluacvsb', '1', 'sample@email.tst', '555-666-0606', 1, 237, 1, '2017-03-22 05:22:51'),
(62, 'mrjryknm', '1', 'sample@email.tst', '555-666-0606', 2, 238, 8, '2017-03-22 05:24:57'),
(63, 'pdutikiv', '1', 'sample@email.tst', '555-666-0606', 1, 1506, 5, '2017-03-24 09:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `teamreg`
--

CREATE TABLE `teamreg` (
  `id` int(11) NOT NULL,
  `college` varchar(60) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` int(11) NOT NULL,
  `event` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ref` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `team_head`
--

CREATE TABLE `team_head` (
  `id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `event_id` int(11) NOT NULL,
  `usn` varchar(15) NOT NULL,
  `ref` varchar(11) NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usn` (`usn`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontimg`
--
ALTER TABLE `frontimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headteam`
--
ALTER TABLE `headteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamreg`
--
ALTER TABLE `teamreg`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
