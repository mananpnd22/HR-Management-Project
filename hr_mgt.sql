-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 05, 2015 at 12:53 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hr_mgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
`admin_id` int(20) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Manan', 'mananpandya@yahoo.com', 'abcd2233');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
`content_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content_desc` text NOT NULL,
  `content_date` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`content_id`, `title`, `content_desc`, `content_date`) VALUES
(11, 'contactus', '<div class="col" align="right">\r\n				  <div class="" align="center" >\r\n						<div class="left_my marg_right1" >\r\n						  <div><a href="#"></a> </div>\r\n						</div>\r\n				        <h2 align="center" class="style12"> Company Details</h2>\r\n						<h3 align="center" class="style14"> ITGyan Offices</h3>\r\n						<p align="center" class="style11"> </p>\r\n						<div>\r\n				          <p> </p>\r\n<br/>				          <p class="style13"><u>India</u></p>\r\n				          <p><br />\r\n			              <strong class="color1 style6"><u>Ahmedabad Office</u></strong></p>\r\n				          <p><br />\r\n						    <span class="style7">3rd Floor,B Gold Coin ComplexÂ <br />\r\n			                Near Jodhpur Char Rasta<br />\r\n			                Satellite, Ahmedabad - 380015<br />\r\n			                Gujarat India<br />\r\n			                <br />\r\n			                Phone : 0091 83476 50006<br />\r\n			                Email : info.itgyan@gmail.com<br />\r\n			                Website : www.itgyan.co.in<br />\r\n			                  </span></p>\r\n				          <p><u><br />\r\n		                    <span class="style6 color1"><strong>Baroda OfficeÂ </strong></span></u></p>\r\n				          <p><br />\r\n			                <span class="style7">C-512, Manubhai Tower<br />\r\n			                Opposite M.S. University,<br />\r\n			                Sayajiganj, Baroda 390005</span></p>			          <p></p>\r\n<p><br />\r\n				            <br />\r\n<span class="style13"><u>Overseas Office</u></span></p>\r\n				          <p><br />\r\n			                <span class="color1 style6"><strong><u>London Office</u></strong></span></p>\r\n				          <p><br />\r\n			                <span class="style7">Talbout House,<br />\r\n			                Rayners Lane,<br />\r\n			                Middlesex HA2 9TL<br />\r\n			                London, United Kingdom</span></p>\r\n				          <p></p>\r\n			        </div>\r\n			        <p align="center" class="color1"></p>\r\n				  </div>\r\n					<div class="wrapper pad_bot1">\r\n						<div class="left_my marg_right1">\r\n						  <div align="right"><a href="#"></a></div>\r\n						</div>\r\n					  <p align="right" class="color1"></p>\r\n	</div>\r\n</div>', '2013-04-23'),
(8, 'aboutus', '<div class="" align="center" >\r\n						<div class="left_my marg_right1" >\r\n						  <div><a href="#"></a></div>\r\n						</div>\r\n					  <p align="center" class="color1"><strong><span class="style2">About ITgyan</span><br />\r\n					  </strong><br />\r\n					  <span class="style4">ITtgyan has been formed with a single vision in mind to be different than other institutes providing IT courses and bring difference to Students IT career.<br />\r\n					  <br />\r\n				    At ITgyan, students will gain recognised qualifications and equip themselves with knowledge and the necessary IT skills that will enable them to be employable in an increasingly dynamic and competitive global environment. ITgyan stands for academic excellence whilst remaining affordable, thereby providing maximum value for money from the student''s perspective.</span></p>\r\n					  <p align="center" class="color1"><span class="style4"><br />\r\n				      </span><br />\r\n					    <span class="style2"><strong>Facilities</strong></span><br />\r\n					    <br />\r\n					    <span class="style2"><span class="style4">We have a reasonable size IT laboratory with high specification computer facilities, networked through Windows server. All computers are connected to the Internet through Wifi and wired broadband connection providing seamless superfast connectivity.<br />\r\n				        <br />\r\n				        The students can access teaching materials and course work provided by the lecturers via our computer network from the College IT Laboratory as well as over the internet using their personal laptops. Students are also able to download course material, lecture notes from the Internet via a student portal.</span><br />\r\n				        <br />\r\n			        <span class="style4">In addition, wireless Internet connectivity is also available enabling students to access the Internet from their personal laptops and smart phones as well the our Computer network available for student use.</span></span></p>\r\n<p align="center" class="color1">&nbsp;</p>\r\n					  <p align="center" class="color1"><span class="style2"><br />\r\n				      </span><br />\r\n					    <span class="style2"><strong>Counselling Services</strong></span><br />\r\n					    <br />\r\n					    <span class="style4">We employ experienced Student Counsellors who are available to assist students with their problems relating to their career and the course they have undertaken to study. Students and their families can be rest assured that we are committed to their improve their careers. We at Itgyan seek to create a friendly learning environment and we are confident that students will come to regard ITgyan as their career enhancer.</span><br />\r\n				          </p>\r\n				  </div>', '2013-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE `tbl_emp` (
`emp_id` int(10) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `emp_addr` varchar(50) NOT NULL,
  `emp_phone` varchar(20) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `emp_dept` varchar(50) NOT NULL,
  `emp_desg` varchar(20) NOT NULL,
  `emp_salary` double NOT NULL,
  `emp_bdate` date NOT NULL,
  `emp_jdate` date NOT NULL,
  `emp_pwd` varchar(20) NOT NULL,
  `emp_acno` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_emp`
--

INSERT INTO `tbl_emp` (`emp_id`, `emp_name`, `emp_addr`, `emp_phone`, `emp_email`, `emp_dept`, `emp_desg`, `emp_salary`, `emp_bdate`, `emp_jdate`, `emp_pwd`, `emp_acno`) VALUES
(1, 'Manan Pandya', 'Bhavnagar', '9429165165', 'mananpnd22@gmail.com', 'Marketing', 'Chief Manager', 25000, '1992-04-22', '2013-10-22', '819630995', 'acd22152215'),
(2, 'Anand Bavarava', 'Jamnagar', '9033367807', 'anandbavarava@gmail.com', 'IT', 'Officer', 18000, '1992-02-10', '2013-10-20', 'abab1010', 'acno22331212'),
(3, 'Nirav Shah', 'Himmatnagar', '9558521007', 'nirav_shah06@yahoo.in', 'Sales', 'Clerk', 12000, '1991-12-06', '1991-10-20', 'password', 'fgdg54521461'),
(4, 'Harshal Rawal', 'Gandhinagar', '9428436755', 'rawal_31@yahoo.com', 'Sales', 'Manager', 20000, '1991-10-31', '2013-10-21', 'pass2323', 'ndsf21466585'),
(5, 'Jaydeep Dungarani', 'Surat', '9537218383', 'jd21@gmail.com', 'Research', 'Manager', 20000, '1992-04-02', '2013-10-21', '1984558062', 'sjkd54987610'),
(24, 'NIHAL BHALANI', 'Bhavnagar', '9033860600', 'nihalbhalani@yahoo.com', 'PRODUCTION', 'Senior Manager', 18000, '1992-04-20', '2014-07-03', 'nihalpatel92', 'asdf121212'),
(25, 'Raj Parmar', 'Rajkot', '8511404876', 'raj94@gmail.com', 'Marketing', 'Clerk', 25000, '1994-02-13', '2012-02-13', 'raj1302', 'bngh214578'),
(27, 'Dixit Patel', 'Vadodara', '9979646566', 'dixit30@yahoo.com', 'Production', 'Store Manager', 18000, '1994-11-30', '2013-04-16', 'dixit3094', 'bngh214578');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
`news_id` int(10) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `news_desc` text NOT NULL,
  `news_date` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_desc`, `news_date`) VALUES
