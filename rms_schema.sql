-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2017 at 11:06 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `last_log_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `user_id`, `name`, `address`, `date_of_birth`, `phone_no`, `qualification`, `experience`, `department`, `join_date`, `last_log_in`) VALUES
(1, 2, 'Shubham Khan', 'Bankura,722152', '0000-00-00', '8972424100', 'B.tech', '1 yr', 'CST', '0000-00-00', '0000-00-00'),
(2, 35, 'Shampa Sarkar', 'Chhatna,Bamunkuli,Pin-722132', '1985-09-23', '1111', 'PHD', '2Yrs', 'CST', '2014-10-01', '2017-06-01'),
(3, 36, 'Bipul Dey', 'Junction,Siliguri,Pin-755122', '1986-06-05', '2222', 'PHD', '2Yrs', 'CST', '2015-06-05', '2017-06-06'),
(4, 37, 'Hari Singh', 'Danguajhar,Jalpaiguri,Pin-735102', '1984-06-01', '3333', 'M.tech', '4 yrs', 'CST', '2013-11-15', '2017-06-09'),
(5, 38, 'Deb Khaitan', 'Milonpolli,Bankura,Pin-722102', '1985-06-05', '4444', 'PHD', '3Yrs', 'CST', '2015-04-01', '2017-06-08'),
(6, 39, 'Shuvoshree Dutta', 'Purandarpur,Bankura,Pin-722105', '1987-03-19', '5555', 'M.tech', '4yrs', 'CST', '2012-02-12', '2017-05-08'),
(7, 40, 'Ananya Ghorai', 'Boxibazer,Mednapur,Pin-721101', '1985-07-23', '6666', 'PHD', '4yrs', 'CST', '2013-06-12', '2017-05-03'),
(8, 41, 'Mainak Maity', 'Parkstreet,Kolkata,Pin-700010', '1985-02-01', '7777', 'MBA', '4yrs', 'CST', '2010-03-02', '2017-05-30'),
(9, 42, 'Indranath Chatterjee', 'Shibpur,Howrah,Pin-700105', '1986-05-04', '8888', 'M.tech', '2yrs', 'CST', '2015-04-07', '2017-02-08'),
(10, 43, 'Subhankar Haldar', 'Salilake,Howrah,Pin-700109', '1986-12-30', '9999', 'PHD', '3yrs', 'CST', '2014-06-05', '2017-06-01'),
(11, 44, 'Kinnar Choudhori', 'Ranigang,Asansol,Pin-700104', '1986-11-28', '1010', 'M.tech', '2yrs', 'CST', '2015-06-07', '2017-06-05'),
(12, 45, 'Priyanka Dutta', 'Borobazer,Chhatna,Pin-722132', '1987-05-05', '1111', 'MBA', '3 yrs', 'CST', '2013-06-05', '2017-03-02'),
(13, 46, 'Tamanash Chatterjee', 'Koliari,Asansol,Pin-744101', '1985-07-20', '1212', 'B.tech', '5 yrs', 'CST', '2012-06-08', '2017-04-18'),
(14, 47, 'Annesha Mandal', 'Chandiduspolli,Bankura,Pin-722132', '1985-11-19', '1313', 'M.tech', '3yrs', 'CST', '2013-06-06', '2017-06-07'),
(15, 48, 'Pema tamag', 'Darjeeling,Pin-711022', '1985-07-23', '1414', 'PHD', '3yrs', 'CST', '2013-02-01', '2017-04-12'),
(16, 49, 'Sachin Mandal', 'Sirpuria,Jhantipahari,Bankura,,Pin-722154', '1984-11-11', '1515', 'B.tech', '5Yrs', 'CST', '2010-03-19', '2017-05-08'),
(17, 50, 'Soham Baxi', 'Arabindonogor,Bankura,Pin-722108', '1985-11-29', '1616', 'M.tech', '2yrs', 'CST', '2015-03-05', '2017-04-12'),
(18, 51, 'Atanu  Mukharjee', 'Onda,Bankura,Pin-722100', '1985-01-13', '1717', 'PHD', '3yrs', 'CST', '2013-06-05', '2017-04-19'),
(19, 52, 'Aniket  Chatterjee', 'Chhatna,Bankura,Pin-722132', '1984-02-06', '1818', 'PHD', '5yrs', 'CST', '2010-06-01', '2017-03-03'),
(20, 53, 'Amir Sohail', 'Parkstreet,Kolkata,Pin-700010', '1985-03-05', '1919', 'MBA', '4yrs', 'CST', '2010-06-06', '2017-06-05'),
(21, 54, 'Dipak Pathak', 'Barakpur,Pin-710325', '1985-06-05', '2020', 'MBA', '3yrs', 'CST', '2014-06-07', '2017-01-03'),
(22, 55, 'Dhiman Mandal', 'Shamnagar,Kolkata,Pin-744122', '1984-01-21', '2121', 'PHD', '4yrs', 'CST', '2012-06-07', '2017-06-20'),
(23, 56, 'Srinibus Rana', 'Kamalpur,Bankura,Pin-722102', '1986-04-06', '2222', 'M.tech', '3yrs', 'CST', '2014-11-05', '2017-04-02'),
(24, 57, 'Naran Mandal', 'Bisnupur,Bankura,Pin-722109', '1984-07-07', '2323', 'M.tech', '5yrs', 'CST', '2010-06-19', '2017-02-28'),
(25, 58, 'Shubas Ghosal', 'Bamunkuli,Chhatna,Pin-722132', '1986-06-04', '2424', 'PHD', '3yrs', 'CST', '2011-06-05', '2017-04-03'),
(26, 59, 'Sougata Roy', 'Nutanchoti,Bankura,Pin-700107', '2087-04-04', '2525', 'M.tech', '3yrs', 'CST', '2013-06-26', '2017-04-24'),
(27, 60, 'Sagar Banerjee', 'East Mednapur,Pin-721102', '1987-02-26', '2626', 'PHD', '3yrs', 'CST', '2012-06-04', '2017-06-19'),
(28, 61, 'Jhuma Mandal', 'Kharagpur,Pin-788025', '1987-06-05', '2727', 'B.tech', '4yrs', 'CST', '2013-12-05', '2017-01-16'),
(29, 62, 'Shema Roy', 'Naihati,Pin-755122', '1985-12-25', '2828', 'M.tech', '3yrs', 'CST', '2014-06-18', '2017-05-21'),
(30, 63, 'Taniya Ghosh', 'Bandal,Hoogly', '2087-03-01', '2929', 'M.tech', '3yrs', 'CST', '2015-06-18', '2014-06-26'),
(31, 64, 'Rakesh Ghosal', 'Chhatna,Bankura,Pin-722132', '1985-06-05', '3030', 'B.tech', '5yrs', 'CST', '2012-06-19', '2017-06-12'),
(32, 1498427647, 'AAAAA RRRRR', 'sdfsdf,mhghmv,hggk,jkkjhj,722152', '0000-00-00', '8972424100', '', '', 'IT', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `take_id` int(11) NOT NULL,
  `theory_marks` int(3) NOT NULL,
  `practical_marks` int(3) NOT NULL,
  `total_marks` int(3) NOT NULL,
  `pass_fail` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `reg_no` varchar(12) NOT NULL,
  `roll_no` varchar(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sem` int(1) NOT NULL,
  `department` varchar(255) NOT NULL,
  `reg_date` varchar(12) NOT NULL,
  `last_log_in` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`reg_no`, `roll_no`, `user_id`, `name`, `address`, `phone_no`, `date_of_birth`, `sem`, `department`, `reg_date`, `last_log_in`) VALUES
