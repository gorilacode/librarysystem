-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 07:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `booktable`
--

CREATE TABLE IF NOT EXISTS `booktable` (
`id` int(11) NOT NULL,
  `bookTitle` varchar(200) NOT NULL,
  `isbn` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `fileName` varchar(200) NOT NULL,
  `imgFileName` varchar(200) NOT NULL,
  `bookDescription` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `dateAdded` datetime NOT NULL,
  `author` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booktable`
--

INSERT INTO `booktable` (`id`, `bookTitle`, `isbn`, `category`, `level`, `department`, `fileName`, `imgFileName`, `bookDescription`, `year`, `dateAdded`, `author`) VALUES
(4, 'Advances in Mobile Cloud Networking', '263571863551727', 1, 2, 1, 'ff.pdf', 'book.jpg', '1st Edition ', '2001', '2018-08-24 00:45:27', 'Frank Richard'),
(5, 'Originals : How to move the world', '83728735762', 1, 2, 8, 'Introduction To Web Design - Lesson 1 - Introduction To Web Design - 0616.pdf', 'IMG-20180617-WA0015.jpg', 'New your times best selling book', '2008', '2018-08-24 10:02:32', 'Adam Grant'),
(6, 'Ted Talks', '982341654231', 1, 1, 2, 'Introduction To Web Design - Lesson 2 - HTML & CSS.pdf', 'IMG-20180617-WA0018.jpg', 'The officer TED Guide', '2000', '2018-08-24 10:06:33', 'Chris Anderson'),
(8, 'The Tipping Point', '1928375342', 1, 2, 11, 'Score Report_ Introduction To Web Design - Week Two Quiz.pdf', 'IMG-20180617-WA0026.jpg', 'How Litle things can make a Big Difference', '2019', '2018-08-24 10:24:47', 'Malcolm Gladwell'),
(9, 'The 80/20 Principle', '2973652443', 1, 1, 3, 'Lesson 8 - Past, Present, Future.pdf', 'IMG-20180617-WA0016.jpg', 'The Secret of Achieving', '2003', '2018-08-24 10:36:55', 'Richard Koch'),
(10, 'Start With Why', '1982736542', 1, 2, 5, 'Lesson 7 - Going Live.pdf', 'IMG-20180617-WA0032.jpg', 'How Great Leader Inspires', '2007', '2018-08-24 11:58:09', 'Simon Sinek'),
(11, 'Zero to One', '827364501', 1, 2, 6, 'openSAP_ios1_Week_1_Unit_3_APSE_Presentation.pdf', 'IMG-20180617-WA0029.jpg', 'Note on Startups', '2004', '2018-08-24 12:05:56', 'Peter Thiel'),
(12, 'The One Thing', '0987564312', 1, 1, 10, 'Aug Digital Lesson 6 Slides.pdf', 'IMG-20180617-WA0030.jpg', 'Behind Extraordinary', '2014', '2018-08-24 12:09:30', 'Gary FultHam'),
(13, 'Men From Mars', '632723867327', 1, 1, 6, 'openSAP_ios1_Week_1_Unit_6_HCPSDKI_Presentation.pdf', 'IMG-20180617-WA0028.jpg', '3rd edition', '1999', '2018-08-24 15:39:03', 'Frank John');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `categoryName` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`) VALUES
(1, 'Textbook'),
(2, 'Journal');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
`id` int(11) NOT NULL,
  `departmentName` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentName`) VALUES
(1, 'Technology'),
(2, 'Mass Communication'),
(3, 'Statistics'),
(4, 'Business Administrative Studies'),
(5, 'Science Laboratory Technology'),
(6, 'Computer Engineering'),
(7, 'Office Technology Management'),
(8, 'Accounting Studies'),
(9, 'Industrial Art'),
(10, 'Building Technology'),
(11, 'Hospitality Managment');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`id` int(11) NOT NULL,
  `levels` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `levels`) VALUES
(1, 'ND'),
(2, 'HND');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE IF NOT EXISTS `studentlogin` (
`id` int(11) NOT NULL,
  `matricNo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `department` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `matricNo`, `password`, `salt`, `department`) VALUES
(2, 'f/hd/17/3210005', 'ec9ba93c96a8c271ef9a1a0c1d694d1111e5be325c0cad80c1675a917cb06f94', 'Ìñ±‘R´ôœy_ýKI“w´íñ81Ê8slX¾?V', 6),
(3, 'f/hd/17/3210020', '323fa0ff32a2b9bc450da578b70accb88eb32e058f9df84abc2aa39a5da620d4', '?œ nK|ÌÀ‚-frk™Fÿ„ÕîìTÌ«³†WX', 2),
(4, 'f/hd/17/3210120', 'd42132eb144b3feb92fca277942a4f0eb0eb5cefb9b43886a6729385a153af79', 'ŸjÓN$eŽ”‹ñOuVîfzso`‘žëiÈ §©', 5),
(5, 'f/hd/17/3210105', 'd776bfc5e41de5bdab6531072a435dad925655f2006de9305e6b875a7d1283c3', '1\Z€ÍX,˜—”Ñì:aQB[kÔWý²‡¬ÿVnV@Ø', 10),
(6, 'f/nd/13/3210001', 'ef7840770291c944213398d7e26001baffa147697d714c52ac1e473dd119a947', 'ûÞ+ÒÖä7»` tÚ¦_c•j´pG€+04ŠÂñ{Ãšy', 4);

-- --------------------------------------------------------

--
-- Table structure for table `studentrecord`
--

CREATE TABLE IF NOT EXISTS `studentrecord` (
`id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNo` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `matricNo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentrecord`
--

INSERT INTO `studentrecord` (`id`, `firstName`, `lastName`, `email`, `phoneNo`, `school`, `department`, `course`, `level`, `matricNo`) VALUES
(2, 'Collins', 'Benson', 'collinsbenson0039@gmail.com', '08188531726', 'Technology', '6', 'computer science', '2', 'f/hd/17/3210005'),
(3, 'Ada', 'Ogbonna', 'adaglory09@gmail.com', '08181759231', 'Technology', '2', 'mass communication', '2', 'f/hd/17/3210020'),
(4, 'Ekene', 'Josiah', 'ekenejosiah11@gmail.com', '09088531726', 'Technology', '5', 'science labouratory technology', '2', 'f/hd/17/3210120'),
(5, 'Grace ', 'Frank', 'gracefarnk@yahoo.com', '08083687783', 'Technology', '10', 'building technology', '1', 'f/hd/17/3210105'),
(6, 'Ayo', 'Ogun', 'ayoogun@gmail.com', '0818798798', 'Librial Studies', '2', 'mass com', '1', 'f/nd/13/3210001');

-- --------------------------------------------------------

--
-- Table structure for table `userstable`
--

CREATE TABLE IF NOT EXISTS `userstable` (
`id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `userRole` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE IF NOT EXISTS `user_session` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booktable`
--
ALTER TABLE `booktable`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentrecord`
--
ALTER TABLE `studentrecord`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userstable`
--
ALTER TABLE `userstable`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_session`
--
ALTER TABLE `user_session`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booktable`
--
ALTER TABLE `booktable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `studentrecord`
--
ALTER TABLE `studentrecord`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userstable`
--
ALTER TABLE `userstable`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