(1, 'Seminar', 'A Seminar will be held at company office on 29 April 2013.', '2013-04-17'),
(3, 'Hello', 'Hello Employee..Welcome at ITgyan..', '2013-04-17'),
(4, 'Recruitment', 'New Employee Recruitment will be declare soon....', '2013-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
`nletter_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ndesc` text NOT NULL,
  `ndate` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`nletter_id`, `title`, `ndesc`, `ndate`) VALUES
(3, 'newsletter1', 'test nes letter', '2013-04-17'),
(4, 'newsletter2', 'adfaafasdasasdasd', '2013-04-17'),
(5, 'n3', 'sdfsfsfd', '2013-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payroll_master`
--

CREATE TABLE `tbl_payroll_master` (
`payroll_id` int(10) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `emp_da` int(20) NOT NULL,
  `emp_hra` int(20) NOT NULL,
  `emp_pt` int(20) NOT NULL,
  `emp_it` int(20) NOT NULL,
  `emp_pf` int(20) NOT NULL,
  `emp_gs` int(20) NOT NULL,
  `pr_date` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_payroll_master`
--

INSERT INTO `tbl_payroll_master` (`payroll_id`, `emp_id`, `emp_da`, `emp_hra`, `emp_pt`, `emp_it`, `emp_pf`, `emp_gs`, `pr_date`) VALUES
(9, 4, 2000, 1000, 200, 2000, 1000, 19800, '0000-00-00'),
(8, 4, 2000, 1000, 200, 2000, 1000, 19800, '0000-00-00'),
(7, 2, 1800, 900, 180, 1800, 900, 17820, '0000-00-00'),
(6, 1, 2500, 1250, 250, 2500, 1250, 24750, '0000-00-00'),
(10, 3, 1200, 600, 120, 0, 600, 13080, '2013-04-15'),
(11, 3, 1200, 600, 120, 0, 600, 13080, '2013-04-15'),
(12, 4, 2000, 1000, 200, 2000, 1000, 19800, '2013-04-15'),
(13, 4, 2000, 1000, 200, 2000, 1000, 19800, '2013-04-15'),
(14, 4, 2000, 1000, 200, 2000, 1000, 19800, '2013-04-15'),
(15, 3, 1200, 600, 120, 0, 600, 13080, '2013-04-15'),
(16, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-15'),
(17, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-15'),
(18, 3, 1200, 600, 120, 0, 600, 13080, '2013-04-16'),
(19, 5, 2000, 1000, 200, 2000, 1000, 19800, '2013-04-16'),
(20, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-16'),
(21, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-16'),
(22, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-16'),
(23, 24, 1800, 900, 180, 1800, 900, 17820, '2013-04-17'),
(24, 27, 1800, 900, 180, 1800, 900, 17820, '2013-04-17'),
(25, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-18'),
(26, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-18'),
(27, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-19'),
(28, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-20'),
(29, 2, 1800, 900, 180, 1800, 900, 17820, '2013-04-20'),
(30, 3, 1200, 600, 120, 0, 600, 13080, '2013-04-20'),
(31, 4, 2000, 1000, 200, 2000, 1000, 19800, '2013-04-20'),
(32, 27, 1800, 900, 180, 1800, 900, 17820, '2013-04-20'),
(33, 5, 2000, 1000, 200, 2000, 1000, 19800, '2013-04-20'),
(34, 5, 2000, 1000, 200, 2000, 1000, 19800, '2013-04-20'),
(35, 4, 2000, 1000, 200, 2000, 1000, 19800, '2013-04-21'),
(36, 1, 2500, 1250, 250, 2500, 1250, 24750, '2013-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax_master`
--

CREATE TABLE `tbl_tax_master` (
`tax_id` int(20) NOT NULL,
  `min_limit` int(10) NOT NULL,
  `max_limit` int(20) NOT NULL,
  `tax_perc` varchar(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_tax_master`
--

INSERT INTO `tbl_tax_master` (`tax_id`, `min_limit`, `max_limit`, `tax_perc`) VALUES
(1, 0, 200000, '0'),
(2, 200001, 500000, '10'),
(3, 500001, 1000000, '20'),
(4, 1000001, 5000000, '30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`admin_id`), ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
 ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
 ADD PRIMARY KEY (`emp_id`), ADD UNIQUE KEY `emp_email` (`emp_email`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
 ADD PRIMARY KEY (`nletter_id`);

--
-- Indexes for table `tbl_payroll_master`
--
ALTER TABLE `tbl_payroll_master`
 ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `tbl_tax_master`
--
ALTER TABLE `tbl_tax_master`
 ADD PRIMARY KEY (`tax_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
MODIFY `content_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_emp`
--
ALTER TABLE `tbl_emp`
MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
MODIFY `nletter_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_payroll_master`
--
ALTER TABLE `tbl_payroll_master`
MODIFY `payroll_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_tax_master`
--
ALTER TABLE `tbl_tax_master`
MODIFY `tax_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