('10', '10', 12, 'Susovan Mandal', 'Nutonchoti,Bankura,Pin-722135', '9999', '1997-06-21', 1, 'CST', '04-12-2015', '2017-05-06'),
('11', '11', 13, 'Souvik Mandal', 'puabagan,Bankura,Pin-722106', '1010', '1997-10-14', 4, 'CST', '04-12-15', '2017-05-07'),
('12', '12', 14, 'Sruti Ray', 'Lilua,Howrah,Pin-732165', '1111', '1977-10-08', 1, 'CST', '04-12-2015', '2017-05-10'),
('13', '13', 15, 'Shivam Dube', 'Saltlake,Howrah,Pin-758425', '1212', '1997-06-06', 1, 'CST', '04-12-15', '2017-05-11'),
('14', '14', 16, '', 'Salboni,Bankura,Pin-722133', '2147483647', '0000-00-00', 1, 'CST', '04-12-2015', '2017-04-14'),
('15', '15', 17, 'Kundan Singh', 'kolkata,Pin-755132', '1414', '1997-06-07', 1, 'CST', '04-12-15', '2017-05-18'),
('16', '16', 18, 'Rahul Panday', 'Belakuri,Katrah,Pin-722132', '1515', '1995-06-06', 1, 'CST', '04-12-2015', '2017-05-16'),
('17', '17', 19, 'Aaush Sukla', 'Katrah,Bankura,Pin-722132', '1616', '1997-07-14', 1, 'CST', '04-12-15', '2017-05-18'),
('18', '18', 20, 'Snigdha Mandal', 'Arabindonogor,Bankura,Pin-722135', '1717', '1996-10-11', 1, 'CST', '04-12-2015', '2017-05-09'),
('19', '19', 21, 'Sraboni Mandal', 'Katjuridanga,Bankura,Pin-722134', '1818', '1997-07-23', 1, 'CST', '04-12-15', '2017-06-01'),
('2', '2', 4, 'Arpita Ghosal', 'Chhatna,Bankura,Pin-722132', '1111', '1977-07-03', 1, 'CST', '04-12-2015', '2017-06-07'),
('20', '20', 22, 'Paban Singha', 'Chhatna Chandiduspolli,Bankura,Pin-722132', '1919', '1997-10-26', 1, 'CST', '04-12-2015', '2017-06-04'),
('21', '21', 23, 'Anik Ghosh', 'Chhatna Bamunkuli,Bankura,Pin-722132', '2020', '1997-06-04', 1, 'CST', '04-12-15', '2017-06-02'),
('22', '22', 24, 'Ankan Sarkar', 'Chhatna,Bankura,Pin-722132', '2121', '1997-06-06', 8, 'CST', '04-12-2015', '2017-05-01'),
('23', '23', 25, 'Biswanath Bauri', 'Prandarpur,Bankura,Pin-722105', '2222', '1997-04-01', 1, 'CST', '04-12-15', '2017-06-01'),
('24', '24', 27, 'Rimo Kumbhakar', 'Kamarkuli,Bankura,Pin-722132', '2424', '1997-01-13', 1, 'CST', '04-12-2015', '2017-06-02'),
('25', '25', 28, 'Swarna Mandal', 'Bamunkuli,Bankura,Pin-722132', '2525', '1997-06-05', 1, 'CST', '04-12-15', '2017-06-20'),
('26', '26', 29, 'Kundan jha', 'Chandmaridanga,Bankura,Pin-722139', '2626', '1997-06-04', 3, 'CST', '04-12-2015', '2017-05-08'),
('27', '27', 30, 'Rupam Dutta', 'Chhatna,Bankura,Pin-722132', '2727', '1997-06-28', 1, 'CST', '04-12-15', '2017-05-19'),
('28', '28', 31, 'Shubrasankar Chatterjee', 'Jalpaiguri,Pin-735102', '2828', '2017-06-04', 1, 'CST', '04-12-2015', '2017-04-11'),
('29', '29', 32, 'Nil Ghosh', 'Chhatna,Bankura,Pin-722132', '2929', '1997-06-04', 1, 'CST', '04-12-15', '2017-04-06'),
('3', '3', 5, 'Paromita Patra', 'Santragachi,Hoerah,Pin-74125', '2222', '1997-10-30', 6, 'CST', '04-12-15', '2017-06-04'),
('30', '30', 33, 'Bikas Dutta', 'Kamarkuli,Bankura,Pin-722132', '3030', '1997-06-06', 1, 'CST', '04-12-2015', '2017-05-14'),
('31', '31', 34, 'Dhananjay Mandal', 'Salkia,Howrah,Pin-725165', '3131', '1997-01-06', 1, 'CST', '04-12-15', '2017-06-01'),
('33', '33', 1498428980, 'sdjkfh dhkfsjk', 'djhf,dsfdjhjks,jksdh,shdkj,722152', '8972424100', '0000-00-00', 3, 'ME', '26-06-2017 0', '0000-00-00'),
('4', '4', 6, 'Kousik Karmoker', 'Jalpaiguri,Pin-735102', '3333', '1997-05-13', 1, 'CST', '04-12-2015', '2017-06-01'),
('5', '5', 7, 'Arghadip Singha', 'kochbihar.Pin-758425', '4444', '1977-01-01', 1, 'CST', '04-12-15', '2017-05-01'),
('6', '6', 8, 'Somik Ranjan Dasgupta', 'Drgapur,Pin-736521', '5555', '1996-06-01', 2, 'CST', '04-12-2015', '2017-05-02'),
('7', '7', 9, 'Akash Roychoudhori', 'chhtana,Bamunkuli,Pin-752144', '6666', '1997-06-06', 7, 'CST', '04-12-15', '2017-06-03'),
('8', '8', 10, 'Tuhin Mitra', 'New Delhi.Pin-758421', '7777', '1995-06-05', 1, 'CST', '04-12-2015', '2017-05-03'),
('9', '9', 11, 'Surojit Show', 'Muchipara,Durgapur,Pin-788455', '8888', '1997-06-07', 5, 'CST', '04-12-15', '2017-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_code` varchar(10) NOT NULL,
  `sub_name` varchar(80) NOT NULL,
  `th_marks` int(3) NOT NULL,
  `pr_marks` int(3) NOT NULL,
  `total_marks` int(3) NOT NULL,
  `sem` int(1) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_code`, `sub_name`, `th_marks`, `pr_marks`, `total_marks`, `sem`, `department`) VALUES
('AM1201', 'Machanics', 70, 30, 100, 1, 'CST'),
('AM1251', 'Drawing Practice', 70, 30, 100, 2, 'CST'),
('CE1201', 'Environment&Ecology', 70, 30, 100, 2, 'CST'),
('CH1201', 'Chemistry', 70, 30, 100, 1, 'CST'),
('CH1251', 'Chemistry Lab', 70, 30, 100, 1, 'CST'),
('CS1201', 'Int.to comp.&prog.', 70, 30, 100, 2, 'CST'),
('CS1251', 'Computing Practice Lab', 70, 30, 100, 2, 'CST'),
('CS301', 'Digital Logic', 70, 30, 100, 3, 'CST'),
('CS302', 'Data Structure and Algorithm', 70, 30, 100, 3, 'CST'),
('CS303', 'Discrete Structure', 70, 30, 100, 3, 'CST'),
('CS351', 'Digital Logic Laboratory', 70, 30, 100, 3, 'CST'),
('CS352', 'Algorithm-I Laboratory', 70, 30, 100, 3, 'CST'),
('CS371', 'Mini Project-I', 70, 30, 100, 3, 'CST'),
('CS401', 'Design and Analysis of Algorithm', 70, 30, 100, 4, 'CST'),
('CS402', 'Computer and Analysis of Algorithm', 70, 30, 100, 4, 'CST'),
('CS403', 'Programming Paradigms', 70, 30, 100, 4, 'CST'),
('CS404', 'Theory of computation', 70, 30, 100, 4, 'CST'),
('CS451', 'Algorithm-II Laboratory', 70, 30, 100, 4, 'CST'),
('CS452', 'Computer Architecture and Org.Lab.', 70, 30, 100, 4, 'CST'),
('CS453', 'Programming Paradigms Labratory', 70, 30, 100, 4, 'CST'),
('CS471', 'Mini Project-II', 70, 30, 100, 4, 'CST'),
('CS501', 'Database Management System', 70, 30, 100, 5, 'CST'),
('CS502', 'Computer Architecture and Organization-II', 70, 30, 100, 5, 'CST'),
('CS503', 'Operating System', 70, 30, 100, 5, 'CST'),
('CS504/x', 'Elective-I:\r\nComputer Graphics(CS501/1)\r\nGraph Algorithms(CS504/2)', 70, 30, 100, 5, 'CST'),
('CS551', 'DBMS Lab', 70, 30, 100, 5, 'CST'),
('CS553', 'Operating System Laboratory', 70, 30, 100, 5, 'CST'),
('CS554/x', 'Elective-I Laboratory', 70, 30, 100, 5, 'CST'),
('CS601', 'Microprocessor Based System', 70, 30, 100, 6, 'CST'),
('CS602', 'Computer Networks', 70, 30, 100, 6, 'CST'),
('CS603/x', 'Elective-II:\r\nCAD for VLSICS603/1)\r\nIntroduction to Data mining(CS603/2)', 70, 30, 100, 6, 'CST'),
('CS611', 'Simulation and Modeling', 70, 30, 100, 6, 'CST'),
('CS651', 'Microprocessor Laboratory', 70, 30, 100, 6, 'CST'),
('CS652', 'Computer Networks Lab', 70, 30, 100, 6, 'CST'),
('CS653/x', 'Elective-II Lab:\r\nCAD for VLSI Lab(653/1)\r\nData Mining Lab(653/2)', 70, 30, 100, 6, 'CST'),
('CS671', 'Comprehensive Viva-voce', 70, 30, 100, 6, 'CST'),
('CS701', 'Software Engineering', 70, 30, 100, 7, 'CST'),
('CS702', 'Information and coding Theory', 70, 30, 100, 7, 'CST'),
('CS703/x', 'Elective-I(Dept)', 70, 30, 100, 7, 'CST'),
('CS704/x', 'Elective-II', 70, 30, 100, 7, 'CST'),
('CS751', 'Software Engineering Lab', 70, 30, 100, 7, 'CST'),
('CS753/x', 'Elective-I Lab(Dept)', 70, 30, 100, 7, 'CST'),
('CS761', 'Group Discussion/Seminar', 70, 30, 100, 7, 'CST'),
('CS771', 'Project Term Paper', 70, 30, 100, 7, 'CST'),
('CS801', 'Artificial Intelligence ', 70, 30, 100, 8, 'CST'),
('CS802/x', 'Elective-III(Dept)', 70, 30, 100, 8, 'CST'),
('CS803/x', 'ELECTIVE-iV(Open)', 70, 30, 100, 8, 'CST'),
('CS851', 'Artificial Intelligence Laboratory', 70, 30, 100, 8, 'CST'),
('CS852/x', 'Elective-III Lab(Dept)', 70, 30, 100, 8, 'CST'),
('CS871', 'Project', 70, 30, 100, 8, 'CST'),
('CS872', 'Grand Viva-II', 70, 30, 100, 8, 'CST'),
('CS908/x', 'aaaaaaaaa', 70, 30, 100, 8, 'CST'),
('EE1201', 'Basic Electrical Eng.', 70, 30, 100, 2, 'CST'),
('EE1251', 'Basic Electrical Eng.Lab', 70, 30, 100, 2, 'CST'),
('EE304', 'Electrical Machanics', 70, 30, 100, 3, 'CST'),
('EE354', 'Electrical Machines Lab', 70, 30, 100, 3, 'CST'),
('ET1201', 'Basic Electronics Eng', 70, 30, 100, 1, 'CST'),
('ET1251', 'Basic Electronics Eng. Lab', 70, 30, 100, 1, 'CST'),
('HU1201', 'Prof.comm.In English', 70, 30, 100, 1, 'CST'),
('HU3401', 'Intr.To Mgnt & Industrial Sociology', 70, 30, 100, 4, 'CST'),
('HU5601', 'HUM-III', 70, 30, 100, 6, 'CST'),
('HU7801', 'Accounting and Financial Management(HUM-IV)', 70, 30, 100, 8, 'CST'),
('MA101', 'Mathematics-I', 70, 30, 100, 1, 'CST'),
('MA102', 'Mathematics-II', 70, 30, 100, 2, 'CST'),
('MA301', 'Mathematics-3', 70, 30, 100, 3, 'CST'),
('PH1201', 'Physics', 70, 30, 100, 2, 'CST'),
('PH1251', 'Physics Lab', 70, 30, 100, 2, 'CST'),
('WS1251', 'Workshop Practice', 70, 30, 100, 1, 'CST');

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `take_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `sem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `fac_id` int(11) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `sem` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`fac_id`, `sub_code`, `sem`) VALUES
(17, 'EE304', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `user_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email_id`, `password`, `user_type`, `user_status`) VALUES
(1, 'admin@gmail.com', '12345', 'Admin', 0),
(2, 'fac@gmail.com', '54321', 'Faculty', 0),
(3, 'stu@gmail.com', '14725', 'Student', 0),
(4, 'arp@gmail.com', '12345', 'Student', 0),
(5, 'paro@gmail.com', '22215', 'Student', 0),
(6, 'kou@gmail.com', '11111', 'Student', 0),
(7, 'arg@gmail.com', '22222', 'Student', 0),
(8, 'sou@gmail.com', '33333', 'Student', 0),
(9, 'aks@gmail.com', '44444', 'Student', 1),
(10, 'tuh@gmail.com', '55555', 'Student', 0),
(11, 'sur@gmail.com', '66666', 'Student', 0),
(12, 'sus@gmail.com', '77777', 'Student', 0),
(13, 'souv@gmail.com', '88888', 'Student', 0),
(14, 'sruti@gmail.com', '99999', 'Student', 0),
(15, 'shiv@gmail.com', '10101', 'Student', 0),
(16, 'aniket@gmail.com', '11122', 'Student', 1),
(17, 'kundan@gmail.com', '22111', 'Student', 0),
(18, 'rahul@gmail.com', '33221', 'Student', 0),
(19, 'aus@gmail.com', '32122', 'Student', 1),
(20, 'snig@gmail.com', '55221', 'Student', 0),
(21, 'sra@gmail.com', '52142', 'Student', 0),
(22, 'pab@gmail.com', '85252', 'Student', 0),
(23, 'anik@gmail.com', '41251', 'Student', 1),
(24, 'ankan@gmail.com', '75541', 'Student', 1),
(25, 'bis@gmail.com', '77765', 'Student', 0),
(27, 'rimo@gmail.com', '99887', 'Student', 0),
(28, 'swarna@gmail.com', '00998', 'Student', 0),
(29, 'kundan1@gmail.com', '74352', 'Student', 0),
(30, 'rupam@gmail.com', '33442', 'Student', 0),
(31, 'shubra@gmail.com', '09897', 'Student', 0),
(32, 'nil@gmail.com', '80987', 'Student', 0),
(33, 'bikas@gmail.com', '00786', 'Student', 0),
(34, 'dhannu@gmail.com', '45634', 'Student', 0),
(35, 'sham@gmail.com', '11332', 'Faculty', 0),
(36, 'bipu@gmail.com', '21345', 'Faculty', 0),
(37, 'hari@gmail.com', '65743', 'Faculty', 0),
(38, 'deb@gmail.com', '45673', 'Faculty', 0),
(39, 'suvo@gmail.com', '43265', 'Faculty', 0),
(40, 'ananya@gmail.com', '55544', 'Faculty', 1),
(41, 'mainak@gmail.com', '98765', 'Faculty', 0),
(42, 'indra@gmail.com', '33554', 'Faculty', 1),
(43, 'subhankar@gmail.com', '13245', 'Faculty', 0),
(44, 'kinnar@gmail.com', '01543', 'Faculty', 0),
(45, 'priyanka@gmail.com', '11089', 'Faculty', 0),
(46, 'tam@gmail.com', '86543', 'Faculty', 0),
(47, 'anu@gmail.com', '01654', 'Faculty', 1),
(48, 'pema@gmail.com', '10697', 'Faculty', 0),
(49, 'sachin@gmail.com', '20765', 'Faculty', 0),
(50, 'soham@gmail.com', '30887', 'Faculty', 0),
(51, 'atanu@gmail.com', '40887', 'Faculty', 0),
(52, 'aniket1@gmail.com', '60987', 'Faculty', 1),
(53, 'amir@gmail.com', '50876', 'Faculty', 1),
(54, 'dipak@gmail.com', '80976', 'Faculty', 0),
(55, 'dhiman@gmail.com', '90897', 'Faculty', 0),
(56, 'rana@gmail.com', '88009', 'Faculti', 0),
(57, 'naran@gmail.com', '09876', 'Faculty', 0),
(58, 'shubas@gmail.com', '08765', 'Faculty', 0),
(59, 'sougata@gmail.com', '07654', 'Faculty', 0),
(60, 'sagar@gmail.com', '06543', 'Faculty', 0),
(61, 'jhuma@gmail.com', '04321', 'Faculty', 0),
(62, 'shema@gmail.com', '03210', 'Faculty', 0),
(63, 'tkm@gmail.com', '00987', 'Faculty', 0),
(64, 'rky@gmail.com', '00876', 'Faculty', 0),
(1498427647, 'hsk@h.com', '25836', 'faculty', 1),
(1498428980, 'sk@g.com', '14725', 'student', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `fac_id` (`fac_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `roll_no` (`roll_no`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_code`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`take_id`),
  ADD KEY `roll_no` (`roll_no`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `takes`
--
ALTER TABLE `takes`
  MODIFY `take_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
